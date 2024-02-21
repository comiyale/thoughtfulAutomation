<?php
use PHPUnit\Framework\TestCase;

require 'app/SortPackage.php';

class SortPackageTest extends TestCase
{
    private $sortPackage;

    protected function setUp(): void
    {
        $this->sortPackage = new SortPackage();
    }

    public function testStandardPackage()
    {
        $this->assertEquals('STANDARD', $this->sortPackage->sortPackage(10, 10, 10, 10));
    }

    public function testSpecialPackageByWeight()
    {
        $this->assertEquals('SPECIAL', $this->sortPackage->sortPackage(100, 100, 100, 10));
    }

    public function testRejectedPackage()
    {
        $this->assertEquals('REJECTED', $this->sortPackage->sortPackage(150, 150, 150, 20));
    }
}

