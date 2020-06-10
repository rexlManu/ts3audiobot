<?php


namespace rexlManu\Ts3AudioBot\Facades;


use Illuminate\Support\Facades\Facade;
use rexlManu\Ts3AudioBot\Instance\Ts3AudioBotInstance;

/**
 * Class Ts3AudioBot
 * @package rexlManu\Ts3AudioBot\Facades
 *
 * @method static Ts3AudioBotInstance instance(string $address, int $port, string $token, bool $objectAsArrays = true)
 */
class Ts3AudioBot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rexlManu\Ts3AudioBot\Ts3AudioBotFacadeAccessor';
    }
}