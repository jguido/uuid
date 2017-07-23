<?php


namespace Tests\Tools;


use PHPUnit\Framework\TestCase;
use Unrlab\UUID;

class UuidTest extends TestCase
{
    public function testFormat()
    {
        $uuid = UUID::next();
        $uuid1 = UUID::next(false);
        $uuidPattern = '/^([0-9a-z]{8})-([0-9a-z]{4})-([0-9a-z]{4})-([0-9a-z]{4})-([0-9a-z]{12})$/';
        $uuidPatternNoDash = '/^([0-9a-z]{8})([0-9a-z]{4})([0-9a-z]{4})([0-9a-z]{4})([0-9a-z]{12})$/';

        self::assertEquals(1, preg_match($uuidPattern, $uuid));
        self::assertEquals(1, preg_match($uuidPatternNoDash, $uuid1));
    }
}