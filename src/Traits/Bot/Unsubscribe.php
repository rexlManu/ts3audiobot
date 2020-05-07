<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Unsubscribe
{

    /**
     * Only lets you hear the music in active channels again.
     * @return mixed
     */
    public function unsubscribe()
    {
        return $this->request('/unsubscribe');
    }

    /**
     * Removes your current channel from the music playback.
     * @param $channel
     * @return mixed
     */
    public function unsubscribeChannel($channel)
    {
        return $this->request('/unsubscribe/channel', get_defined_vars());
    }

    /**
     * Clears all temporary targets.
     * @return mixed
     */
    public function unsubscribeTemporary()
    {
        return $this->request('/unsubscribe/temporary');
    }

    /**
     * Unsubscribes the specified client to listen from anywhere.
     * @return mixed
     */
    public function unsubscribeClient()
    {
        return $this->request('/unsubscribe/client');
    }


}