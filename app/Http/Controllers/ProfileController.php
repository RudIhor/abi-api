<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use SergiX44\Nutgram\Nutgram;

class ProfileController
{
    public function show(Nutgram $bot): void
    {
        Log::info('User: ', $bot->user()->toArray());
    }

    public function update(): void
    {
        // Implement
    }
}
