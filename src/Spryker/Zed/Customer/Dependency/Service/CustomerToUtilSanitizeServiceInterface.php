<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Customer\Dependency\Service;

/**
 * Extends deprecated interface for BC reasons.
 */
interface CustomerToUtilSanitizeServiceInterface extends CustomerToUtilSanitizeInterface
{
    /**
     * @param string $text
     * @param bool $double
     * @param string|null $charset
     *
     * @return string
     */
    public function escapeHtml($text, $double = true, $charset = null);
}
