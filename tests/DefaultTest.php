<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class DefaultTest extends TestCase
{
    public function testTrueIsInFactTrue(): void
    {
        $this->assertTrue(true);
    }

    public function testFalseIsInFactFalse(): void
    {
        $this->assertFalse(false);
    }
}
