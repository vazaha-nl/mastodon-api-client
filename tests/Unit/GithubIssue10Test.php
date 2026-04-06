<?php

declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\PreviewCardAuthorModel;

class GithubIssue10Test extends TestCase
{
    public function testAccountPropertyShouldAcceptNull(): void
    {
        self::expectNotToPerformAssertions();
        $model = new PreviewCardAuthorModel();
        $model->account = null;
    }
}
