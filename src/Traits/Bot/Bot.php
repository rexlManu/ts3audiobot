<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Bot
{

    /**
     * Sets an avatar for the bot
     * @param $url
     * @return mixed
     */
    public function botAvatarSet($url)
    {
        return $this->request('/bot/avatar/set', get_defined_vars());
    }

    /**
     * Clears the avatar of the bot.
     * @return mixed
     */
    public function botAvatarClear()
    {
        return $this->request('/bot/avatar/clear');
    }

    /**
     * Set your bot a badge. The badges string starts with 'overwolf=0:badges='
     * @param $badges
     * @return mixed
     */
    public function botBadges($badges)
    {
        return $this->request('/bot/badges', get_defined_vars());
    }

    /**
     * Sets the description of the bot.
     * @param $description
     * @return mixed
     */
    public function botDescriptionSet($description)
    {
        return $this->request('/bot/description/set', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function botDiagnose()
    {
        return $this->request('/bot/diagnose', get_defined_vars());
    }

    /**
     * Stop this bot instance.
     * @return mixed
     */
    public function botDisconnect()
    {
        return $this->request('/bot/disconnect', get_defined_vars());
    }

    /**
     * Gets the status of the channel commander mode.
     * @return mixed
     */
    public function botCommander()
    {
        return $this->request('/bot/commander', get_defined_vars());
    }

    /**
     * Enables channel commander.
     * @return mixed
     */
    public function botCommanderOn()
    {
        return $this->request('/bot/commander/on', get_defined_vars());
    }

    /**
     * Disables channel commander.
     * @return mixed
     */
    public function botCommanderOff()
    {
        return $this->request('/bot/commander/off', get_defined_vars());
    }

    /**
     * Moves the bot to your channel.
     * @param $password
     * @return mixed
     */
    public function botCome($password)
    {
        return $this->request('/bot/come', get_defined_vars());
    }

    /**
     * Connects a new bot with the settings from the template name.
     * @param $name
     * @return mixed
     */
    public function botConnectTemplate($name)
    {
        return $this->request('/bot/connect/template', get_defined_vars());
    }

    /**
     * Connects a new bot to the given address.
     * @param $address
     * @param $password
     * @return mixed
     */
    public function botConnectTo($address, $password)
    {
        return $this->request('/bot/connect/to', get_defined_vars());
    }

    /**
     * Gets various information about the bot.
     * @return mixed
     */
    public function botInfo()
    {
        return $this->request('/bot/info', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function botInfoClient()
    {
        return $this->request('/bot/info/client', get_defined_vars());
    }

    /**
     * Gets a list of all active bots.
     * @return mixed
     */
    public function botList()
    {
        return $this->request('/bot/list', get_defined_vars());
    }

    /**
     * Moves the bot to you or a specified channel.
     * @param $channel
     * @param $password
     * @return mixed
     */
    public function botMove($channel, $password)
    {
        return $this->request('/bot/move', get_defined_vars());
    }

    /**
     * Gives the bot a new name.
     * @param $name
     * @return mixed
     */
    public function botName($name)
    {
        return $this->request('/bot/name', get_defined_vars());
    }

    /**
     * Saves the configuration for the newly connected bot.
     * @param $name
     * @return mixed
     */
    public function botSave($name)
    {
        return $this->request('/bot/save', get_defined_vars());
    }

    /**
     * Sets all teamspeak rights for the bot to be fully functional.
     * @param $adminToken
     * @return mixed
     */
    public function botSetup($adminToken)
    {
        return $this->request('/bot/setup', get_defined_vars());
    }

    /**
     * Switches the context to the requested bot.
     * @param $botName
     * @param $cmd
     * @return mixed
     */
    public function botTemplate($botName, $cmd)
    {
        return $this->request('/bot/template', get_defined_vars());
    }

    /**
     * Switches the context to the requested bot.
     * @param $botId
     * @param $cmd
     * @return mixed
     */
    public function botUse($botId, $cmd)
    {
        return $this->request('/bot/use', get_defined_vars());
    }

}