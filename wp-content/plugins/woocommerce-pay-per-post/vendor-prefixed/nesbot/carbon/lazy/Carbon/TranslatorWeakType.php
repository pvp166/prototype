<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by __root__ on 09-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Pramadillo\PayForPost\Carbon;

if (!class_exists(LazyTranslator::class, false)) {
    class LazyTranslator extends AbstractTranslator
    {
        /**
         * Returns the translation.
         *
         * @param string|null $id
         * @param array       $parameters
         * @param string|null $domain
         * @param string|null $locale
         *
         * @return string
         */
        public function trans($id, array $parameters = [], $domain = null, $locale = null)
        {
            return $this->translate($id, $parameters, $domain, $locale);
        }
    }
}
