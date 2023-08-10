<?php

declare(strict_types=1);

use Vazaha\Mastodon\Factories\ApiClientFactory;
use Vazaha\Mastodon\Helpers\UploadFile;

require dirname(__DIR__) . '/vendor/autoload.php';

$factory = new ApiClientFactory();
$client = $factory->build()
    ->setBaseUri('http://instance.example')
    ->setAccessToken('your access token');

// post a text only status
$client->methods()->statuses()->create(
    'Hello world!',
);

// post a status with a poll
$client->methods()->statuses()->create(
    'Please vote in this poll!',
    [],
    [
        'options' => [
            'First poll option',
            'Second poll option',
            'Third poll option',
        ],
        'expires_in' => 3600, // seconds
        'multiple' => false, // true for checkboxes
        'hide_totals' => false,
    ],
);

// post a status with media (image/movie/etc)
// first upload the image by creating a media attachment
$mediaAttachment = $client->methods()->media()->v2(
    new UploadFile('/path/to/media.gif'), // use the \Vazaha\Mastodon\Helpers\UploadFile helper
    new UploadFile('/path/to/thumbnail.gif'), // optional
    'a picture of something cool',
);

// then post the status with a reference to the just created media attachment
$client->methods()->statuses()->create(
    'Look at this cool picture!',
    [
        $mediaAttachment->id,
    ],
);
