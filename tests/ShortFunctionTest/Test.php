<?php

declare(strict_types=1);

namespace ShortFunctionTest;

use PHPUnit\Framework\TestCase;
use function ShortFunction\f;

final class Test extends TestCase
{
    public function testNoArguments()
    {
        $this->assertSame(3, f('3')());
        $this->assertSame('foo', f("'foo'")());
        $this->assertSame(6, f('3 * 2')());
    }

    public function testArguments()
    {
        $this->assertSame(6, f('$foo', '$foo * 2')(3));
        $this->assertSame(6, f('$a', '$b', '$a * $b')(3, 2));
    }
}
