<?php


namespace rexlManu\Ts3AudioBot;

use Exception;
use rexlManu\Ts3AudioBot\Instance\Ts3AudioBotInstance;

class Ts3AudioBotFacadeAccessor
{

    /**
     * create a new ts3audiobot instance
     * @param $address the host address of the instance
     * @param $port the port of the instance
     * @param $token the auth token
     * @param bool $objectAsArray response returns array if true (default)
     * @return Ts3AudioBotInstance the instance
     */
    public static function instance($address, $port, $token, $objectAsArray = true): Ts3AudioBotInstance
    {
        return new Ts3AudioBotInstance($address, $port, $token, $objectAsArray);
    }

}