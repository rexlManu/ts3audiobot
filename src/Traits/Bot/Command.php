<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Command
{

    /**
     * Displays the AST of the requested command.
     * @param $parameter
     * @return mixed
     */
    public function commandParse($parameter)
    {
        return $this->request('/command/parse', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function commandTree()
    {
        return $this->request('/command/tree', get_defined_vars());
    }
}