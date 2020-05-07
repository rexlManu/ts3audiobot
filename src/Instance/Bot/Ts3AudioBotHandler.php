<?php


namespace rexlManu\Ts3AudioBot\Instance\Bot;


use rexlManu\Ts3AudioBot\Instance\Ts3AudioBotInstance;
use rexlManu\Ts3AudioBot\Traits\Bot\Alias;
use rexlManu\Ts3AudioBot\Traits\Bot\Api;
use rexlManu\Ts3AudioBot\Traits\Bot\Bot;
use rexlManu\Ts3AudioBot\Traits\Bot\Command;
use rexlManu\Ts3AudioBot\Traits\Bot\Data;
use rexlManu\Ts3AudioBot\Traits\Bot\DefaultApi;
use rexlManu\Ts3AudioBot\Traits\Bot\Getmy;
use rexlManu\Ts3AudioBot\Traits\Bot\Getuser;
use rexlManu\Ts3AudioBot\Traits\Bot\Help;
use rexlManu\Ts3AudioBot\Traits\Bot\History;
use rexlManu\Ts3AudioBot\Traits\Bot\Json;
use rexlManu\Ts3AudioBot\Traits\Bot\Kickme;
use rexlManu\Ts3AudioBot\Traits\Bot\ListApi;
use rexlManu\Ts3AudioBot\Traits\Bot\Pm;
use rexlManu\Ts3AudioBot\Traits\Bot\Quiz;
use rexlManu\Ts3AudioBot\Traits\Bot\Random;
use rexlManu\Ts3AudioBot\Traits\Bot\Repeat;
use rexlManu\Ts3AudioBot\Traits\Bot\Rights;
use rexlManu\Ts3AudioBot\Traits\Bot\Search;
use rexlManu\Ts3AudioBot\Traits\Bot\Settings;
use rexlManu\Ts3AudioBot\Traits\Bot\Subscribe;
use rexlManu\Ts3AudioBot\Traits\Bot\Unsubscribe;
use rexlManu\Ts3AudioBot\Traits\Bot\Whisper;

class Ts3AudioBotHandler
{

    use DefaultApi, ListApi, Pm, Quiz, Random, Repeat, Rights, Settings, Subscribe, Unsubscribe, Search, Whisper, Alias, Api, Bot, Command, Data, Getmy, Getuser, Help, History, Json, Kickme;

    private $instance;
    private $botId;

    /**
     * Ts3AudioBot constructor.
     * @param $instance
     */
    public function __construct(Ts3AudioBotInstance $instance, $botId)
    {
        $this->instance = $instance;
        $this->botId = $botId;
    }

    private function request($endpoint, $data = [])
    {
        return $this->instance->request($endpoint, $data, $this->botId);
    }

}