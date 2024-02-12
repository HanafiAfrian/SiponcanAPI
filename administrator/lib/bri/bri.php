<?php

require 'vendor/autoload.php';
include 'response.php';

use Carbon\Carbon;
use GuzzleHttp\Client;
use Desarrolla2\Cache\File as FileCache;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

class BRI {
    private $httpClient, $clientId, $clientSecret, $accessToken, $brivaNo, $institutionCode, $baseUri, $HTTPResponse, $cache;

    public function __construct($mode = 'production')
    {
        $this->baseUri = $mode === 'production' ? 'https://partner.api.bri.co.id' : 'https://sandbox.partner.api.bri.co.id';

        $this->httpClient = new Client([
            // 'headers' => $headers,
            // Base URI is used with relative requests
            'base_uri' => $this->baseUri,
            // You can set any number of default request options.
            // 'timeout'  => 2.0,
        ]);
        $this->HTTPResponse = new HTTPResponse;
        $this->cache = new FileCache(sys_get_temp_dir() . '/cache');
    }

    public function setClientId ($clientId) {
        $this->clientId = $clientId;
    }

    public function setClientSecret ($clientSecret) {
        $this->clientSecret = $clientSecret;
    }

    public function setBrivaNo ($brivaNo) {
        $this->brivaNo = $brivaNo;
    }

    public function setInstitutionCode ($institutionCode) {
        $this->institutionCode = $institutionCode;
    }

    public function getAccessToken () {
        return $this->accessToken;
    }

    public function createSignature ($requestPath, $httpMethod = 'post', $requestBody = '') {
        if (is_array($requestBody) && !empty($requestBody)) {
            $requestBody = json_encode($requestBody, true);
        }

        $requestPath = parse_url($requestPath)['path'];

        $payload = sprintf(
            'path=%s&verb=%s&token=Bearer %s&timestamp=%s&body=%s',
            $requestPath,
            strtoupper($httpMethod),
            $this->accessToken,
            gmdate("Y-m-d\TH:i:s.000\Z"),
            $requestBody
        );

        $hmacSignature = base64_encode(hash_hmac('sha256', $payload, $this->clientSecret, true));

        return $hmacSignature;
    }

    public function makeAuth ($force = false) {
        try {
            $response = $this->cache->get('access_token');
            if (!isset($response) || $force === true) {
                if (!is_dir(sys_get_temp_dir() . '/cache')) {
                    mkdir(sys_get_temp_dir() . '/cache');
                }
                $response = $this->httpClient->request('POST', '/oauth/client_credential/accesstoken?grant_type=client_credentials', [
                    'form_params' => [
                        'client_id' => $this->clientId,
                        'client_secret' => $this->clientSecret
                    ]
                ]);
                $response = $this->HTTPResponse->toJson($response);
                $this->cache->set('access_token', $response, (int) $response->expires_in - 3600);
            }
            if (isset($response->access_token)) {
                $this->accessToken = $response->access_token;
                return true;
            } else {
                return false;
            }
        } catch (ConnectException $e) {
            throw new Exception('Failed to connect service', 502);
        } catch (ClientException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        }
    }

    public function createVA ($custCode, $nama, $amount, $keterangan = '', $expiredDalamJam = '24') {
        if (is_null($this->accessToken) && $this->accessToken === '') {
            return false;
        }
        try {
            $method = 'post';
            $path = '/v1/briva';
            $body = [
                "brivaNo"=> $this->brivaNo,
                "custCode"=> $custCode,
                "nama"=> $nama,
                "amount"=> $amount,
                "keterangan"=> $keterangan,
                "expiredDate"=> Carbon::now()->addHours($expiredDalamJam)->format('Y-m-d H:i:s'),
                "institutionCode" => $this->institutionCode
            ];
            $response = $this->httpClient->request($method, $path, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->accessToken,
                    'BRI-Signature' => $this->createSignature($this->baseUri . $path, $method, $body),
                    'BRI-Timestamp' => gmdate("Y-m-d\TH:i:s.000\Z")
                ],
                'json' => $body
            ]);
            return $response = $this->HTTPResponse->toJson($response);
        } catch (ConnectException $e) {
            throw new Exception('Failed to connect service', 502);
        } catch (ClientException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        }
    }

    public function getVA ($custCode) {
        if (is_null($this->accessToken) && $this->accessToken === '') {
            return false;
        }
        try {
            $method = 'get';
            $path = '/v1/briva/' .$this->institutionCode . '/' . $this->brivaNo . '/' . $custCode;
            $body = '';
            $response = $this->httpClient->request($method, $path, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->accessToken,
                    'BRI-Signature' => $this->createSignature($this->baseUri . $path, $method, $body),
                    'BRI-Timestamp' => gmdate("Y-m-d\TH:i:s.000\Z")
                ]
            ]);
            return $response = $this->HTTPResponse->toJson($response);
        } catch (ConnectException $e) {
            throw new Exception('Failed to connect service', 502);
        } catch (ClientException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        }
    }

    public function deleteVA ($custCode) {
        if (is_null($this->accessToken) && $this->accessToken === '') {
            return false;
        }
        try {
            $method = 'DELETE';
            $path = '/v1/briva';
            $body = 'institutionCode='.$this->institutionCode.'&brivaNo='.$this->brivaNo.'&custCode='.$custCode;
            $response = $this->httpClient->request($method, $path, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->accessToken,
                    'BRI-Signature' => $this->createSignature($this->baseUri . $path, $method, $body),
                    'BRI-Timestamp' => gmdate("Y-m-d\TH:i:s.000\Z")
                ],
                'body' => $body
            ]);
            return $response = $this->HTTPResponse->toJson($response);
        } catch (ConnectException $e) {
            throw new Exception('Failed to connect service', 502);
        } catch (ClientException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode());
            } else {
                throw new Exception(Psr7\Message::toString($e->getMessage()), $e->getCode());
            }
        }
    }
}