<?php

/**
 * Application file serves the purpose to load all required files.
 * This is to be used until project gets revamped into PHP classes.
 *
 * @author PatricNox <hello@PatricNox.info>
 */

declare(strict_types=1);
include './../vendor/autoload.php';
require_once __DIR__.'./config.php';
require_once __DIR__.'./src/bot.php';
