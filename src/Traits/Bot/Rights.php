<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Rights
{

    /**
     * Returns the subset of allowed commands the caller (you) can execute.
     * @param $rights
     * @return mixed
     */
    public function rightsCan($rights)
    {
        return $this->request('/rights/can', get_defined_vars());
    }

    /**
     * Reloads the rights configuration from file.
     * @return mixed
     */
    public function rightsReload()
    {
        return $this->request('/rights/reload');
    }

}