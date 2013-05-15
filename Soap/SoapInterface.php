<?php

namespace Raindrop\SoapBundle\Soap;

/**
 * Soap interface
 */
interface SoapInterface
{
    /**
     * Initialize a SOAP client
     *
     * @param string $wsdl
     * @param array  $options
     */
    public function initialize($wsdl, array $options);

    /**
     * Calls a SOAP function
     *
     * @param  string $functionName
     * @param  array  $arguments
     * @return mixed  The response from SOAP call
     */
    public function call($functionName, array $arguments);
}
