<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\MediaAttachmentModel;

class MediaAttachmentTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "blurhash" : null,
   "description" : null,
   "id" : "21165404",
   "meta" : {
      "audio_bitrate" : "44100 Hz",
      "audio_channels" : "stereo",
      "audio_encode" : "mp3",
      "duration" : 402.86,
      "length" : "0:06:42.86",
      "original" : {
         "bitrate" : 166290,
         "duration" : 402.860408
      }
   },
   "remote_url" : null,
   "type" : "audio"
}

JSON;
    }

    public function testModelInstantation(): void
    {
        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = MediaAttachmentModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = MediaAttachmentModel::sanitizePropertyName($property);

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
