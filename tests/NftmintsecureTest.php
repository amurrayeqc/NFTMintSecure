<?php
/**
 * Tests for NFTMintSecure
 */

use PHPUnit\Framework\TestCase;
use Nftmintsecure\Nftmintsecure;

class NftmintsecureTest extends TestCase {
    private Nftmintsecure $instance;

    protected function setUp(): void {
        $this->instance = new Nftmintsecure(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftmintsecure::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
