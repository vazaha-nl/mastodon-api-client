<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\InstanceIconCollection;
use Vazaha\Mastodon\Collections\RuleCollection;

/**
 * Represents the software instance of Mastodon running on this domain.
 *
 * @see https://docs.joinmastodon.org/entities/Instance/
 */
class InstanceModel extends Model
{
    /**
     * The WebFinger domain name of the server.
     */
    public string $domain;

    /**
     * The title of the website.
     */
    public string $title;

    /**
     * The version of Mastodon installed on the server.
     */
    public string $version;

    /**
     * The URL for the source code of the software running on this server, per the
     * AGPL license requirements.
     */
    public string $source_url;

    /**
     * A short, plain-text description defined by the admin.
     */
    public string $description;

    /**
     * Usage data for this server.
     *
     * @var array<array-key, mixed>
     */
    public array $usage;

    /**
     * An image used to represent this server.
     *
     * @var array<array-key, mixed>
     */
    public array $thumbnail;

    /**
     * The list of available size variants for this server's configured icon.
     */
    public InstanceIconCollection $icon;

    /**
     * Primary languages of the website and its staff.
     *
     * @var list<string>
     */
    public array $languages;

    /**
     * Configured values and limits for this website.
     *
     * @var array<array-key, mixed>
     */
    public array $configuration;

    /**
     * Information about registering for this website.
     *
     * @var array<array-key, mixed>
     */
    public array $registrations;

    /**
     * Machine-readable API version information that allows clients to determine
     * which API endpoints and features are available on this server. This
     * provides a more reliable method for capability detection than parsing
     * human-readable version strings, especially for forks and development
     * builds. It contains at least a `mastodon` attribute, and other
     * implementations may have their own additional attributes.
     *
     * @var array<array-key, mixed>
     */
    public array $api_versions;

    /**
     * Hints related to contacting a representative of the website.
     *
     * @var array<array-key, mixed>
     */
    public array $contact;

    /**
     * An itemized list of rules for this website.
     */
    public RuleCollection $rules;
}
