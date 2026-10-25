<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ProfileModel;

class ProfileTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "attribution_domains" : [
      "articles.example.com"
   ],
   "avatar" : null,
   "avatar_description" : "",
   "avatar_static" : null,
   "bot" : false,
   "discoverable" : true,
   "display_name" : "Documentation user",
   "featured_tags" : [
      {
         "id" : "1",
         "last_status_at" : null,
         "name" : "foo",
         "statuses_count" : "0"
      }
   ],
   "fields" : [
      {
         "name" : "pronouns",
         "value" : "it/its",
         "verified_at" : null
      }
   ],
   "header" : null,
   "header_description" : "",
   "header_static" : null,
   "hide_collections" : null,
   "id" : "116222600881276277",
   "indexable" : true,
   "locked" : false,
   "note" : "I'm only here as an example for documentation",
   "show_featured" : true,
   "show_media" : true,
   "show_media_replies" : true
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

        $model = ProfileModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = ProfileModel::sanitizePropertyName($property);

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
