<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\ApiClient;

class MethodsProxy extends Proxy
{
    public PushProxy $push;

    public DomainBlocksProxy $domainBlocks;

    public MediaProxy $media;

    public TrendsProxy $trends;

    public AnnouncementsProxy $announcements;

    public SearchProxy $search;

    public CustomEmojisProxy $customEmojis;

    public OembedProxy $oembed;

    public MutesProxy $mutes;

    public FollowRequestsProxy $followRequests;

    public ConversationsProxy $conversations;

    public InstanceProxy $instance;

    public ReportsProxy $reports;

    public EmailsProxy $emails;

    public FollowedTagsProxy $followedTags;

    public BlocksProxy $blocks;

    public EndorsementsProxy $endorsements;

    public DirectoryProxy $directory;

    public BookmarksProxy $bookmarks;

    public TimelinesProxy $timelines;

    public ProofsProxy $proofs;

    public StatusesProxy $statuses;

    public OauthProxy $oauth;

    public PollsProxy $polls;

    public ListsProxy $lists;

    public FavouritesProxy $favourites;

    public NotificationsProxy $notifications;

    public FiltersProxy $filters;

    public SuggestionsProxy $suggestions;

    public StreamingProxy $streaming;

    public TagsProxy $tags;

    public AppsProxy $apps;

    public PreferencesProxy $preferences;

    public MarkersProxy $markers;

    public AccountsProxy $accounts;

    public FeaturedTagsProxy $featuredTags;

    public ScheduledStatusesProxy $scheduledStatuses;

    public function __construct(
        public ApiClient $apiClient,
    ) {
        $this->push = new PushProxy($apiClient);
        $this->domainBlocks = new DomainBlocksProxy($apiClient);
        $this->media = new MediaProxy($apiClient);
        $this->trends = new TrendsProxy($apiClient);
        $this->announcements = new AnnouncementsProxy($apiClient);
        $this->search = new SearchProxy($apiClient);
        $this->customEmojis = new CustomEmojisProxy($apiClient);
        $this->oembed = new OembedProxy($apiClient);
        $this->mutes = new MutesProxy($apiClient);
        $this->followRequests = new FollowRequestsProxy($apiClient);
        $this->conversations = new ConversationsProxy($apiClient);
        $this->instance = new InstanceProxy($apiClient);
        $this->reports = new ReportsProxy($apiClient);
        $this->emails = new EmailsProxy($apiClient);
        $this->followedTags = new FollowedTagsProxy($apiClient);
        $this->blocks = new BlocksProxy($apiClient);
        $this->endorsements = new EndorsementsProxy($apiClient);
        $this->directory = new DirectoryProxy($apiClient);
        $this->bookmarks = new BookmarksProxy($apiClient);
        $this->timelines = new TimelinesProxy($apiClient);
        $this->proofs = new ProofsProxy($apiClient);
        $this->statuses = new StatusesProxy($apiClient);
        $this->oauth = new OauthProxy($apiClient);
        $this->polls = new PollsProxy($apiClient);
        $this->lists = new ListsProxy($apiClient);
        $this->favourites = new FavouritesProxy($apiClient);
        $this->notifications = new NotificationsProxy($apiClient);
        $this->filters = new FiltersProxy($apiClient);
        $this->suggestions = new SuggestionsProxy($apiClient);
        $this->streaming = new StreamingProxy($apiClient);
        $this->tags = new TagsProxy($apiClient);
        $this->apps = new AppsProxy($apiClient);
        $this->preferences = new PreferencesProxy($apiClient);
        $this->markers = new MarkersProxy($apiClient);
        $this->accounts = new AccountsProxy($apiClient);
        $this->featuredTags = new FeaturedTagsProxy($apiClient);
        $this->scheduledStatuses = new ScheduledStatusesProxy($apiClient);
    }
}
