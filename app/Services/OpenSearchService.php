<?php

namespace App\Services;

class OpenSearchService
{
    public function renderXml()
    {
        return response()->view('partials.opensearch')
            ->withHeaders([
                'Content-Type' => 'text/xml',
            ])->throwResponse();
    }
}
