<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait History
{

    /**
     * Adds the song with to the queue
     * @param $id
     * @return mixed
     */
    public function historyAdd($id)
    {
        return $this->request('/history/add', get_defined_vars());
    }

    /**
     * Cleans up the history file for better startup performance.
     * @return mixed
     */
    public function historyClean()
    {
        return $this->request('/history/clean');
    }

    /**
     * Checks for all links in the history which cannot be opened anymore and removes them.
     * @return mixed
     */
    public function historyCleanRemovedefective()
    {
        return $this->request('/history/clean/removedefective');
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function historyCleanUpgrade()
    {
        return $this->request('/history/clean/upgrade');
    }

    /**
     * Removes the entry with from the history
     * @param $id
     * @return mixed
     */
    public function historyDelete($id)
    {
        return $this->request('/history/delete', get_defined_vars());
    }

    /**
     * Gets the last songs from the user with the given
     * @param $userUid
     * @param $amount
     * @return mixed
     */
    public function historyFrom($userUid, $amount)
    {
        return $this->request('/history/from', get_defined_vars());
    }

    /**
     * Displays all saved informations about the song with
     * @param $id
     * @return mixed
     */
    public function historyId($id)
    {
        return $this->request('/history/id', get_defined_vars());
    }

    /**
     * (last|next) Gets the highest|next song id
     * @param null $amount
     * @return mixed
     */
    public function historyLast($amount = null)
    {
        return $this->request('/history/last', get_defined_vars());
    }

    /**
     * Playes the song with
     * @param $hid
     * @return mixed
     */
    public function historyPlay($hid)
    {
        return $this->request('/history/play', get_defined_vars());
    }

    /**
     * Sets the name of the song with to
     * @param $id
     * @param $newName
     * @return mixed
     */
    public function historyRename($id, $newName)
    {
        return $this->request('/history/rename', get_defined_vars());
    }

    /**
     * Gets all songs played until .
     * @param $time
     * @return mixed
     */
    public function historyTill($time)
    {
        return $this->request('/history/till', get_defined_vars());
    }

    /**
     * Gets all songs which title contains
     * @param $part
     * @return mixed
     */
    public function historyTitle($part)
    {
        return $this->request('/history/title', get_defined_vars());
    }
}