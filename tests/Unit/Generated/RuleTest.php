<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\RuleModel;

class RuleTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "hint" : "Transphobic behavior such as intentional misgendering and deadnaming is strictly prohibited. Promotion of \"conversion therapy\" is strictly prohibited. Criticism of governments and religions is permissible unless being used as a proxy for discrimination.",
   "id" : "2",
   "text" : "No racism, sexism, homophobia, transphobia, ableism, xenophobia, or casteism.",
   "translations" : {
      "fr" : {
         "hint" : "Les comportements transhobes tels que le deadnaming intentionel sont formellement interdits. La promotion des « thérapies de conversion » est formellement interdite. La critique des gouvernements et des religions est permise à moins qu'elle ne soit utilisée comme excuse pour de la discrimination.",
         "text" : "Pas de racisme, sexisme, homophobie, transphobie, validisme, xénophobie ou casteisme."
      }
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

        $model = RuleModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = RuleModel::sanitizePropertyName($property);

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
