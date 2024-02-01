<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use BotMan\BotMan\BotMan;
use App\Models\Enterprise;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {

        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            Question::query()->create([
                'question' => $message
            ]);

            if (stripos($message, 'nazwa') || stripos($message, 'nazywa')) {
                $botman->reply('Nazwa firmy to ' . Enterprise::first()->name);
            } else if (stripos($message, 'opis')) {
                $botman->reply('Naszą firmę można opisać właśnie tak:  ' . Enterprise::first()->description);
            } else if (stripos($message, 'adres') || stripos($message, 'gdzie')) {
                $botman->reply('Nasz firmowy adres to:  ' . Enterprise::first()->address);
            } else if (stripos($message, 'mail') || stripos($message, 'mejl')) {
                $botman->reply('Firmowy e-mail to ' . Enterprise::first()->email);
            } else if (stripos($message, 'nr') || stripos($message, 'numer')) {
                $botman->reply('Firmowy numer telefonu to ' . Enterprise::first()->phone);
            } else if (stripos($message, 'dane') || stripos($message, 'kontaktować')) {
                $botman->reply('Nasz firmowy adres to:  ' . Enterprise::first()->address);
                $botman->reply('Firmowy e-mail to ' . Enterprise::first()->email);
                $botman->reply('Firmowy numer telefonu to ' . Enterprise::first()->phone);
            } else {
                $botman->reply('Przepraszam ale nie rozumiem o co pytasz. Upewnij się, że pytasz o dane firmy lub spróbuj sformuować pytanie inaczej.');
            }
        });

        $botman->listen();
    }
}
