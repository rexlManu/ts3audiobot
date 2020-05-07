<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Subscribe
{

    /**
     * Lets you hear the music independent from the channel you are in.
     * @return mixed
     */
    public function subscribe()
    {
        return $this->request('/subscribe');
    }

    /**
     * Adds your current channel to the music playback.
     * @return mixed
     */
    public function subscribeTempchannel()
    {
        return $this->request('/subscribe/tempchannel');
    }

    /**
     * Adds your current channel to the music playback.
     * @return mixed
     */
    public function subscribeChannel()
    {
        return $this->request('/subscribe/channel');
    }

    /**
     * Subscribes the specified client to listen from anywhere
     * @return mixed
     */
    public function subscribeClient()
    {
        return $this->request('/subscribe/client');
    }

}