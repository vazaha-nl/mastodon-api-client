<?php

declare(strict_types=1);

namespace Tests\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\FilterKeywordModel;

class FilterKeywordTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
	"id": "1197",
	"keyword": "bad word",
	"whole_word": false
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

        $model = FilterKeywordModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = FilterKeywordModel::sanitizePropertyName($property);

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
