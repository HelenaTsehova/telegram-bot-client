<?php

require_once ('./vendor/autoload.php');

use Helenatsehova\TelegramBotClient\Service\TelegramBotClient;

$telegramBotClient = new TelegramBotClient('5814499974:AAEfDUMXcHtHKeEqkK30zBUDBENhShl2iFw');

//var_dump($telegramBotClient->getUpdates());
var_dump($telegramBotClient->sendMessage(503425775, 'hello'));