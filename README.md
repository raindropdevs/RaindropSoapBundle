# Raindrop Soap Bundle

[![Build Status](https://travis-ci.org/raindropdevs/RaindropSoapBundle.png?branch=master)](https://travis-ci.org/raindropdevs/RaindropSoapBundle)

This bundle adds support for SOAP and WSDL based web services.

### **INSTALLATION**:

First add the dependency to your composer.json` file:

    "require": {
        ...
        "raindrop/soap-bundle": "dev-master"
    },

Then install the bundle with the command:

    php composer.phar update

Enable the bundle in your application kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Raindrop\SoapBundle\RaindropSoapBundle(),
    );
}
```

Now the bundle is enabled.
