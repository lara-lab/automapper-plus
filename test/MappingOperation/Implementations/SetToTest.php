<?php

namespace AutoMapperPlus\MappingOperation\Implementations;

use AutoMapperPlus\Configuration\Options;
use AutoMapperPlus\Test\Models\SimpleProperties\Destination;
use AutoMapperPlus\Test\Models\SimpleProperties\Source;
use PHPUnit\Framework\TestCase;

/**
 * Class FromPropertyTest
 *
 * @package AutoMapperPlus\MappingOperation\Implementations
 */
class SetToTest extends TestCase
{
    public function testItMapsAProperty()
    {
        $operation = new SetTo('always the same value');
        $operation->setOptions(Options::default());
        $source = new Source();
        $destination = new Destination();

        $operation->mapProperty('name', $source, $destination);

        $this->assertEquals('always the same value', $destination->name);
    }
}
