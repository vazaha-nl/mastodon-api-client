<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

class ListModel extends Model
{
    public string $id;

    public string $title;

    public string $replies_policy;
}
