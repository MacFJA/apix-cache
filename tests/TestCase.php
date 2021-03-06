<?php

/**
 *
 * This file is part of the Apix Project.
 *
 * (c) Franck Cassedanne <franck at ouarz.net>
 *
 * @license     http://opensource.org/licenses/BSD-3-Clause  New BSD License
 *
 */

namespace Apix\Cache\tests;

class TestCase extends \PHPUnit_Framework_TestCase
{

    protected $options = array(
        'prefix_key' => 'unittest-apix-key:',
        'prefix_tag' => 'unittest-apix-tag:'
    );

    public function skipIfMissing($name)
    {
        if (!extension_loaded($name)) {
            $prefix = (PHP_SHLIB_SUFFIX === 'dll') ? 'php_' : '';
            if (
                !ini_get('enable_dl')
                || !dl($prefix . "$name." . PHP_SHLIB_SUFFIX)) {
                self::markTestSkipped(
                    sprintf('The "%s" extension is required.', $name)
                );
            }
        }
    }

}
