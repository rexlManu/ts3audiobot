<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Getmy
{

    /**
     * Gets your id.
     * @return mixed
     */
    public function getmyId()
    {
        return $this->request('/getmy/id');
    }

    /**
     * Gets your unique id.
     * @return mixed
     */
    public function getmyUid()
    {
        return $this->request('/getmy/uid');
    }

    /**
     * Gets your nickname.
     * @return mixed
     */
    public function getmyName()
    {
        return $this->request('/getmy/name');
    }

    /**
     * Gets your database id.
     * @return mixed
     */
    public function getmyDbid()
    {
        return $this->request('/getmy/dbid');
    }

    /**
     * Gets your channel id you are currently in.
     * @return mixed
     */
    public function getmyChannel()
    {
        return $this->request('/getmy/channel');
    }

    /**
     * Gets all information about you.
     * @return mixed
     */
    public function getmyAll()
    {
        return $this->request('/getmy/all');
    }

}