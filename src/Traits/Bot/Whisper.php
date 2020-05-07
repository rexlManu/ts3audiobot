<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Whisper
{
    /**
     * Set how to send music.
     * @return mixed
     */
    public function whisperAll()
    {
        return $this->request('/whisper/all');
    }

    /**
     * Set a specific teamspeak whisper group.
     * @param $type
     * @param $target
     * @param $targetid
     * @return mixed
     */
    public function whisperGroup($type, $target, $targetid)
    {
        return $this->request('/whisper/group', get_defined_vars());
    }

    /**
     * Set how to send music.
     * @return mixed
     */
    public function whisperList()
    {
        return $this->request('/whisper/list');
    }

    /**
     * Enables normal voice mode.
     * @return mixed
     */
    public function whisperOff()
    {
        return $this->request('/whisper/off');
    }

    /**
     * Enables default whisper subscription mode.
     * @return mixed
     */
    public function whisperSubscription()
    {
        return $this->request('/whisper/subscription');
    }
}