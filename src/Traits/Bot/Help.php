<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Help
{

    /**
     * Shows all commands or detailed help about a specific command.
     * @return mixed
     */
    public function help()
    {
        return $this->request('/help');
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function helpAll()
    {
        return $this->request('/help/all');
    }

    /**
     * This feature is not documented.
     * @param $command
     * @return mixed
     */
    public function helpCommand($command)
    {
        return $this->request('/help/command', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function helpPlay()
    {
        return $this->request('/help/play');
    }

}