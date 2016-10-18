<?php
/**
 * User: Leonardo
 * Date: 13/10/2016
 * Time: 16:31
 */

use \Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once '../bootstrap.php';

// replace with mechanism to retrieve EntityManager in your app

return ConsoleRunner::createHelperSet($em);