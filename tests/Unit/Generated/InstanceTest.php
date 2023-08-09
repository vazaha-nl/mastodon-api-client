<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\InstanceModel;

class InstanceTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "configuration" : {
      "accounts" : {
         "max_featured_tags" : 10
      },
      "media_attachments" : {
         "image_matrix_limit" : 16777216,
         "image_size_limit" : 10485760,
         "supported_mime_types" : [
            "image/jpeg",
            "image/png",
            "image/gif",
            "image/heic",
            "image/heif",
            "image/webp",
            "video/webm",
            "video/mp4",
            "video/quicktime",
            "video/ogg",
            "audio/wave",
            "audio/wav",
            "audio/x-wav",
            "audio/x-pn-wave",
            "audio/vnd.wave",
            "audio/ogg",
            "audio/vorbis",
            "audio/mpeg",
            "audio/mp3",
            "audio/webm",
            "audio/flac",
            "audio/aac",
            "audio/m4a",
            "audio/x-m4a",
            "audio/mp4",
            "audio/3gpp",
            "video/x-ms-asf"
         ],
         "video_frame_rate_limit" : 60,
         "video_matrix_limit" : 2304000,
         "video_size_limit" : 41943040
      },
      "polls" : {
         "max_characters_per_option" : 50,
         "max_expiration" : 2629746,
         "max_options" : 4,
         "min_expiration" : 300
      },
      "statuses" : {
         "characters_reserved_per_url" : 23,
         "max_characters" : 500,
         "max_media_attachments" : 4
      },
      "translation" : {
         "enabled" : true
      },
      "urls" : {
         "streaming" : "wss://mastodon.social"
      }
   },
   "contact" : {
      "account" : {
         "acct" : "Gargron",
         "avatar" : "https://files.mastodon.social/accounts/avatars/000/000/001/original/dc4286ceb8fab734.jpg",
         "avatar_static" : "https://files.mastodon.social/accounts/avatars/000/000/001/original/dc4286ceb8fab734.jpg",
         "bot" : false,
         "created_at" : "2016-03-16T00:00:00.000Z",
         "discoverable" : true,
         "display_name" : "Eugen 💀",
         "emojis" : [],
         "fields" : [
            {
               "name" : "Patreon",
               "value" : "<a href=\"https://www.patreon.com/mastodon\" target=\"_blank\" rel=\"nofollow noopener noreferrer me\"><span class=\"invisible\">https://www.</span><span class=\"\">patreon.com/mastodon</span><span class=\"invisible\"></span></a>",
               "verified_at" : null
            }
         ],
         "followers_count" : 133026,
         "following_count" : 311,
         "group" : false,
         "header" : "https://files.mastodon.social/accounts/headers/000/000/001/original/3b91c9965d00888b.jpeg",
         "header_static" : "https://files.mastodon.social/accounts/headers/000/000/001/original/3b91c9965d00888b.jpeg",
         "id" : "1",
         "last_status_at" : "2022-10-31",
         "locked" : false,
         "noindex" : false,
         "note" : "<p>Founder, CEO and lead developer <span class=\"h-card\"><a href=\"https://mastodon.social/@Mastodon\" class=\"u-url mention\">@<span>Mastodon</span></a></span>, Germany.</p>",
         "statuses_count" : 72605,
         "url" : "https://mastodon.social/@Gargron",
         "username" : "Gargron"
      },
      "email" : "staff@mastodon.social"
   },
   "description" : "The original server operated by the Mastodon gGmbH non-profit",
   "domain" : "mastodon.social",
   "languages" : [
      "en"
   ],
   "registrations" : {
      "approval_required" : false,
      "enabled" : false,
      "message" : null
   },
   "rules" : [
      {
         "id" : "1",
         "text" : "Sexually explicit or violent media must be marked as sensitive when posting"
      },
      {
         "id" : "2",
         "text" : "No racism, sexism, homophobia, transphobia, xenophobia, or casteism"
      },
      {
         "id" : "3",
         "text" : "No incitement of violence or promotion of violent ideologies"
      },
      {
         "id" : "4",
         "text" : "No harassment, dogpiling or doxxing of other users"
      },
      {
         "id" : "5",
         "text" : "No content illegal in Germany"
      },
      {
         "id" : "7",
         "text" : "Do not share intentionally false or misleading information"
      }
   ],
   "source_url" : "https://github.com/mastodon/mastodon",
   "thumbnail" : {
      "blurhash" : "UeKUpFxuo~R%0nW;WCnhF6RjaJt757oJodS$",
      "url" : "https://files.mastodon.social/site_uploads/files/000/000/001/@1x/57c12f441d083cde.png",
      "versions" : {
         "@1x" : "https://files.mastodon.social/site_uploads/files/000/000/001/@1x/57c12f441d083cde.png",
         "@2x" : "https://files.mastodon.social/site_uploads/files/000/000/001/@2x/57c12f441d083cde.png"
      }
   },
   "title" : "Mastodon",
   "usage" : {
      "users" : {
         "active_month" : 123122
      }
   },
   "version" : "4.0.0rc1"
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

        $model = InstanceModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = InstanceModel::sanitizePropertyName($property);

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
