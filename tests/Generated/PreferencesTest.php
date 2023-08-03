<?php

declare(strict_types=1);

namespace Tests\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\PreferencesModel;

class PreferencesTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "posting:default:visibility": "public",
  "posting:default:sensitive": false,
  "posting:default:language": null,
  "reading:expand:media": "default",
  "reading:expand:spoilers": false
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

        $model = PreferencesModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = PreferencesModel::sanitizePropertyName($property);

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
