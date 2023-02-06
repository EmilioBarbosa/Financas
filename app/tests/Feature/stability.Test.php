<?php

use GuzzleHttp\Client;

test('stability', function(){

    $client = new Client();
    $response = $client->get('http://127.0.0.1:8090');

    $this->assertEquals(200, $response->getStatusCode());
});