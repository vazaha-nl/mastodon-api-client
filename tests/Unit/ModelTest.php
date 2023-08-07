<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Collections\FieldCollection;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\FieldModel;
use Vazaha\Mastodon\Models\RoleModel;

class ModelTest extends TestCase
{
    public function testModelsWithEncapsulatedModels(): void
    {
        $array = [
            'moved' => [
                'id' => '123',
            ],
            'fields' => [
                [
                    'name' => 'name1',
                    'value' => 'value1',
                ],
            ],
        ];

        $account = AccountModel::fromArray($array);
        self::assertInstanceOf(FieldCollection::class, $account->fields);
        self::assertInstanceOf(FieldModel::class, $account->fields->first());
        self::assertSame('name1', $account->fields->first()->name);
        self::assertInstanceOf(AccountModel::class, $account->moved);
        self::assertSame('123', $account->moved->id);
    }

    public function testAssignStringifiedIntToIntPropertyShouldNotBreak(): void
    {
        $array = [
            'permissions' => '1234',
        ];
        $model = RoleModel::fromArray($array);
        self::assertSame(1234, $model->permissions);
    }

    public function testAssignIntToStringPropertyShouldNotBreak(): void
    {
        $array = [
            'id' => 1234,
        ];
        $model = RoleModel::fromArray($array);
        self::assertSame('1234', $model->id);
    }
}
