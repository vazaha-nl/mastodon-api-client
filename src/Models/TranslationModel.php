<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\Translation\AttachmentCollection;
use Vazaha\Mastodon\Models\Translation\PollModel;

/**
 * Represents the result of machine translating some status content.
 *
 * @see https://docs.joinmastodon.org/entities/Translation/
 */
class TranslationModel extends Model
{
    /**
     * HTML-encoded translated content of the status.
     */
    public string $content;

    /**
     * The translated spoiler warning of the status.
     */
    public string $spoiler_text;

    /**
     * The translated poll of the status.
     */
    public ?PollModel $poll = null;

    /**
     * The translated media descriptions of the status.
     */
    public AttachmentCollection $media_attachments;

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
