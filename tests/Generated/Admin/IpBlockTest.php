<?php

declare(strict_types=1);

namespace Tests\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\IpBlockModel;

class IpBlockTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "id": "1",
  "ip": "8.8.8.8/32",
  "severity": "no_access",
  "comment": "",
  "created_at": "2022-11-16T07:22:00.501Z",
  "expires_at": null
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            // too bad...
            return;
        }

        $model = IpBlockModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = IpBlockModel::sanitizePropertyName($property);

            self::assertObjectHasProperty($property, $model);

            $modelValue = $model->{$property};

            if (!is_string($modelValue) && !is_int($modelValue)) {
                // TODO find some other way to test this
                continue;
            }

            self::assertEquals($value, $model->{$property});
        }
    }
}
