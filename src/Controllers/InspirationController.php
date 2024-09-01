<?php

namespace AlessandroBertozzi\Inspire\Controllers;

use AlessandroBertozzi\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        return view('inspire::index', compact('quote'));
    }
}
