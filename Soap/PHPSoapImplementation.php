<?php

namespace Raindrop\SoapBundle\Soap;

/**
 * PHP Soap extension
 */
class PHPSoapImplementation implements SoapInterface
{
    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * {@inheritDoc}
     */
    public function initialize($wsdl, array $parameters)
    {
        $this->soapClient = new \SoapClient($wsdl, $parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function call($functionName, $arguments)
    {
        return $this->soapClient->__soapCall($functionName, $arguments);
    }
}
