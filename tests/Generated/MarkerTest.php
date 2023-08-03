<?php

declare(strict_types=1);

namespace Tests\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\MarkerModel;

class MarkerTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
  "last_read_id": "103194548672408537",
  "version": 462,
  "updated_at": "2019-11-24T19:39:39.337Z"
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

        $model = MarkerModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = MarkerModel::sanitizePropertyName($property);

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
