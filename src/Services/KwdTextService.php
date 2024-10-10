<?php

namespace Tonymans33\KwdText\Services;

class KwdTextService
{
    /**
     * Append 'KWD' currency to the given text.
     *
     * @param string $text
     * @return string
     */
    public function appendKwd($text)
    {
        return $text . ' KWD';
    }
}
