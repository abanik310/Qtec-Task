<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;

class UrlController extends Controller
{
    //
    public function index()
    {
        $urls = Url::all();
        return view('urls.index', compact('urls'));
    }

    public function create()
    {
        return view('urls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $url = Url::create([
            'original_url' => $request->input('original_url'),
            'shortened_url' => $this->generateShortUrl(),
        ]);

        return redirect()->route('urls.index');
    }

    private function generateShortUrl()
    {
        // Implement your logic to generate a short URL here
        // You can use libraries like Hashids or generate a unique key
    }
}
