<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents the result of machine translating some status content.
 *
 * @see https://docs.joinmastodon.org/entities/Translation/
 */
class TranslationModel extends Model
{
    /**
     * The translated text of the status.
     */
    public string $content;

    /**
     * The language of the source text, as auto-detected by the machine
     * translation provider.
     */
    public string $detected_source_language;

    /**
     * The service that provided the machine translation.
     */
    public string $provider;
}
