<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Search
{

    /**
     * This feature is not documented.
     * @param $index
     * @return mixed
     */
    public function searchAdd($index)
    {
        return $this->request('/search/add', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $resolverName
     * @param $query
     * @return mixed
     */
    public function searchFrom($resolverName, $query)
    {
        return $this->request('/search/from', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $index
     * @return mixed
     */
    public function searchGet($index)
    {
        return $this->request('/search/get', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @param $index
     * @return mixed
     */
    public function searchPlay($index)
    {
        return $this->request('/search/play', get_defined_vars());
    }

    /**
     * This feature is not documented.
     * @return mixed
     */
    public function searchShow()
    {
        return $this->request('/search/show');
    }






}