<?php


namespace rexlManu\Ts3AudioBot\Facades;


use Illuminate\Support\Facades\Facade;

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