<?php

declare(strict_types = 1);

namespace TiagoSampaioTest\EventObserver;

/**
 * Class EventTest
 *
 * @package FrenetTest\Event
 */
class EventTest extends TestCase
{
    /**
     * @var \Frenet\Event\Event
     */
    private $object;
    
    protected function setUp()
    {
        $this->object = $this->createObject(\TiagoSampaio\EventObserver\Event::class);
    }
    
    /**
     * @test
     */
    public function eventSetterAndGetter()
    {
        $data = [
            'key_one' => 1,
            'key_two' => 2,
        ];
        
        $this->assertInstanceOf(\TiagoSampaio\EventObserver\Event::class, $this->object->setEvent('event_test', $data));
        
        $this->assertEquals('event_test', $this->object->getEventName());
        $this->assertEquals($data, $this->object->getData());
    }
}
