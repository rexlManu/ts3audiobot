<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Settings
{

    /**
     * Provides get/set methods to change the settings.
     * @return mixed
     */
    public function settings()
    {
        return $this->request('/settings');
    }

    /**
     * Duplicates a bot template with a new name.
     * @param $from
     * @param $to
     * @return mixed
     */
    public function settingsCopy($from, $to)
    {
        return $this->request('/settings/copy', get_defined_vars());
    }

    /**
     * Creates a new bot template.
     * @param $name
     * @return mixed
     */
    public function settingsCreate($name)
    {
        return $this->request('/settings/create', get_defined_vars());
    }

    /**
     * Deletes a bot template.
     * @param $name
     * @return mixed
     */
    public function settingsDelete($name)
    {
        return $this->request('/settings/delete', get_defined_vars());
    }

    /**
     * Gets a value from the bot settings.
     * @param $path
     * @return mixed
     */
    public function settingsGet($path)
    {
        return $this->request('/settings/get', get_defined_vars());
    }

    /**
     * Sets a value from the bot settings.
     * @param $path
     * @param $value
     * @return mixed
     */
    public function settingsSet($path, $value)
    {
        return $this->request('/settings/set', get_defined_vars());
    }

    /**
     * Gets a value from the bot settings.
     * @param $botname
     * @param $path
     * @return mixed
     */
    public function settingsBotGet($botname, $path)
    {
        return $this->request('/settings/bot/get', get_defined_vars());
    }

    /**
     * Sets a value from the bot settings.
     * @param $botname
     * @param $path
     * @param $value
     * @return mixed
     */
    public function settingsBotSet($botname, $path, $value)
    {
        return $this->request('/settings/bot/set', get_defined_vars());
    }

    /**
     * Reloads the bot template configuration from the file.
     * @param $name
     * @return mixed
     */
    public function settingsReload($name)
    {
        return $this->request('/settings/reload', get_defined_vars());
    }

    /**
     * Gets a value from the core settings.
     * @param $path
     * @return mixed
     */
    public function settingsGlobalGet($path)
    {
        return $this->request('/settings/global/get', get_defined_vars());
    }

    /**
     * Set a value from the core settings.
     * @param $path
     * @param $value
     * @return mixed
     */
    public function settingsGlobalSet($path, $value)
    {
        return $this->request('/settings/global/set', get_defined_vars());
    }

    /**
     * Get the desciption for a setting.
     * @param $path
     * @return mixed
     */
    public function settingsHelp($path)
    {
        return $this->request('/settings/help', get_defined_vars());
    }


}