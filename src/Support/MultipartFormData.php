<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Support;

use InvalidArgumentException;

class MultipartFormData
{
    /**
     * @param array<string, mixed> $params
     */
    public function __construct(
        protected array $params,
    ) {
    }

    /**
     * @throws \InvalidArgumentException
     *
     * @return array<int, array<string, mixed>>
     */
    public function toArray(): array
    {
        $parts = [];

        foreach ($this->params as $name => $value) {
            if ($value === null) {
                continue;
            }

            $parts = array_merge($parts, $this->constructParts($name, $value));
        }

        return $parts;
    }

    /**
     * @param mixed $contents
     *
     * @return array<int, array<string, mixed>>
     */
    protected function constructParts(
        string $baseName,
        $contents,
    ): array {
        $parts = [];

        if (is_array($contents)) {
            if (array_is_list($contents)) {
                $name = $baseName . '[]';

                foreach ($contents as $elem) {
                    $parts = array_merge($parts, $this->constructParts($name, $elem));
                }

                return $parts;
            }

            foreach ($contents as $key => $value) {
                $name = sprintf('%s[%s]', $baseName, $key);
                $parts = array_merge($parts, $this->constructParts($name, $value));
            }

            return $parts;
        }

        if (is_object($contents) && method_exists($contents, '__toString')) {
            $contents = (string) $contents;
        }

        if (is_string($contents) || is_numeric($contents) || is_bool($contents)) {
            return [
                [
                    'name' => $baseName,
                    'contents' => (string) $contents,
                ],
            ];
        }

        if ($contents instanceof File) {
            return [
                array_merge($contents->toArray(), [
                    'name' => $baseName,
                ]),
            ];
        }

        throw new InvalidArgumentException('Invalid format in form params encountered for param ' . $baseName);
    }
}
