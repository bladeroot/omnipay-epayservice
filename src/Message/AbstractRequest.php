<?php

/*
 * ePayService driver for the Omnipay PHP payment processing library
 *
 * @link      https://github.com/hiqdev/omnipay-epayservice
 * @package   omnipay-epayservice
 * @license   MIT
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\ePayService\Message;

/**
 * ePayService Abstract Request.
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $zeroAmountAllowed = false;

    /**
     * Get the purse.
     *
     * @return string purse
     */
    public function getPurse()
    {
        return $this->getParameter('purse');
    }

    /**
     * Set the purse.
     *
     * @param string $purse purse
     *
     * @return self
     */
    public function setPurse($value)
    {
        return $this->setParameter('purse', $value);
    }

    /**
     * Get the secret key.
     *
     * @return string secret key
     */
    public function getSecret()
    {
        return $this->getParameter('secret');
    }

    /**
     * Set the secret key.
     *
     * @param string $key secret key
     *
     * @return self
     */
    public function setSecret($value)
    {
        return $this->setParameter('secret', $value);
    }
}
