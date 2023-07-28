<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\PreferencesModel;
use Vazaha\Mastodon\Requests\GetPreferencesRequest;
use Vazaha\Mastodon\Results\PreferencesResult;

class PreferencesTest extends TestCase
{
    use CreatesMockClient;

    protected ApiClient $apiClient;

    protected function setUp(): void
    {
        $this->apiClient = $this->createMockClient([
            $this->createJsonResponseFromFile(
                200,
                'preferences.json',
            ),
        ]);
    }

    public function testGetPreferences(): void
    {
        $result = $this->apiClient
            ->setBaseUri('foo')
            ->doRequest(new GetPreferencesRequest());

        self::assertInstanceOf(PreferencesResult::class, $result);

        $preferences = $result->getModel();
        self::assertInstanceOf(PreferencesModel::class, $preferences);
        self::assertEquals('public', $preferences->posting_default_visibility);
    }
}
