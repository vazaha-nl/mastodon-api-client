<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\V1;

use Vazaha\Mastodon\Collections\RuleCollection;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\Model;

/**
 * Represents the software instance of Mastodon running on this domain.
 */
class InstanceModel extends Model
{
    /**
     * The domain name of the instance.
     */
    public string $uri;

    /**
     * The title of the website.
     */
    public string $title;

    /**
     * A short, plain-text description defined by the admin.
     */
    public string $short_description;

    /**
     * An HTML-permitted description of the Mastodon site.
     */
    public string $description;

    /**
     * An email that may be contacted for any inquiries.
     */
    public string $email;

    /**
     * The version of Mastodon installed on the instance.
     */
    public string $version;

    /**
     * URLs of interest for clients apps.
     *
     * @var mixed[]
     */
    public array $urls;

    /**
     * Statistics about how much information the instance contains.
     *
     * @var mixed[]
     */
    public array $stats;

    /**
     * Banner image for the website.
     */
    public ?string $thumbnail = null;

    /**
     * Primary languages of the website and its staff.
     */
    public string $languages;

    /**
     * Whether registrations are enabled.
     */
    public bool $registrations;

    /**
     * Whether registrations require moderator approval.
     */
    public bool $approval_required;

    /**
     * Whether invites are enabled.
     */
    public bool $invites_enabled;

    /**
     * Configured values and limits for this website.
     *
     * @var mixed[]
     */
    public array $configuration;

    /**
     * A user that can be contacted, as an alternative to `email`.
     */
    public AccountModel $contact_account;

    /**
     * An itemized list of rules for this website.
     */
    public RuleCollection $rules;
}
