<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Models;

use Vazaha\Mastodon\Abstracts\Model;
use Vazaha\Mastodon\Collections\AccountCollection;
use Vazaha\Mastodon\Collections\AnnualReportCollection;
use Vazaha\Mastodon\Collections\StatusCollection;

/**
 * One or more [AnnualReport]({{&lt; relref &quot;entities/AnnualReport&quot; &gt;}}) wrapped in an object with relevant [Account]({{&lt; relref &quot;entities/Account&quot; &gt;}}) and [Status]({{&lt; relref &quot;entities/Status&quot; &gt;}}) entities.
 *
 * @see https://docs.joinmastodon.org/entities/AnnualReport/#WrappedAnnualReports
 */
class WrappedAnnualReportsModel extends Model
{
    /**
     * Full AnnualReport entities for the reports.
     */
    public AnnualReportCollection $annual_reports;

    /**
     * Full Account entities for the accounts mentioned in the reports.
     */
    public AccountCollection $accounts;

    /**
     * Full Status entities for the statuses mentioned in the reports.
     */
    public StatusCollection $statuses;
}
