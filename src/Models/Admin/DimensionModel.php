<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Abstracts\Model;

/**
 * Represents qualitative data about the server.
 *
 * @see https://docs.joinmastodon.org/entities/Admin_Dimension/
 */
class DimensionModel extends Model
{
    /**
     * The unique keystring for the requested dimension.
     */
    public string $key;

    /**
     * The data available for the requested dimension.
     *
     * @var list<mixed>
     */
    public array $data;
}
