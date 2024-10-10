<?php

namespace Tonymans33\KwdText;

use Tonymans33\KwdText\Services\KwdTextService;

class KwdText
{
    protected $service;

    /**
     * Constructor to initialize the KwdText service.
     */
    public function __construct()
    {
        $this->service = new KwdTextService();
    }

    /**
     * Append 'KWD' currency to the given text using the service.
     *
     * @param string $text
     * @return string
     */
    public function appendKwd($text)
    {
        return $this->service->appendKwd($text);
    }
}
