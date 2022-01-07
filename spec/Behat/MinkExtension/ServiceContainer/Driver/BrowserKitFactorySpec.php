<?php

namespace spec\Behat\MinkExtension\ServiceContainer\Driver;

use PhpSpec\ObjectBehavior;
use Behat\MinkExtension\ServiceContainer\Driver\DriverFactory;

class BrowserKitFactorySpec extends ObjectBehavior
{
    function it_is_a_driver_factory()
    {
        $this->shouldHaveType(DriverFactory::class);
    }

    function it_is_named_browserkit()
    {
        $this->getDriverName()->shouldReturn('browserkit_http');
    }

    function it_does_not_support_javascript()
    {
        $this->supportsJavascript()->shouldBe(false);
    }
}
