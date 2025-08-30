<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the privacy policy of the instance.
 *
 * @see https://docs.joinmastodon.org/entities/PrivacyPolicy/
 */
class PrivacyPolicyModel extends Model
{
    /**
     * A timestamp of when the privacy policy was last updated.
     */
    public \DateTimeInterface $updated_at;

    /**
     * The rendered HTML content of the privacy policy.
     */
    public string $content;
}
