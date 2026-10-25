<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Translation\Poll;

use Vazaha\Mastodon\Models\TranslationModel;

/**
 * Represents the result of machine translating some status content.
 *
 * @see https://docs.joinmastodon.org/entities/Translation/#Option
 */
class OptionModel extends TranslationModel
{
    /**
     * The translated title of the poll option.
     */
    public string $title;
}
