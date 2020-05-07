<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Server
{

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function serverTree()
    {
        return $this->request('/server/tree');
    }


}