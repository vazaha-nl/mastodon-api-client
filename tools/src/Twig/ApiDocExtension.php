<?php

declare(strict_types=1);

namespace Tools\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ApiDocExtension extends AbstractExtension
{
    protected string $docBaseUri = 'https://docs.joinmastodon.org/';

    public function getFilters()
    {
        return [
            new TwigFilter('docblock_string', [$this, 'docblockString']),
        ];
    }

    public function docblockString(string $content): string
    {
        while (preg_match('/\[([^\]]*)\](\([^\)]*\))/', $content, $matches)) {
            $fullMatch = $matches[0];
            $text = $matches[1];
            $linkSpec = $matches[2];
            $replacement = $text;

            if (preg_match('/relref "(.*)"/', $linkSpec, $matches)) {
                $path = $matches[1];

                $replacement = sprintf(
                    '{@link %s%s %s}',
                    $this->docBaseUri,
                    $path,
                    $text,
                );
            }

            $content = str_replace($fullMatch, $replacement, $content);
        }

        return $content;
    }
}
