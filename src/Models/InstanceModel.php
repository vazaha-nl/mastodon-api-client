<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Collections\RuleCollection;

/**
 * Represents the software instance of Mastodon running on this domain.
 */
class InstanceModel extends Model
{
    /**
     * The domain name of the instance.
     */
    public string $domain;

    /**
     * The title of the website.
     */
    public string $title;

    /**
     * The version of Mastodon installed on the instance.
     */
    public string $version;

    /**
     * The URL for the source code of the software running on this instance, in
     * keeping with AGPL license requirements.
     */
    public string $source_url;

    /**
     * A short, plain-text description defined by the admin.
     */
    public string $description;

    /**
     * Usage data for this instance.
     *
     * @var mixed[]
     */
    public array $usage;

    /**
     * An image used to represent this instance.
     *
     * @var mixed[]
     */
    public array $thumbnail;

    /**
     * Primary languages of the website and its staff.
     *
     * @var array<string>
     */
    public array $languages;

    /**
     * Configured values and limits for this website.
     *
     * @var mixed[]
     */
    public array $configuration;

    /**
     * Information about registering for this website.
     *
     * @var mixed[]
     */
    public array $registrations;

    /**
     * Hints related to contacting a representative of the website.
     *
     * @var mixed[]
     */
    public array $contact;

    /**
     * An itemized list of rules for this website.
     */
    public RuleCollection $rules;
}
