<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Data
{

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function dataSongCoverGet()
    {
        return $this->request('/data/song/cover/get', get_defined_vars());
    }

}