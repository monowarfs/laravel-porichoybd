<?php

declare(strict_types=1);

namespace Monowarfs\PorichoyBD\Library;

use Illuminate\Support\Facades\Http;

class HttpCaller implements Caller
{
    private array $headers;

    public function __construct()
    {
        $this->headers['x-api-key'] = config('porichoybd.api.key');
        $this->headers['Accept'] = 'application/json';
        $this->headers['Content-Type'] = 'application/json';
    }

    public function setHeader($key, $value)
    {
        $this->headers[$key] = $value;

        return $this;
    }

    public function getHeader(): array
    {
        $this->setHeader('Content-Language', 'en');

        return $this->headers;
    }

    public function makePostRequest($url, $payload, $contentType = 'application/json')
    {
        $response = Http::withHeaders($this->getHeader())
            ->withHeaders([
                'Content-Type' => $contentType,
            ])
            ->post($url, $payload);

        if ($response->failed()) {
            $response->throw();
        }

        return $response->body();
    }

    public function makeGetRequest($url, $params = [], $passBody = false)
    {
        $response = Http::withHeaders($this->getHeader())
            ->get($url, $params);

        if ($response->failed()) {
            $response->throw();
        }

        if ($passBody) {
            return $response;
        }

        return $response->body();
    }
}
