<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Carbon\Carbon;
use Vazaha\Mastodon\Models\Model;

/**
 * @see https://link.to.docs
 */
class IpModel extends Model
{
    /**
     * The IP address.
     */
    public string $ip;

    /**
     * The timestamp of when the IP address was last used for this account.
     */
    public Carbon $used_at;
}
