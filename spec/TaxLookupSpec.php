<?php

namespace spec;

use TaxLookup;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaxLookupSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(TaxLookup::class);
    }
}
