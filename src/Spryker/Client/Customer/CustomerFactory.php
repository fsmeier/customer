<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Client\Customer;

use Spryker\Client\Customer\Session\CustomerSession;
use Spryker\Client\Customer\Zed\CustomerStub;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Client\Customer\Session\CustomerSessionInterface;
use Spryker\Client\Customer\Zed\CustomerStubInterface;

class CustomerFactory extends AbstractFactory
{

    /**
     * @return \Spryker\Client\Customer\Zed\CustomerStubInterface
     */
    public function createZedCustomerStub()
    {
        return new CustomerStub(
            $this->getProvidedDependency(CustomerDependencyProvider::SERVICE_ZED)
        );
    }

    /**
     * @return \Spryker\Client\Customer\Session\CustomerSessionInterface
     */
    public function createSessionCustomerSession()
    {
        return new CustomerSession(
            $this->getProvidedDependency(CustomerDependencyProvider::SERVICE_SESSION)
        );
    }

}