<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\PreviewCardModel;

class PreviewCardTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "author_name" : "",
   "author_url" : "",
   "blurhash" : null,
   "description" : "When Peter Teich’s money went to another Barclays customer, the bank offered £25 as a token gesture",
   "embed_url" : "",
   "height" : 0,
   "html" : "",
   "image" : null,
   "provider_name" : "",
   "provider_url" : "",
   "title" : "‘I lost my £193,000 inheritance – with one wrong digit on my sort code’",
   "type" : "link",
   "url" : "https://www.theguardian.com/money/2019/dec/07/i-lost-my-193000-inheritance-with-one-wrong-digit-on-my-sort-code",
   "width" : 0
}

JSON;
    }

    public function testModelInstantation(): void
    {
        self::assertTrue(true);

        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = PreviewCardModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = PreviewCardModel::sanitizePropertyName($property);

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
