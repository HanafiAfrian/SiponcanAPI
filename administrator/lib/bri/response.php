<?php

class HTTPResponse {
    public function toJson ($response) {
        if ($response->getBody()) {
            return json_decode($response->getBody()->getContents());
        }
        return null;
    }
}