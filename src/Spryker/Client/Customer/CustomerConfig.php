<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\Customer;

use Spryker\Client\Kernel\AbstractBundleConfig;
use Spryker\Shared\Customer\CustomerConstants;

/**
 * @method \Spryker\Shared\Customer\CustomerConfig getSharedConfig()
 */
class CustomerConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @return string
     */
    public function getCustomerSecuredPattern(): string
    {
        return $this->get(CustomerConstants::CUSTOMER_SECURED_PATTERN, '');
    }

    /**
     * @api
     *
     * @return bool
     */
    public function isDoubleOptInEnabled(): bool
    {
        return $this->getSharedConfig()->isDoubleOptInEnabled();
    }
}
