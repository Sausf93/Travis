<?php

/**
 * All listener code goes in here, features splitted up.
 *
 * @author PatricNox <eronoxsmail@gmail.com>
 */

 echo "\n\n";
 echo "listener is on";
 echo "\n\n";

$discord->on('message', function ($message) {
    echo "DEBUG: Bot could listen @ {$message->author->username}: {$message->content}", PHP_EOL;
    if ($message->content == './set-status')
    {
        $message->channel->sendMessage("{$message->author}, trying to set $GAME_STATUS");
        $discord->updatePresence($game);
    }
});
