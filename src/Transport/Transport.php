<?php

namespace Halo\LaravelSMS\Transport;

use Halo\LaravelSMS\Contracts\Message as MessageContract;
use Halo\LaravelSMS\Contracts\Transport as TransportContract;

abstract class Transport implements TransportContract
{
    /**
     * Returns the number of recipients.
     *
     * @param  \Halo\LaravelSMS\Contracts\Message  $message
     *
     * @return integer
     */
    protected function getRecipientCount(MessageContract $message)
    {
        return count((array) $message->getTo());
    }
}