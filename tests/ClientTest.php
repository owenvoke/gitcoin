<?php

namespace pxgamer\Gitcoin;

use PHPUnit\Framework\TestCase;

/**
 * Class ClientTest
 */
class ClientTest extends TestCase
{
    /**
     * Test that a bounty can be retrieved by its id.
     */
    public function testGetBounty()
    {
        $bounty = (new Client())->getBounty(11);

        $this->assertInternalType('integer', $bounty->pk);
        $this->assertInternalType('string', $bounty->title);
    }
}
