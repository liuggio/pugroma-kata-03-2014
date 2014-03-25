<?php

namespace spec\PUGRoma\Kata;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PUGRoma\Kata\Kata');
    }

    function it_should_print_FIZZ_for_3_multiple()
    {
        for ($i = 0; $i < 100; $i++) {

            if ($i % 3) {
                $this->calculate($i)->shouldBe('FIZZ');
            }
        }
    }

    function it_should_print_BUZZ_for_5_multiple()
    {
        for ($i = 0; $i < 100; $i++) {

            if ($i % 5) {
                $this->calculate($i)->shouldBe('BUZZ');
            }
        }
    }
}
