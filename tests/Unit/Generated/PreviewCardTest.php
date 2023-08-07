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
   "image" : null,
   "blurhash" : null,
   "type" : "link",
   "title" : "‘I lost my £193,000 inheritance – with one wrong digit on my sort code’",
   "author_url" : "",
   "embed_url" : "",
   "width" : 0,
   "html" : "",
   "author_name" : "",
   "height" : 0,
   "description" : "When Peter Teich’s money went to another Barclays customer, the bank offered £25 as a token gesture",
   "provider_url" : "",
   "url" : "https://www.theguardian.com/money/2019/dec/07/i-lost-my-193000-inheritance-with-one-wrong-digit-on-my-sort-code",
   "provider_name" : ""
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
