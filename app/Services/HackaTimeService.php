<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class HackaTimeService
{
    public function todaySeconds(): int
    {
        // user is in Latvia, so the daily goal should follow their local day
        return (int) rescue(fn () => Http::acceptJson()
            ->timeout(3)
            ->get('https://hackatime.hackclub.com/api/v1/users/U0AJ5EZMELW/stats', [
                'start_date' => now('Europe/Riga')->startOfDay()->toIso8601String(),
                'end_date' => now('Europe/Riga')->toIso8601String(),
                'total_seconds' => 'true',
            ])
            ->throw()
            ->json('total_seconds'), 0);
    }
}
