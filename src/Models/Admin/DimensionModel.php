<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models\Admin;

use Vazaha\Mastodon\Models\Model;

/**
 * Represents qualitative data about the server.
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
     * @var mixed[]
     */
    public array $data;
}