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

use Pramadillo\PayForPost\Symfony\Component\Translation\PluralizationRules;

// @codeCoverageIgnoreStart
if (class_exists(PluralizationRules::class)) {
    PluralizationRules::set(static function ($number) {
        return PluralizationRules::get($number, 'ca');
    }, 'ca_ES_Valencia');
}
// @codeCoverageIgnoreEnd

return array_replace_recursive(require __DIR__.'/ca.php', [
]);
