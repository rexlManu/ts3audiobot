<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Getuser
{

    /**
     * Gets the unique id of a user, searching with his id.
     * @param $id
     * @return mixed
     */
    public function getuserUidByid($id)
    {
        return $this->request('/getuser/uid/byid', get_defined_vars());
    }

    /**
     * Gets the nickname of a user, searching with his id.
     * @param $id
     * @return mixed
     */
    public function getuserNameByid($id)
    {
        return $this->request('/getuser/name/byid', get_defined_vars());
    }

    /**
     * Gets the database id of a user, searching with his id.
     * @param $id
     * @return mixed
     */
    public function getuserDbidByid($id)
    {
        return $this->request('/getuser/dbid/byid', get_defined_vars());
    }

    /**
     * Gets the channel id a user is currently in, searching with his id.
     * @param $id
     * @return mixed
     */
    public function getuserChannelByid($id)
    {
        return $this->request('/getuser/channel/byid', get_defined_vars());
    }

    /**
     * Gets all information about a user, searching with his id.
     * @param $id
     * @return mixed
     */
    public function getuserAllByid($id)
    {
        return $this->request('/getuser/all/byid', get_defined_vars());
    }

    /**
     * Gets the id of a user, searching with his name.
     * @param $username
     * @return mixed
     */
    public function getuserIdByname($username)
    {
        return $this->request('/getuser/id/byname', get_defined_vars());
    }

    /**
     * Gets all information of a user, searching with his name.
     * @param $username
     * @return mixed
     */
    public function getuserAllByname($username)
    {
        return $this->request('/getuser/all/byname', get_defined_vars());
    }

    /**
     * Gets the user name by dbid, searching with his database id.
     * @param $dbid
     * @return mixed
     */
    public function getuserNameBydbid($dbid)
    {
        return $this->request('/getuser/name/bydbid', get_defined_vars());
    }

    /**
     * Gets the unique id of a user, searching with his database id.
     * @param $dbid
     * @return mixed
     */
    public function getuserUidBydbid($dbid)
    {
        return $this->request('/getuser/uid/bydbid', get_defined_vars());
    }

}