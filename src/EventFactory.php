<?php

declare(strict_types = 1);

namespace TiagoSampaio\EventObserver;

/**
 * Class EventDataFactory
 *
 * @package TiagoSampaio\Event
 */
class EventFactory
{
    /**
     * @return Event
     */
    public function create()
    {
        return new Event();
    }
}
