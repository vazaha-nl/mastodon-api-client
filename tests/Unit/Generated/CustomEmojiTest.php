<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\CustomEmojiModel;

class CustomEmojiTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "category" : "Blobs",
   "shortcode" : "blobaww",
   "static_url" : "https://files.mastodon.social/custom_emojis/images/000/011/739/static/blobaww.png",
   "url" : "https://files.mastodon.social/custom_emojis/images/000/011/739/original/blobaww.png",
   "visible_in_picker" : true
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

        $model = CustomEmojiModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = CustomEmojiModel::sanitizePropertyName($property);

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
