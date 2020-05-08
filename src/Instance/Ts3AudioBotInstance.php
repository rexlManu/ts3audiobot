<?php


namespace rexlManu\Ts3AudioBot\Instance;


use GuzzleHttp\Client;
use rexlManu\Ts3AudioBot\Instance\Bot\Ts3AudioBotHandler;
use rexlManu\Ts3AudioBot\Traits\Bot\Alias;
use rexlManu\Ts3AudioBot\Traits\Bot\Api;
use rexlManu\Ts3AudioBot\Traits\Bot\Command;
use rexlManu\Ts3AudioBot\Traits\Bot\Help;
use rexlManu\Ts3AudioBot\Traits\Bot\History;
use rexlManu\Ts3AudioBot\Traits\Bot\Json;
use rexlManu\Ts3AudioBot\Traits\Bot\ListApi;
use rexlManu\Ts3AudioBot\Traits\Bot\Plugin;
use rexlManu\Ts3AudioBot\Traits\Bot\Settings;
use rexlManu\Ts3AudioBot\Traits\Bot\System;
use function GuzzleHttp\Psr7\str;

class Ts3AudioBotInstance
{

    use System, Plugin, Settings, Json, ListApi, History, Command, Alias, Api, Help;

    private $endpoint;
    private $token;

    private $httpClient;
    private $objectAsArray;

    /**
     * Ts3AudioBotInstance constructor.
     * @param $address
     * @param $port
     * @param $token
     */
    public function __construct($address, $port, $token, $objectAsArray = true)
    {
        $this->endpoint = "http://$address:$port/api";
        $this->token = $token;
        $this->objectAsArray = $objectAsArray;

        $this->createClient();
    }

    private function createClient()
    {
        $this->httpClient = new Client(['headers' => [
            'Authorization' => 'Basic ' . base64_encode($this->token)
        ]]);
    }

    public function request($endpoint, $data = [], $botId = null)
    {
        $url = $endpoint;
        if (!empty($data)) {
            foreach ($data as $param) {
                if ($param != null && !empty($param))
                    $url .= '/' . $param;
            }
        }

        if ($botId != null) {
            $url = sprintf('/bot/use/%s/(%s)', $botId, $url);
        }

        return json_decode($this->httpClient->get($this->endpoint . $url, [
            'verify' => false
        ])->getBody(), $this->objectAsArray);
    }

    public function bot($botId)
    {
        return new Ts3AudioBotHandler($this, $botId);
    }

}