<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Alias
{

    /**
     * Creates a new command alias.
     * @param $commandName
     * @param $command
     * @return mixed
     */
    public function aliasAdd($commandName, $command)
    {
        return $this->request('/alias/add', get_defined_vars());
    }

    /**
     * Removes an existing alias.
     * @param $commandName
     * @return mixed
     */
    public function aliasRemove($commandName)
    {
        return $this->request('/alias/remove', get_defined_vars());
    }

    /**
     * Lists all currently registered alias.
     * @return mixed
     */
    public function aliasList()
    {
        return $this->request('/alias/list');
    }

    /**
     * Shows the implementation of the alias.
     * @param $commandName
     * @return mixed
     */
    public function aliasShow($commandName)
    {
        return $this->request('/alias/show', get_defined_vars());
    }

}