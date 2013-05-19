<?php

namespace Raindrop\SoapBundle\Soap;

/**
 * SoapManager
 */
class SoapManager implements SoapInterface
{
    /**
     * @var SoapInterface
     */
    protected $soapClient;

    public function __construct(SoapInterface $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * {@inheritDoc}
     */
    public function initialize($wsdl, array $parameters)
    {
        $this->soapClient->initialize($wsdl, $parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function call($functionName, $arguments)
    {
        return $this->soapClient->call($functionName, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoapClient()
    {
        return $this->soapClient->getSoapClient();
    }
}
