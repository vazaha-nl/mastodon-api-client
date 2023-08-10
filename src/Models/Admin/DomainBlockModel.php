<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use DateTimeInterface;
use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents a domain limited from federating.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_DomainBlock/
 */
class DomainBlockModel extends Model
{
    /**
     * The ID of the DomainBlock in the database.
     */
    public string $id;

    /**
     * The domain that is not allowed to federate.
     */
    public string $domain;

    /**
     * When the domain was blocked from federating.
     */
    public DateTimeInterface $created_at;

    /**
     * The policy to be applied by this domain block.
     */
    public string $severity;

    /**
     * Whether to reject media attachments from this domain.
     */
    public bool $reject_media;

    /**
     * Whether to reject reports from this domain.
     */
    public bool $reject_reports;

    public ?string $private_comment = null;

    public ?string $public_comment = null;

    /**
     * Whether to obfuscate public displays of this domain block.
     */
    public bool $obfuscate;
}
