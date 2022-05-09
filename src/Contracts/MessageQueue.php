<?php

namespace Halo\LaravelSMS\Contracts;

interface MessageQueue
{
    /**
     * Queues the specified message for sending.
     *
     * @param  \Halo\LaravelSMS\Contracts\Textable|string|array  $view
     * @param  string|null                                           $queue
     *
     * @return mixed
     */
    public function queue($view, $queue = null);

    /**
     * Queues the specified message for sending after (n) seconds.
     *
     * @param  \DateTimeInterface|\DateInterval|int                  $delay
     * @param  \Halo\LaravelSMS\Contracts\Textable|string|array  $view
     * @param  string|null                                           $queue
     *
     * @return mixed
     */
    public function later($delay, $view, $queue = null);
}