<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Concerns\CreatesMockClient;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Models\PreferencesModel;
use Vazaha\Mastodon\Requests\Preferences\GetRequest;
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
            ->send(new GetRequest());

        self::assertInstanceOf(PreferencesResult::class, $result);

        $preferences = $result->getModel();
        self::assertInstanceOf(PreferencesModel::class, $preferences);
        self::assertEquals('public', $preferences->posting_default_visibility);
    }

    public function testGetPreferencesUsingProxy(): void
    {
        $preferences = $this->apiClient
            ->setBaseUri('foo')
            ->methods()
            ->preferences()
            ->get();

        self::assertInstanceOf(PreferencesModel::class, $preferences);
        self::assertEquals('public', $preferences->posting_default_visibility);
    }
}
