<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class StoreController extends Controller
{
    function index()
    {
        return view('store.index', [
            'SEOData' => new SEOData(
                title: __('title.homepage'),
                description: __('description.homepage'),
            ),
        ]);
    }
}
