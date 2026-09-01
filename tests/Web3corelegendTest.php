<?php
/**
 * Tests for Web3CoreLegend
 */

use PHPUnit\Framework\TestCase;
use Web3corelegend\Web3corelegend;

class Web3corelegendTest extends TestCase {
    private Web3corelegend $instance;

    protected function setUp(): void {
        $this->instance = new Web3corelegend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Web3corelegend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
