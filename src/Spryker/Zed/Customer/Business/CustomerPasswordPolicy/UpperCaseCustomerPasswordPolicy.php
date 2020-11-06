<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Customer\Business\CustomerPasswordPolicy;

use Generated\Shared\Transfer\CustomerResponseTransfer;

class UpperCaseCustomerPasswordPolicy extends AbstractCustomerPasswordPolicy implements CustomerPasswordPolicyInterface
{
    public const GLOSSARY_KEY_PASSWORD_POLICY_ERROR_UPPER_CASE = 'customer.password.error.upper_case';

    public const PASSWORD_POLICY_CHARSET_UPPER_CASE = '/\p{Lu}+/';

    /**
     * @param string $password
     * @param \Generated\Shared\Transfer\CustomerResponseTransfer $customerResponseTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerResponseTransfer
     */
    public function validatePassword(string $password, CustomerResponseTransfer $customerResponseTransfer): CustomerResponseTransfer
    {
        if ($this->config->getCustomerPasswordUpperCaseRequired() && !preg_match(static::PASSWORD_POLICY_CHARSET_UPPER_CASE, $password)) {
            $this->addError($customerResponseTransfer, static::GLOSSARY_KEY_PASSWORD_POLICY_ERROR_UPPER_CASE);
        }

        return $this->proceed($password, $customerResponseTransfer);
    }
}