<?php

namespace App\Services\Url;

use App\Models\ShortenUrl;

class StoreUrlService
{
    public static function run(array $data)
    {
        $existentUrl = true;

        while ($existentUrl) {
            $generated_bytes = random_bytes(5);
            $shortenUrl = bin2hex($generated_bytes);
            $existentUrl = ShortenUrl::where('shortened_path', $shortenUrl)->count();
        }

        $url = ShortenUrl::create([
            'original_url' => $data['url'],
            'shortened_path' => $shortenUrl,
            'active' => 1
        ]);

        return $url;
    }
}
