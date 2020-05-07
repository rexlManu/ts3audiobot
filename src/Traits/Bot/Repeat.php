<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Repeat
{

    /**
     * Gets the current repeat mode.
     * @return mixed
     */
    public function repeat()
    {
        return $this->request('/repeat');
    }

    /**
     * Disables repeating.
     * @return mixed
     */
    public function repeatOff()
    {
        return $this->request('/repeat/off');
    }

    /**
     * Repeats a single song.
     * @return mixed
     */
    public function repeatOne()
    {
        return $this->request('/repeat/one');
    }

    /**
     * Repeats the entire playlist.
     * @return mixed
     */
    public function repeatAll()
    {
        return $this->request('/repeat/all');
    }

}