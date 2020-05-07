<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait System
{

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function systemInfo()
    {
        return $this->request('/system/info');
    }

    /**
     * Closes the TS3AudioBot application.
     * @param $param
     * @return mixed
     */
    public function systemQuit($param)
    {
        return $this->request('/system/quit', get_defined_vars());
    }

}