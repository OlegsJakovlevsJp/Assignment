<?php
/**
 *
 * @category     Scandiweb
 * @package      Scandiweb_ScandiwebTest
 * @author       Olegs Jakovlevs Jp <info@scandiweb.com>
 * @copyright    Copyright (c) 2024 Scandiweb, Inc (https://scandiweb.com)
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Scandiweb_ScandiwebTest',
    __DIR__
);
