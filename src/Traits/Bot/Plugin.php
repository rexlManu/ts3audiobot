<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Plugin
{
    /**
     * Lists all found plugins.
     * @return mixed
     */
    public function pluginList()
    {
        return $this->request('/plugin/list');
    }

    /**
     * Unloads a plugin.
     * @param $identifier
     * @return mixed
     */
    public function pluginUnload($identifier)
    {
        return $this->request('/plugin/unload', [$identifier]);
    }

    /**
     * Loads a plugin.
     * @param $identifier
     * @return mixed
     */
    public function pluginLoad($identifier)
    {
        return $this->request('/plugin/load', [$identifier]);
    }
}