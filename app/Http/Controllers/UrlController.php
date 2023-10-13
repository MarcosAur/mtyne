<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUrlRequest;
use App\Models\ShortenUrl;
use App\Services\Url\StoreUrlService;

class UrlController extends Controller
{
    public function index() //TODO: Implementar a funcção de index das urls encurtadas do usuário
    {
        //
    }

    public function create()
    {
        return view('shorten-url-form');
    }

    public function store(StoreUrlRequest $storeUrlRequest)
    {
        $data = $storeUrlRequest->validated();
        $url = StoreUrlService::run($data);

        return redirect('/shorten/' . $url->id);
    }

    public function show(ShortenUrl $url)
    {
        $originalUrl = $url->original_url;
        $shortenUrl = env('REDIRECT_BASE_URL') . $url->shortened_path;

        return view('show-shortened-url', compact(['originalUrl', 'shortenUrl']));
    }

    public function redirectToOriginalUrl(ShortenUrl $shortenUrl)
    {
        return redirect($shortenUrl->original_url);
    }
}
