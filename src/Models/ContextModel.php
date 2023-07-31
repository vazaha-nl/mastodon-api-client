<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\StatusCollection;

/**
 * @see https://link.to.docs
 */
class ContextModel extends Model
{
    /**
     * Parents in the thread.
     */
    public StatusCollection $ancestors;

    /**
     * Children in the thread.
     */
    public StatusCollection $descendants;
}
