<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\AccountModel;

class AccountTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "acct" : "noiob@awoo.space",
   "avatar" : "https://files.mastodon.social/accounts/avatars/000/023/634/original/6ca8804dc46800ad.png",
   "avatar_static" : "https://files.mastodon.social/accounts/avatars/000/023/634/original/6ca8804dc46800ad.png",
   "bot" : false,
   "created_at" : "2017-02-08T02:00:53.274Z",
   "display_name" : "ikea shark fan account",
   "emojis" : [
      {
         "shortcode" : "ms_rainbow_flag",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/028/691/static/6de008d6281f4f59.png",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/028/691/original/6de008d6281f4f59.png",
         "visible_in_picker" : true
      },
      {
         "shortcode" : "ms_bisexual_flag",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/050/744/static/02f94a5fca7eaf78.png",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/050/744/original/02f94a5fca7eaf78.png",
         "visible_in_picker" : true
      },
      {
         "shortcode" : "ms_nonbinary_flag",
         "static_url" : "https://files.mastodon.social/custom_emojis/images/000/105/099/static/8106088bd4782072.png",
         "url" : "https://files.mastodon.social/custom_emojis/images/000/105/099/original/8106088bd4782072.png",
         "visible_in_picker" : true
      }
   ],
   "fields" : [
      {
         "name" : "Pronouns",
         "value" : "they/them",
         "verified_at" : null
      },
      {
         "name" : "Alt",
         "value" : "<span class=\"h-card\"><a href=\"https://cybre.space/@noiob\" class=\"u-url mention\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">@<span>noiob</span}</span>",
         "verified_at" : null
      },
      {
         "name" : "Bots",
         "value" : "<span class=\"h-card\"><a href=\"https://botsin.space/@darksouls\" class=\"u-url mention\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">@<span>darksouls</span}</span>, <span class=\"h-card\"><a href=\"https://botsin.space/@nierautomata\" class=\"u-url mention\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">@<span>nierautomata</span}</span>, <span class=\"h-card\"><a href=\"https://mastodon.social/@fedi\" class=\"u-url mention\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">@<span>fedi</span}</span>, code for <span class=\"h-card\"><a href=\"https://botsin.space/@awoobot\" class=\"u-url mention\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">@<span>awoobot</span}</span>",
         "verified_at" : null
      },
      {
         "name" : "Website",
         "value" : "<a href=\"http://shork.xyz\" rel=\"nofollow noopener noreferrer\" target=\"_blank\"><span class=\"invisible\">http://</span><span class=\"\">shork.xyz</span><span class=\"invisible\"></span}",
         "verified_at" : "2019-11-10T10:31:10.744+00:00"
      }
   ],
   "followers_count" : 547,
   "following_count" : 404,
   "header" : "https://files.mastodon.social/accounts/headers/000/023/634/original/256eb8d7ac40f49a.png",
   "header_static" : "https://files.mastodon.social/accounts/headers/000/023/634/original/256eb8d7ac40f49a.png",
   "id" : "23634",
   "last_status_at" : "2019-11-17T00:02:23.693Z",
   "locked" : false,
   "note" : "<p>:ms_rainbow_flag: :ms_bisexual_flagweb: :ms_nonbinary_flag: <a href=\"https://awoo.space/tags/awoo\" class=\"mention hashtag\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">#<span>awoo</span}.space <a href=\"https://awoo.space/tags/admin\" class=\"mention hashtag\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">#<span>admin</span} ~ <a href=\"https://awoo.space/tags/bi\" class=\"mention hashtag\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">#<span>bi</span} ~ <a href=\"https://awoo.space/tags/nonbinary\" class=\"mention hashtag\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">#<span>nonbinary</span} ~ compsci student ~ likes video <a href=\"https://awoo.space/tags/games\" class=\"mention hashtag\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">#<span>games</span} and weird/ old electronics and will post obsessively about both ~ avatar by <span class=\"h-card\"><a href=\"https://weirder.earth/@dzuk\" class=\"u-url mention\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">@<span>dzuk</span}</span></p>",
   "statuses_count" : 28468,
   "url" : "https://awoo.space/@noiob",
   "username" : "noiob"
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

        $model = AccountModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = AccountModel::sanitizePropertyName($property);

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
