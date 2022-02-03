<?php

declare(strict_types=1);

namespace Monowarfs\Library;

interface Caller
{
    public function setHeader($key, $value);

    public function getHeader();

    public function makePostRequest($url, $payload, $contentType);

    public function makeGetRequest($url, $params);
}
