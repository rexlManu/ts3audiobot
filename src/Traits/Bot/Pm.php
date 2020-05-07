<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Pm
{

    /**
     * Requests a private session with the ServerBot so you can be intimate.
     * @return mixed
     */
    public function pm()
    {
        return $this->request('/pm');
    }

    /**
     * This feature is not documented.
     * @param $message
     * @return mixed
     */
    public function pmChannel($message)
    {
        return $this->request('/pm/channel', [$message]);
    }

    /**
     * This feature is not documented.
     * @param $message
     * @return mixed
     */
    public function pmServer($message)
    {
        return $this->request('/pm/server', $message);
    }

    /**
     * Writes a message to a particular user.
     * @param $clientId
     * @param $message
     * @return mixed
     */
    public function pmUser($clientId, $message)
    {
        return $this->request('/pm/user', [$clientId, $message]);
    }

}