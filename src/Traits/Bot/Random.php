<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Random
{

    /**
     * Gets whether or not to play playlists in random order.
     * @return mixed
     */
    public function random()
    {
        return $this->request('/random');
    }

    /**
     * Enables random playlist playback
     * @return mixed
     */
    public function randomOn()
    {
        return $this->request('/random/on');
    }

    /**
     * Disables random playlist playback
     * @return mixed
     */
    public function randomOff()
    {
        return $this->request('/random/off');
    }

    /**
     * Sets the unique seed for a certain playback order
     * Gets the unique seed for a certain playback order
     * @param $newSeed
     * @return mixed
     */
    public function randomSeed($newSeed = null)
    {
        return $this->request('/random/seed', get_defined_vars());
    }

}