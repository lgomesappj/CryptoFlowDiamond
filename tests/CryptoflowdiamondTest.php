<?php
/**
 * Tests for CryptoFlowDiamond
 */

use PHPUnit\Framework\TestCase;
use Cryptoflowdiamond\Cryptoflowdiamond;

class CryptoflowdiamondTest extends TestCase {
    private Cryptoflowdiamond $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoflowdiamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoflowdiamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
