<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the terms of service of the instance.
 *
 * @see https://docs.joinmastodon.org/entities/TermsOfService/
 */
class TermsOfServiceModel extends Model
{
    /**
     * The date these terms of service are coming or have come in effect.
     */
    public \DateTimeInterface $effective_date;

    /**
     * Whether these terms of service are currently in effect.
     */
    public bool $effective;

    /**
     * The rendered HTML content of the terms of service.
     */
    public string $content;

    /**
     * If there are newer terms of service, their effective date.
     */
    public ?\DateTimeInterface $succeeded_by = null;
}
