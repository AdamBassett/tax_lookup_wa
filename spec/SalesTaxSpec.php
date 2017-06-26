<?php

namespace spec\SalesTaxWa;

use SalesTaxWa\SalesTax;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SalesTaxSpec extends ObjectBehavior
{
    function it_is_initializable(){
        $this->shouldHaveType(SalesTax::class);
    }
    function it_returns_tax_rate_for_seattle_address(){
        $this->getTax('1801 E Spruce St','Seattle','98122')->shouldReturn(0.101);
    }
    function it_returns_tax_rate_for_bothell_address(){
        $this->getTax('19401 Holly Hills Dr NE','Bothell','98011')->shouldReturn(0.100);
    }
    function it_returns_tax_rate_for_colville_address(){
        $this->getTax('1150 S Main St','Colville','99114')->shouldReturn(0.076);
    }
    function it_returns_tax_rate_for_spokane_address(){
        $this->getTax('304 W Shannon Ave','Spokane','99205')->shouldReturn(0.088);
    }
    function it_returns_tax_rate_for_spokane_county_address(){
        $this->getTax('17224 N Highland Ln','spokane valley','99005')->shouldReturn(0.081);
    }
    function it_returns_tax_rate_for_leavenworth_address(){
        $this->getTax('236 Birch St','Leavenworth','98826')->shouldReturn(0.084);
    }
    function it_returns_tax_rate_for_kennewick_address(){
        $this->getTax('809 S Huntington St','Kennewick','99336')->shouldReturn(0.086);
    }
    function it_returns_tax_rate_for_olympia_address(){
        $this->getTax('810 Milroy St SW','olympia','98502')->shouldReturn(0.088);
    }
    function it_returns_tax_rate_for_omak_address(){
        $this->getTax('228 south cedar','omak','98841')->shouldReturn(0.081);
    }
}
