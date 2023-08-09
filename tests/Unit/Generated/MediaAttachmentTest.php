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
   "preview_url" : "https://files.mastodon.social/media_attachments/files/021/165/404/small/a31a4a46cd713cd2.mp3",
   "remote_url" : null,
   "text_url" : "https://mastodon.social/media/5O4uILClVqBWx0NNgvo",
   "type" : "audio",
   "url" : "https://files.mastodon.social/media_attachments/files/021/165/404/original/a31a4a46cd713cd2.mp3"
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

        $model = MediaAttachmentModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

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
