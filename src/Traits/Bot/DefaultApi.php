<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait DefaultApi
{

    /**
     * Sets the volume level of the music.
     * @param null $volume
     * @return mixed
     */
    public function volume($volume = null)
    {
        return $this->request('/volume', [$volume]);
    }

    /**
     * Evaluates all parameter.
     * @return mixed
     */
    public function xecute()
    {
        return $this->request('/xecute');
    }

    /**
     * Plays the next song in the playlist.
     * @return mixed
     */
    public function next()
    {
        return $this->request('/next');
    }

    /**
     * This feature is not documented.
     * @param $index
     * @return mixed
     */
    public function param($index)
    {
        return $this->request('/param', [$index]);
    }

    /**
     * Well, pauses the song. Undo with !play.
     * @return mixed
     */
    public function pause()
    {
        return $this->request('/pause');
    }

    /**
     * Automatically tries to decide whether the link is a special resource (like youtube) or a direct resource (like ./hello.mp3) and starts it.
     * @param null $url
     * @param null $attributes
     * @return mixed
     */
    public function play($url = null, $attributes = null)
    {
        return $this->request('/play', [$url, $attributes]);
    }

    /**
     * Plays the previous song in the playlist.
     * @return mixed
     */
    public function previous()
    {
        return $this->request('/previous');
    }

    /**
     * Lets you format multiple parameter to one.
     * @param $parameter
     * @return mixed
     */
    public function print($parameter)
    {
        return $this->request('/previous', [$parameter]);
    }

    /**
     * Gets a random number.
     * @param $first
     * @param $second
     * @return mixed
     */
    public function rng($first, $second)
    {
        return $this->request('/rng', [$first, $second]);
    }

    /**
     * Jumps to a timemark within the current song.
     * @param $position
     * @return mixed
     */
    public function seek($position)
    {
        return $this->request('/seek', [$position]);
    }

    /**
     * Tells you the name of the current song.
     * @return mixed
     */
    public function song()
    {
        return $this->request('/song');
    }

    /**
     * Stops the current song.
     * @return mixed
     */
    public function stop()
    {
        return $this->request('/stop');
    }

    /**
     * Take a substring from a string.
     * @return mixed
     */
    public function take()
    {
        return $this->request('/take');
    }

    /**
     * Gets the current build version.
     * @return mixed
     */
    public function version()
    {
        return $this->request('/version');
    }

    /**
     * Adds a new song to the queue.
     * @param $url
     * @param null $attributes
     * @return mixed
     */
    public function add($url, $attributes = null)
    {
        return $this->request('/add', [$url, $attributes]);
    }

    /**
     * Removes all songs from the current playlist.
     * @return mixed
     */
    public function clear()
    {
        return $this->request('/clear');
    }

    /**
     * Executes a given command or string
     * @return mixed
     */
    public function eval()
    {
        return $this->request('/eval');
    }

    /**
     * This feature is not documented.
     * @param $factoryName
     * @param $url
     * @return mixed
     */
    public function from($factoryName, $url)
    {
        return $this->request('/from', [$factoryName, $url]);
    }

    /**
     * This feature is not documented.
     * @param $index
     * @param $list
     * @return mixed
     */
    public function get($index, $list)
    {
        return $this->request('/get', [$index, $list]);
    }

    /**
     * Conditionally executes subcommands.
     * @param $arg0
     * @param $cmp
     * @param $arg1
     * @param $then
     * @param $other
     * @return mixed
     */
    public function if($arg0, $cmp, $arg1, $then, $other)
    {
        return $this->request('/if', get_defined_vars());
    }

    /**
     * Show's a small summary of the current playlist and queue status.
     * @param $offset
     * @param $count
     * @return mixed
     */
    public function info($offset, $count)
    {
        return $this->request('/info', [$offset, $count]);
    }

}