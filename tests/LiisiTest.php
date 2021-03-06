<?php

namespace RKD\BanklinkTests;

use RKD\Banklink\Protocol\LiisiPayment;

/**
 * Test suite for Liisi banklink.
 *
 * @author  Rene Korss <rene.korss@gmail.com>
 */
class LiisiTest extends SEBTest
{
    protected $bankClass = "RKD\Banklink\Liisi";
    protected $protocolClass = "RKD\Banklink\Protocol\LiisiPayment";

    protected $requestUrl = 'https://klient.liisi.ee/api/ipizza/';
    protected $testRequestUrl = 'https://prelive.liisi.ee:8953/api/ipizza/';

    /**
     * Authentication should throw an LogicException
     *
     * @expectedException LogicException
     */
    public function testGetAuthRequest4011()
    {
        $this->bank->getAuthRequest();
    }

    /**
     * Authentication should throw an LogicException
     *
     * @expectedException LogicException
     */
    public function testGetAuthRequest4012()
    {
        $this->bank->getAuthRequest('bank-id', 'random-nonce', 'random-rid');
    }
}
