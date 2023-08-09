<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use InvalidArgumentException;

trait ConstructsFormDataBody
{
    /**
     * @param mixed $contents
     */
    protected function constructElement(
        string $baseName,
        $contents,
    ): string {
        if (is_array($contents)) {
            if (array_is_list($contents)) {
                $name = $baseName . '[]';
                $parts = [];

                foreach ($contents as $elem) {
                    $parts[] = $this->constructElement($name, $elem);
                }

                return implode('&', $parts);
            }

            $parts = [];

            foreach ($contents as $key => $value) {
                $name = sprintf('%s[%s]', $baseName, $key);
                $parts[] = $this->constructElement($name, $value);
            }

            return implode('&', $parts);
        }

        if (is_object($contents) && method_exists($contents, '__toString')) {
            $contents = (string) $contents;
        }

        if (is_string($contents) || is_numeric($contents) || is_bool($contents)) {
            return sprintf(
                '%s=%s',
                urlencode($baseName),
                urlencode((string) $contents),
            );
        }

        throw new InvalidArgumentException('Invalid format (non stringifiable) in form params encountered for param ' . $baseName);
    }

    protected function getFormDataBody(): string
    {
        $parts = [];

        foreach ($this->getFormParams() as $name => $value) {
            if ($value === null) {
                continue;
            }

            $parts[] = $this->constructElement($name, $value);
        }

        return implode('&', $parts);
    }
}
