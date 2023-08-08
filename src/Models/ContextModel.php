<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\StatusCollection;

/**
 * Represents the tree around a given status. Used for reconstructing threads of statuses.
 *
 * @see https://docs.joinmastodon.org/entities/Context/
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
