<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Kickme
{

    /**
     * Guess what?
     * @return mixed
     */
    public function kickme()
    {
        return $this->request('/kickme');
    }

    /**
     * Guess what?
     * @return mixed
     */
    public function kickmeFar()
    {
        return $this->request('/kickme/far');
    }

}