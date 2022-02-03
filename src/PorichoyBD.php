<?php

namespace Monowarfs\PorichoyBD;

use Monowarfs\Library\HttpCaller;

class PorichoyBD
{
    private HttpCaller $httpCaller;

    public function __construct()
    {
        $this->httpCaller = new HttpCaller();
    }

    public function basic(array $payload)
    {
        if (config('porichoybd.is_live') == false) {
            $url = config('porichoybd.api.endpoints.test.basic');

            return $this->httpCaller->makePostRequest(
                $url,
                $payload
            );
        }
    }
}
