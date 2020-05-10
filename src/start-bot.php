<?php

/**
 * This is the main app file for the application.
 *
 * @author PatricNox <hello@PatricNox.info>
 */

require_once './app.php';

echo "Init bot @ discord Key :: $DISCORD_API_KEY", PHP_EOL;
$discord->on('ready', function ($discord) {
    echo "The Noxler is up and Running!", PHP_EOL;
    require_once __DIR__.'./src/listener.php';
});

$discord->run();
