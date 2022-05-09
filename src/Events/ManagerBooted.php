<?php

namespace Halo\LaravelSMS\Events;

use Halo\LaravelSMS\Contracts\Factory as Manager;

class ManagerBooted
{
    /**
     * The sms message instance.
     *
     * @var \Halo\LaravelSMS\Contracts\Factory
     */
    public $manager;

    /**
     * Create a new event instance.
     *
     * @param  \Halo\LaravelSMS\Contracts\Message  $message
     *
     * @return void
     */
    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }
}
