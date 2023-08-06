<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\ApiClient;

class MethodsProxy extends Proxy
{
    protected AccountsProxy $accounts;

    protected AdminProxy $admin;

    protected AnnouncementsProxy $announcements;

    protected AppsProxy $apps;

    protected BlocksProxy $blocks;

    protected BookmarksProxy $bookmarks;

    protected ConversationsProxy $conversations;

    protected CustomEmojisProxy $customEmojis;

    protected DirectoryProxy $directory;

    protected DomainBlocksProxy $domainBlocks;

    protected EmailsProxy $emails;

    protected EndorsementsProxy $endorsements;

    protected FavouritesProxy $favourites;

    protected FeaturedTagsProxy $featuredTags;

    protected FiltersProxy $filters;

    protected FollowRequestsProxy $followRequests;

    protected FollowedTagsProxy $followedTags;

    protected InstanceProxy $instance;

    protected ListsProxy $lists;

    protected MarkersProxy $markers;

    protected MediaProxy $media;

    protected MutesProxy $mutes;

    protected NotificationsProxy $notifications;

    protected OauthProxy $oauth;

    protected OembedProxy $oembed;

    protected PollsProxy $polls;

    protected PreferencesProxy $preferences;

    protected ProofsProxy $proofs;

    protected PushProxy $push;

    protected ReportsProxy $reports;

    protected ScheduledStatusesProxy $scheduledStatuses;

    protected SearchProxy $search;

    protected StatusesProxy $statuses;

    protected StreamingProxy $streaming;

    protected SuggestionsProxy $suggestions;

    protected TagsProxy $tags;

    protected TimelinesProxy $timelines;

    protected TrendsProxy $trends;

    public function __construct(
        public ApiClient $apiClient,
    ) {
    }

    /**
     * Methods concerning accounts and profiles.
     */
    public function accounts(): AccountsProxy
    {
        if (!isset($this->accounts)) {
            $this->accounts = new AccountsProxy($this->apiClient);
        }

        return $this->accounts;
    }

    public function admin(): AdminProxy
    {
        if (!isset($this->admin)) {
            $this->admin = new AdminProxy($this->apiClient);
        }

        return $this->admin;
    }

    /**
     * For announcements set by administration.
     */
    public function announcements(): AnnouncementsProxy
    {
        if (!isset($this->announcements)) {
            $this->announcements = new AnnouncementsProxy($this->apiClient);
        }

        return $this->announcements;
    }

    /**
     * Register client applications that can be used to obtain OAuth tokens.
     */
    public function apps(): AppsProxy
    {
        if (!isset($this->apps)) {
            $this->apps = new AppsProxy($this->apiClient);
        }

        return $this->apps;
    }

    /**
     * View your blocks. See also accounts/:id/{block,unblock}.
     */
    public function blocks(): BlocksProxy
    {
        if (!isset($this->blocks)) {
            $this->blocks = new BlocksProxy($this->apiClient);
        }

        return $this->blocks;
    }

    /**
     * View your bookmarks. See also statuses/:id/{bookmark,unbookmark}.
     */
    public function bookmarks(): BookmarksProxy
    {
        if (!isset($this->bookmarks)) {
            $this->bookmarks = new BookmarksProxy($this->apiClient);
        }

        return $this->bookmarks;
    }

    /**
     *  Direct conversations with other participants. (Currently, just threads containing a post with "direct" visibility.).
     */
    public function conversations(): ConversationsProxy
    {
        if (!isset($this->conversations)) {
            $this->conversations = new ConversationsProxy($this->apiClient);
        }

        return $this->conversations;
    }

    /**
     *  Each site can define and upload its own custom emoji to be attached to profiles or statuses.
     */
    public function customEmojis(): CustomEmojisProxy
    {
        if (!isset($this->customEmojis)) {
            $this->customEmojis = new CustomEmojisProxy($this->apiClient);
        }

        return $this->customEmojis;
    }

    /**
     * A directory of profiles that your website is aware of.
     */
    public function directory(): DirectoryProxy
    {
        if (!isset($this->directory)) {
            $this->directory = new DirectoryProxy($this->apiClient);
        }

        return $this->directory;
    }

    /**
     * Manage a user's blocked domains.
     */
    public function domainBlocks(): DomainBlocksProxy
    {
        if (!isset($this->domainBlocks)) {
            $this->domainBlocks = new DomainBlocksProxy($this->apiClient);
        }

        return $this->domainBlocks;
    }

    /**
     * Request a new confirmation email, potentially to a new email address.
     */
    public function emails(): EmailsProxy
    {
        if (!isset($this->emails)) {
            $this->emails = new EmailsProxy($this->apiClient);
        }

        return $this->emails;
    }

    /**
     * Feature other profiles on your own profile. See also accounts/:id/{pin,unpin}.
     */
    public function endorsements(): EndorsementsProxy
    {
        if (!isset($this->endorsements)) {
            $this->endorsements = new EndorsementsProxy($this->apiClient);
        }

        return $this->endorsements;
    }

    /**
     * View your favourites. See also statuses/:id/{favourite,unfavourite}.
     */
    public function favourites(): FavouritesProxy
    {
        if (!isset($this->favourites)) {
            $this->favourites = new FavouritesProxy($this->apiClient);
        }

        return $this->favourites;
    }

    /**
     * Feature tags that you use frequently on your profile.
     */
    public function featuredTags(): FeaturedTagsProxy
    {
        if (!isset($this->featuredTags)) {
            $this->featuredTags = new FeaturedTagsProxy($this->apiClient);
        }

        return $this->featuredTags;
    }

    /**
     * Create and manage filters.
     */
    public function filters(): FiltersProxy
    {
        if (!isset($this->filters)) {
            $this->filters = new FiltersProxy($this->apiClient);
        }

        return $this->filters;
    }

    /**
     * View and manage follow requests.
     */
    public function followRequests(): FollowRequestsProxy
    {
        if (!isset($this->followRequests)) {
            $this->followRequests = new FollowRequestsProxy($this->apiClient);
        }

        return $this->followRequests;
    }

    /**
     * View your followed hashtags.
     */
    public function followedTags(): FollowedTagsProxy
    {
        if (!isset($this->followedTags)) {
            $this->followedTags = new FollowedTagsProxy($this->apiClient);
        }

        return $this->followedTags;
    }

    /**
     * Discover information about a Mastodon website.
     */
    public function instance(): InstanceProxy
    {
        if (!isset($this->instance)) {
            $this->instance = new InstanceProxy($this->apiClient);
        }

        return $this->instance;
    }

    /**
     *  View and manage lists. See also: /api/v1/timelines/list/id for loading a list timeline.
     */
    public function lists(): ListsProxy
    {
        if (!isset($this->lists)) {
            $this->lists = new ListsProxy($this->apiClient);
        }

        return $this->lists;
    }

    /**
     * Save and restore your position in timelines.
     */
    public function markers(): MarkersProxy
    {
        if (!isset($this->markers)) {
            $this->markers = new MarkersProxy($this->apiClient);
        }

        return $this->markers;
    }

    /**
     *  Attach media to authored statuses. See Using Mastodon > Posting toots > Attachments for more information about size and format limits.
     */
    public function media(): MediaProxy
    {
        if (!isset($this->media)) {
            $this->media = new MediaProxy($this->apiClient);
        }

        return $this->media;
    }

    /**
     * View your mutes. See also accounts/:id/{mute,unmute}.
     */
    public function mutes(): MutesProxy
    {
        if (!isset($this->mutes)) {
            $this->mutes = new MutesProxy($this->apiClient);
        }

        return $this->mutes;
    }

    /**
     * Receive notifications for activity on your account or statuses.
     */
    public function notifications(): NotificationsProxy
    {
        if (!isset($this->notifications)) {
            $this->notifications = new NotificationsProxy($this->apiClient);
        }

        return $this->notifications;
    }

    /**
     * Generate and manage OAuth tokens.
     */
    public function oauth(): OauthProxy
    {
        if (!isset($this->oauth)) {
            $this->oauth = new OauthProxy($this->apiClient);
        }

        return $this->oauth;
    }

    /**
     * For generating OEmbed previews.
     */
    public function oembed(): OembedProxy
    {
        if (!isset($this->oembed)) {
            $this->oembed = new OembedProxy($this->apiClient);
        }

        return $this->oembed;
    }

    /**
     *  View and vote on polls attached to statuses. To discover poll ID, you will need to GET a Status first and then check for a `poll` property.
     */
    public function polls(): PollsProxy
    {
        if (!isset($this->polls)) {
            $this->polls = new PollsProxy($this->apiClient);
        }

        return $this->polls;
    }

    /**
     * Preferred common behaviors to be shared across clients.
     */
    public function preferences(): PreferencesProxy
    {
        if (!isset($this->preferences)) {
            $this->preferences = new PreferencesProxy($this->apiClient);
        }

        return $this->preferences;
    }

    /**
     * For use by identity providers.
     */
    public function proofs(): ProofsProxy
    {
        if (!isset($this->proofs)) {
            $this->proofs = new ProofsProxy($this->apiClient);
        }

        return $this->proofs;
    }

    /**
     *  Subscribe to and receive push notifications when a server-side notification is received, via the Web Push API.
     */
    public function push(): PushProxy
    {
        if (!isset($this->push)) {
            $this->push = new PushProxy($this->apiClient);
        }

        return $this->push;
    }

    /**
     * Report problematic users to your moderators.
     */
    public function reports(): ReportsProxy
    {
        if (!isset($this->reports)) {
            $this->reports = new ReportsProxy($this->apiClient);
        }

        return $this->reports;
    }

    /**
     * Manage statuses that were scheduled to be published at a future date.
     */
    public function scheduledStatuses(): ScheduledStatusesProxy
    {
        if (!isset($this->scheduledStatuses)) {
            $this->scheduledStatuses = new ScheduledStatusesProxy($this->apiClient);
        }

        return $this->scheduledStatuses;
    }

    /**
     * Search for content in accounts, statuses and hashtags.
     */
    public function search(): SearchProxy
    {
        if (!isset($this->search)) {
            $this->search = new SearchProxy($this->apiClient);
        }

        return $this->search;
    }

    /**
     * Publish, interact, and view information about statuses.
     */
    public function statuses(): StatusesProxy
    {
        if (!isset($this->statuses)) {
            $this->statuses = new StatusesProxy($this->apiClient);
        }

        return $this->statuses;
    }

    /**
     *  Subscribe to server-sent events for real-time updates via a long-lived HTTP connection or via WebSocket.
     */
    public function streaming(): StreamingProxy
    {
        if (!isset($this->streaming)) {
            $this->streaming = new StreamingProxy($this->apiClient);
        }

        return $this->streaming;
    }

    /**
     *  Server-generated suggestions on who to follow, based on previous positive interactions.
     */
    public function suggestions(): SuggestionsProxy
    {
        if (!isset($this->suggestions)) {
            $this->suggestions = new SuggestionsProxy($this->apiClient);
        }

        return $this->suggestions;
    }

    /**
     * View information about or follow/unfollow hashtags.
     */
    public function tags(): TagsProxy
    {
        if (!isset($this->tags)) {
            $this->tags = new TagsProxy($this->apiClient);
        }

        return $this->tags;
    }

    /**
     * Read and view timelines of statuses.
     */
    public function timelines(): TimelinesProxy
    {
        if (!isset($this->timelines)) {
            $this->timelines = new TimelinesProxy($this->apiClient);
        }

        return $this->timelines;
    }

    /**
     * View hashtags that are currently being used more frequently than usual.
     */
    public function trends(): TrendsProxy
    {
        if (!isset($this->trends)) {
            $this->trends = new TrendsProxy($this->apiClient);
        }

        return $this->trends;
    }
}
