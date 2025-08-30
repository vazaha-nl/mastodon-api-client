<?php

declare(strict_types=1);

namespace Tests\Integration;

class GithubIssue7Test extends IntegrationTestCase
{
    public function testLanguagesCanBeNullInRelationshipModel(): void
    {
        $username = 'user1';

        $this->apiClient->setAccessToken($this->getAdminToken());

        $account = $this->apiClient->methods()->accounts()->lookup($username);

        $relationship = $this->apiClient->methods()->accounts()->follow($account->id);

        self::assertNull($relationship->languages);
    }
}
