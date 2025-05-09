<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a domain allowed to federate.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_DomainAllow/
 */
class DomainAllowModel extends Model
{
    /**
     * The ID of the DomainAllow in the database.
     */
    public string $id;

    /**
     * The domain that is allowed to federate.
     */
    public string $domain;

    /**
     * When the domain was allowed to federate.
     */
    public \DateTimeInterface $created_at;
}
