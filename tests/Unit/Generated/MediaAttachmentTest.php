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
   "remote_url" : null,
   "type" : "audio",
   "meta" : {
      "length" : "0:06:42.86",
      "duration" : 402.86,
      "original" : {
         "duration" : 402.860408,
         "bitrate" : 166290
      },
      "audio_bitrate" : "44100 Hz",
      "audio_encode" : "mp3",
      "audio_channels" : "stereo"
   },
   "id" : "21165404",
   "url" : "https://files.mastodon.social/media_attachments/files/021/165/404/original/a31a4a46cd713cd2.mp3",
   "text_url" : "https://mastodon.social/media/5O4uILClVqBWx0NNgvo",
   "preview_url" : "https://files.mastodon.social/media_attachments/files/021/165/404/small/a31a4a46cd713cd2.mp3",
   "description" : null
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
