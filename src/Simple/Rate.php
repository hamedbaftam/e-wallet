<?php

namespace Bavix\Wallet\Simple;

use Bavix\Wallet\Interfaces\Rateable;
use Bavix\Wallet\Interfaces\Wallet;

/**
 * Class Rate
 * @package Bavix\Wallet\Simple
 * @codeCoverageIgnore
 */
class Rate implements Rateable
{

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var Wallet
     */
    protected $withCurrency;

    /**
     * @inheritDoc
     */
    public function withAmount(int $amount): Rateable
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function withCurrency(Wallet $wallet): Rateable
    {
        $this->withCurrency = $wallet;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function convertTo(Wallet $wallet): float
    {
        return $this->amount;
    }

}
