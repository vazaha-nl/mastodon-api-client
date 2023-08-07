<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated\Admin;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\Admin\DomainAllowModel;

class DomainAllowTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
	"id": "1",
	"domain": "mastodon.social",
	"created_at": "2022-09-14T21:23:02.755Z"
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

        $model = DomainAllowModel::fromArray($array);

        foreach ($array as $property => $value) {
            $property = DomainAllowModel::sanitizePropertyName($property);

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
