<?php

namespace AlessandroBertozzi\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://catfact.ninja/fact');

        return $response['fact'];
    }
}
