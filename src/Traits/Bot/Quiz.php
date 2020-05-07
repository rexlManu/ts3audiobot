<?php


namespace rexlManu\Ts3AudioBot\Traits\Bot;


trait Quiz
{
    /**
     * Shows the quizmode status.
     * @return mixed
     */
    public function quiz()
    {
        return $this->request('/quiz');
    }

    /**
     * Enable to hide the songnames and let your friends guess the title.
     * @return mixed
     */
    public function quizOn()
    {
        return $this->request('/quiz/on');
    }

    /**
     * Disable to show the songnames again.
     * @return mixed
     */
    public function quizOff()
    {
        return $this->request('/quiz/off');
    }
}