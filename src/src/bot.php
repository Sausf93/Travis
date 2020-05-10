<?php

/**
 * The bots source stream goes here.
 *
 * @author PatricNox <hello@PatricNox.info>
 */

 use Discord\Parts\User\Game;

 // Init DiscordAPI from Token
$discord = new \Discord\Discord([
    'token' => $DISCORD_API_KEY,
    'disabledEvents' => [
        'GUILD_CREATE',
        'CHANNEL_DELETE'
    ]
]);

$game = $discord->factory(Game::class, [
    'name' => $GAME_STATUS,
]);

