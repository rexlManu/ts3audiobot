<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Api
{

    /**
     * Generates an api token.
     * @param $validHours
     * @return mixed
     */
    public function apiToken($validHours)
    {
        return $this->request('/api/token', get_defined_vars());
    }


}