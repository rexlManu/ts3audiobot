<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait ListApi
{
    /**
     * Imports a playlist form an other platform like youtube etc.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listImport($listId, $link)
    {
        return $this->request('/list/import', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listInsert($listId, $index, $link)
    {
        return $this->request('/list/insert', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listItemGet($name, $index)
    {
        return $this->request('/list/item/get', get_defined_vars());
    }

    /**
     * Moves a item in a playlist position.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listItemMove($listId, $from, $to)
    {
        return $this->request('/list/item/move', get_defined_vars());
    }

    /**
     * Removes the item at .
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listItemDelete($listId, $index)
    {
        return $this->request('/list/item/delete', get_defined_vars());
    }

    /**
     * Renames an item.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listItemName($listId, $index, $title)
    {
        return $this->request('/list/item/name', get_defined_vars());
    }

    /**
     * Displays all available playlists from all users.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listList($pattern)
    {
        return $this->request('/list/list', get_defined_vars());
    }
    /**
     * Appends another playlist to yours.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listMerge($baseListId, $mergeListId)
    {
        return $this->request('/list/merge', get_defined_vars());
    }

    /**
     * Displays the name of the playlist you are currently working on.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listName($listId, $title)
    {
        return $this->request('/list/name', get_defined_vars());
    }

    /**
     * Replaces the current freelist with your workinglist and plays from the beginning.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listPlay($listId, $index)
    {
        return $this->request('/list/play', get_defined_vars());
    }

    /**
     * Appends your playlist to the freelist.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listQueue($listId)
    {
        return $this->request('/list/queue', get_defined_vars());
    }

    /**
     * Displays all songs currently in the playlists with the name
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listShow($listId, $offset, $count)
    {
        return $this->request('/list/show', get_defined_vars());
    }

    /**
     * Adds a link to your private playlist from the history by .
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listAdd($listId, $link)
    {
        return $this->request('/list/add', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listCreate($listId, $title)
    {
        return $this->request('/list/create', get_defined_vars());
    }

    /**
     * Deletes the playlist with the name . You can only delete playlists which you also have created. Admins can delete every playlist.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listDelete($listId)
    {
        return $this->request('/list/delete', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function listFrom($resolverName, $listId, $url)
    {
        return $this->request('/list/from', get_defined_vars());
    }
}