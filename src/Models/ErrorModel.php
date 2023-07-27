<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

class ErrorModel extends Model
{
    public string $error;

    public string $error_description;
}
