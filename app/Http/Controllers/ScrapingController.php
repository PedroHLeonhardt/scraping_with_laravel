<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapingController extends Controller
{

    public $url = 'https://www.kompas.com/';

    public function scraping(Request $request)
    {
        return view('scraping', [
            'url' => $this->url,
        ]);
    }
}
