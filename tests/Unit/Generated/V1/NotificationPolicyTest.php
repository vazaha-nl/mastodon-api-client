<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\V1;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\V1\NotificationPolicyModel;

class NotificationPolicyTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "filter_new_accounts" : false,
   "filter_not_followers" : false,
   "filter_not_following" : false,
   "filter_private_mentions" : true,
   "summary" : {
      "pending_notifications_count" : 0,
      "pending_requests_count" : 0
   }
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

        $model = NotificationPolicyModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = NotificationPolicyModel::sanitizePropertyName($property);

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
