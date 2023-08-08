<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Proxies\Admin\AccountsProxy;
use Vazaha\Mastodon\Proxies\Admin\CanonicalEmailBlocksProxy;
use Vazaha\Mastodon\Proxies\Admin\DimensionsProxy;
use Vazaha\Mastodon\Proxies\Admin\DomainAllowsProxy;
use Vazaha\Mastodon\Proxies\Admin\DomainBlocksProxy;
use Vazaha\Mastodon\Proxies\Admin\EmailDomainBlocksProxy;
use Vazaha\Mastodon\Proxies\Admin\IpBlocksProxy;
use Vazaha\Mastodon\Proxies\Admin\MeasuresProxy;
use Vazaha\Mastodon\Proxies\Admin\ReportsProxy;
use Vazaha\Mastodon\Proxies\Admin\RetentionProxy;
use Vazaha\Mastodon\Proxies\Admin\TrendsProxy;

class AdminProxy extends Proxy
{
    protected AccountsProxy $accounts;

    protected CanonicalEmailBlocksProxy $canonicalEmailBlocks;

    protected DimensionsProxy $dimensions;

    protected DomainAllowsProxy $domainAllows;

    protected DomainBlocksProxy $domainBlocks;

    protected EmailDomainBlocksProxy $emailDomainBlocks;

    protected IpBlocksProxy $ipBlocks;

    protected MeasuresProxy $measures;

    protected ReportsProxy $reports;

    protected RetentionProxy $retention;

    protected TrendsProxy $trends;

    public function __construct(
        public ApiClient $apiClient,
    ) {
    }

    /**
     * Perform moderation actions with accounts.
     *
     * @see https://docs.joinmastodon.org/methods/accounts/
     */
    public function accounts(): AccountsProxy
    {
        if (!isset($this->accounts)) {
            $this->accounts = new AccountsProxy($this->apiClient);
        }

        return $this->accounts;
    }

    /**
     * Block certain email addresses by their hash.
     *
     * @see https://docs.joinmastodon.org/methods/canonical_email_blocks/
     */
    public function canonicalEmailBlocks(): CanonicalEmailBlocksProxy
    {
        if (!isset($this->canonicalEmailBlocks)) {
            $this->canonicalEmailBlocks = new CanonicalEmailBlocksProxy($this->apiClient);
        }

        return $this->canonicalEmailBlocks;
    }

    /**
     * Obtain qualitative metrics about the server.
     *
     * @see https://docs.joinmastodon.org/methods/dimensions/
     */
    public function dimensions(): DimensionsProxy
    {
        if (!isset($this->dimensions)) {
            $this->dimensions = new DimensionsProxy($this->apiClient);
        }

        return $this->dimensions;
    }

    /**
     * Allow certain domains to federate.
     *
     * @see https://docs.joinmastodon.org/methods/domain_allows/
     */
    public function domainAllows(): DomainAllowsProxy
    {
        if (!isset($this->domainAllows)) {
            $this->domainAllows = new DomainAllowsProxy($this->apiClient);
        }

        return $this->domainAllows;
    }

    /**
     * Disallow certain domains to federate.
     *
     * @see https://docs.joinmastodon.org/methods/domain_blocks/
     */
    public function domainBlocks(): DomainBlocksProxy
    {
        if (!isset($this->domainBlocks)) {
            $this->domainBlocks = new DomainBlocksProxy($this->apiClient);
        }

        return $this->domainBlocks;
    }

    /**
     * Disallow certain email domains from signing up.
     *
     * @see https://docs.joinmastodon.org/methods/email_domain_blocks/
     */
    public function emailDomainBlocks(): EmailDomainBlocksProxy
    {
        if (!isset($this->emailDomainBlocks)) {
            $this->emailDomainBlocks = new EmailDomainBlocksProxy($this->apiClient);
        }

        return $this->emailDomainBlocks;
    }

    /**
     * Disallow certain IP address ranges from signing up.
     *
     * @see https://docs.joinmastodon.org/methods/ip_blocks/
     */
    public function ipBlocks(): IpBlocksProxy
    {
        if (!isset($this->ipBlocks)) {
            $this->ipBlocks = new IpBlocksProxy($this->apiClient);
        }

        return $this->ipBlocks;
    }

    /**
     * Obtain quantitative metrics about the server.
     *
     * @see https://docs.joinmastodon.org/methods/measures/
     */
    public function measures(): MeasuresProxy
    {
        if (!isset($this->measures)) {
            $this->measures = new MeasuresProxy($this->apiClient);
        }

        return $this->measures;
    }

    /**
     * Perform moderation actions with reports.
     *
     * @see https://docs.joinmastodon.org/methods/reports/
     */
    public function reports(): ReportsProxy
    {
        if (!isset($this->reports)) {
            $this->reports = new ReportsProxy($this->apiClient);
        }

        return $this->reports;
    }

    /**
     * Show retention data over time.
     *
     * @see https://docs.joinmastodon.org/methods/retention/
     */
    public function retention(): RetentionProxy
    {
        if (!isset($this->retention)) {
            $this->retention = new RetentionProxy($this->apiClient);
        }

        return $this->retention;
    }

    /**
     * TODO.
     *
     * @see https://docs.joinmastodon.org/methods/trends/
     */
    public function trends(): TrendsProxy
    {
        if (!isset($this->trends)) {
            $this->trends = new TrendsProxy($this->apiClient);
        }

        return $this->trends;
    }
}
