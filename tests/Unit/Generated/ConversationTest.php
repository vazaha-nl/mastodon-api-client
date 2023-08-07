<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ConversationModel;

class ConversationTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "unread" : true,
   "id" : "418450",
   "accounts" : [
      {
         "username" : "amic",
         "id" : "482403",
         "acct" : "amic@nulled.red"
      }
   ],
   "last_status" : {
      "in_reply_to_account_id" : "14715",
      "id" : "103196583826321184",
      "created_at" : "2019-11-25T04:08:24.000Z",
      "in_reply_to_id" : "103196540587943467"
   }
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

        $model = ConversationModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = ConversationModel::sanitizePropertyName($property);

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
