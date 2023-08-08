<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ReportModel;

class ReportTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "action_taken" : false,
   "action_taken_at" : null,
   "category" : "spam",
   "comment" : "Spam account",
   "created_at" : "2022-08-25T09:56:16.763Z",
   "forwarded" : false,
   "id" : "48914",
   "rule_ids" : null,
   "status_ids" : [
      "108882889550545820"
   ],
   "target_account" : {
      "acct" : "Baluke",
      "avatar" : "https://files.mastodon.social/accounts/avatars/108/366/849/347/798/387/original/dbcfe99ed5def0f4.png",
      "avatar_static" : "https://files.mastodon.social/accounts/avatars/108/366/849/347/798/387/original/dbcfe99ed5def0f4.png",
      "bot" : false,
      "created_at" : "2022-05-26T00:00:00.000Z",
      "discoverable" : false,
      "display_name" : "Baluke Dental Studios",
      "emojis" : [],
      "fields" : [],
      "followers_count" : 0,
      "following_count" : 0,
      "group" : false,
      "header" : "https://static-cdn.mastodon.social/headers/original/missing.png",
      "header_static" : "https://static-cdn.mastodon.social/headers/original/missing.png",
      "id" : "108366849347798387",
      "last_status_at" : "2022-08-25",
      "locked" : false,
      "note" : "<p>Baluke Dental Studios is a full service dental lab offering fabrication, staining, and digital services. Advanced technologies and a meticulous process ensure reduced chair time, lower costs, and better patient outcomes with beautiful smiles. Talk to a representative today.</p><p><a href=\"https://baluke.com/\" target=\"_blank\" rel=\"nofollow noopener noreferrer\"><span class=\"invisible\">https://</span><span class=\"\">baluke.com/</span><span class=\"invisible\"></span></a></p>",
      "statuses_count" : 38,
      "url" : "https://mastodon.social/@Baluke",
      "username" : "Baluke"
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

        $model = ReportModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = ReportModel::sanitizePropertyName($property);

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
