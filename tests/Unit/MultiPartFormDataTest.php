<?php

declare(strict_types=1);

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Helpers\MultipartFormData;
use Vazaha\Mastodon\Helpers\UploadFile;

class MultiPartFormDataTest extends TestCase
{
    public function testInvalidFilePathThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $file = new UploadFile('invalid');
    }

    public function testPathToDirThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $file = new UploadFile('/home');
    }

    public function testUnreadableFileThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $file = new UploadFile('/etc/shadow');
    }

    public function testFileObject(): void
    {
        $path = __DIR__ . '/assets/account.json';
        $file = new UploadFile($path);

        $array = $file->toArray();
        self::assertSame('account.json', $array['filename']);
        self::assertIsArray($array['headers']);
        self::assertSame('application/json', $array['headers']['content-type']);
        self::assertTrue(is_resource($array['contents']));
    }

    public function testMultipartGeneration(): void
    {
        $path = __DIR__ . '/assets/account.json';
        $file = new UploadFile($path);

        $params = [
            'single' => 'value',
            'list' => [
                'elem1',
                'elem2',
            ],
            'hash' => [
                'key1' => 'value1',
                'key2' => 'value2',
            ],
            'poll' => [
                'options' => [
                    'option1',
                    'option2',
                ],
            ],
            'file' => $file,
        ];

        $parts = (new MultipartFormData($params))->toArray();

        self::assertCount(8, $parts);

        self::assertSame('single', $parts[0]['name']);
        self::assertSame('value', $parts[0]['contents']);

        self::assertSame('list[]', $parts[1]['name']);
        self::assertSame('elem1', $parts[1]['contents']);

        self::assertSame('list[]', $parts[2]['name']);
        self::assertSame('elem2', $parts[2]['contents']);

        self::assertSame('hash[key1]', $parts[3]['name']);
        self::assertSame('value1', $parts[3]['contents']);

        self::assertSame('hash[key2]', $parts[4]['name']);
        self::assertSame('value2', $parts[4]['contents']);

        self::assertSame('poll[options][]', $parts[5]['name']);
        self::assertSame('option1', $parts[5]['contents']);

        self::assertSame('poll[options][]', $parts[6]['name']);
        self::assertSame('option2', $parts[6]['contents']);

        self::assertSame('file', $parts[7]['name']);
        self::assertSame('account.json', $parts[7]['filename']);
    }
}
