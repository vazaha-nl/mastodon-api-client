<?php

declare(strict_types=1);

namespace Tests\Integration;

use Vazaha\Mastodon\Models\AccountModel;

class AccountTest extends ApiClientTestCase
{
    public function testLookupAccount(): void
    {
        $adminAccount = $this->apiClient->methods()->accounts()->lookup('admin');
        self::assertInstanceOf(AccountModel::class, $adminAccount);
        self::assertSame($adminAccount->acct, 'admin');
    }
}
