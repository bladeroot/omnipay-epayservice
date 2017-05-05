<?php
/**
 * ePayService driver for the Omnipay PHP payment processing library.
 *
 * @link      https://github.com/hiqdev/omnipay-epayservice
 * @package   omnipay-epayservice
 * @license   MIT
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\ePayService;

use Omnipay\Common\AbstractGateway;

/**
 * Gateway for ePayService.
 */
class Gateway extends AbstractGateway
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ePayService';
    }

    public function getAssetDir()
    {
        return dirname(__DIR__) . '/assets';
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultParameters()
    {
        return [
            'purse'         => '',
            'secret'        => '',
            'testMode'      => false,
        ];
    }

    /**
     * Get the unified purse.
     *
     * @return string merchant purse
     */
    public function getPurse()
    {
        return $this->getParameter('purse');
    }

    /**
     * Set the unified purse.
     *
     * @param string $purse merchant purse
     *
     * @return self
     */
    public function setPurse($value)
    {
        return $this->setParameter('purse', $value);
    }

    /**
     * Get the unified secret key.
     *
     * @return string secret key
     */
    public function getSecret()
    {
        return $this->getParameter('secret');
    }

    /**
     * Set the unified secret key.
     *
     * @param string $value secret key
     *
     * @return self
     */
    public function setSecret($value)
    {
        return $this->setParameter('secret', $value);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\ePayService\Message\PurchaseRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\ePayService\Message\PurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\ePayService\Message\CompletePurchaseRequest
     */
    public function completePurchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\ePayService\Message\CompletePurchaseRequest', $parameters);
    }
}
