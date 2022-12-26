<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $config = [
            'matchingData' => [
                'driver' => 'web',
            ],
            'conversation_cache_time' => 40,
            'user_cache_time' => 30,
        ];

        $botman = BotManFactory::create($config, new LaravelCache());

        $botman->hears('{message}', function ($botman, $message) {

            $chats = Chat::all();

            $messages = explode(' ', strtolower($message));

            foreach ($chats as $chat) {

                $queryWords = explode('||', $chat->words);

                if (count(array_intersect($queryWords, $messages)) > 0) {
                    $botman->typesAndWaits(1);

                    $botman->reply($chat->answer);

                    return;
                } else {
                    continue;
                }
            }
            $botman->typesAndWaits(1);

            $botman->reply('Maaf, saya tidak mengerti apa yang Anda maksud.');
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
}

// foreach ($queryWords as $queryWord) {
//     if (in_array($queryWord, $messages)) {
//         $botman->typesAndWaits(1);
//         $botman->reply($chat->answer);
//         return;
//     } else {
//         continue;
//     }
// }
