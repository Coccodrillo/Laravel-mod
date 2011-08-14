<?php
/**
 * Laravel - A clean and classy framework for PHP web development.
 *
 * @package  Laravel
 * @version  1.5.1
 * @author   Taylor Otwell
 * @link     http://laravel.com
 */
// --------------------------------------------------------------
// The path to the application directory.
// --------------------------------------------------------------
$application = 'internal/application';

// --------------------------------------------------------------
// The path to the system directory.
// --------------------------------------------------------------
$system      = 'internal/system';

// --------------------------------------------------------------
// The path to the packages directory.
// --------------------------------------------------------------
$packages    = 'internal/packages';

// --------------------------------------------------------------
// The path to the modules directory.
// --------------------------------------------------------------
$modules     = 'internal/modules';

// --------------------------------------------------------------
// The path to the storage directory.
// --------------------------------------------------------------
$storage     = 'internal/storage';

// --------------------------------------------------------------
// The path to the public directory.
// --------------------------------------------------------------
$public      = __DIR__;

// --------------------------------------------------------------
// Launch Laravel.
// --------------------------------------------------------------
require $system.'/laravel.php';

