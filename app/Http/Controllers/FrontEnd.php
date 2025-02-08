<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class FrontEnd extends Controller
{
    function index()
    {
        return view('frontend.index', [
            'SEOData' => new SEOData(
                title: __('title.homepage'),
                description: __('description.homepage'),
            ),
        ]);
    }
}
