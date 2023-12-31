<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\ExtendedDescriptionModel;

class ExtendedDescriptionTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "content" : "<p>For inquiries not related specifically to the operation of this server, such as press inquiries, please contact <a href=\"mailto:press@joinmastodon.org\">press@joinmastodon.org</a>.</p>\n\n<h2>Funding</h2>\n\n<p>This server is crowdfunded by <a href=\"https://patreon.com/mastodon\">Patreon donations</a>. For a list of sponsors, see <a href=\"https://joinmastodon.org/sponsors\">joinmastodon.org</a>.</p>\n\n<h2>Reporting and moderation</h2>\n\n<p>When reporting accounts, please make sure to include at least a few posts that show rule-breaking behaviour, when applicable. If there is any additional context that might help make a decision, please also include it in the comment. This is especially important when the content is in a language nobody on the moderation team speaks.</p>\n\n<p>We usually handle reports within 24 hours. Please mind that you are not notified when a report you have made has led to a punitive action, and that not all punitive actions are externally visible. For first time offenses, we may opt to delete offending content, escalating to harsher measures on repeat offenses.</p>\n\n<h2>Impressum</h2>\n\n<p>Mastodon gGmbH<br>\nMühlenstraße 8a<br>\n14167 Berlin<br>\nGermany</p>\n\n<p>E-Mail-Adresse: hello@joinmastodon.org</p>\n\n<p>Vertretungsberechtigt: Eugen Rochko (Geschäftsführer)</p>\n\n<p>Umsatzsteuer Identifikationsnummer (USt-ID): DE344258260</p>\n\n<p>Handelsregister<br>\nGeführt bei: Amtsgericht Charlottenburg<br>\nNummer: HRB 230086 B</p>\n",
   "updated_at" : "2022-11-03T04:09:07Z"
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

        $model = ExtendedDescriptionModel::fromArray($array);

        $modelArray = $model->toArray();
        self::assertIsArray($modelArray);

        foreach ($array as $property => $value) {
            $property = ExtendedDescriptionModel::sanitizePropertyName($property);

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
