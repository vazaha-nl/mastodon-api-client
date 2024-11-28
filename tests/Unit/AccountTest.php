<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\AccountModel;

class AccountTest extends TestCase
{
    public function testAccountCorrectlyFilledFromApiResponse(): void
    {
        $json = file_get_contents(__DIR__ . '/assets/account.json');

        if (!$json) {
            throw new \LogicException('Could not read json!');
        }

        $decoded = json_decode($json, true, 512, \JSON_THROW_ON_ERROR);

        self::assertIsArray($decoded);

        $account = AccountModel::fromArray($decoded);

        self::assertEquals('23634', $account->id);
        self::assertEquals(404, $account->following_count);
    }
}
