<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Json
{

    /**
     * Allows you to combine multiple JsonResults into one
     * @return mixed
     */
    public function jsonMerge()
    {
        return $this->request('/json/merge');
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function jsonApi()
    {
        return $this->request('/json/api');
    }

}