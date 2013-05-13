<?php

namespace Raindrop\SoapBundle\Soap;

/**
 * NuSoap extension
 */
class NuSoapImplementation implements SoapInterface
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
        $this->soapClient = new \nusoap_client(
                $wsdl,
                $parameters['wsdl'],
                $parameters['proxyhost'],
                $parameters['proxyport'],
                $parameters['proxyusername'],
                $parameters['proxypassword'],
                $parameters['timeout'],
                $parameters['response_timeout'],
                $parameters['portName']
            );

        return $this->soapClient;
    }

    /**
     * {@inheritDoc}
     */
    public function call($functionName, array $arguments)
    {
        return $this->soapClient->call($functionName, $arguments);
    }
}
