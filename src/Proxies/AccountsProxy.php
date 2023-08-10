<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Helpers\UploadFile;
use Vazaha\Mastodon\Models\AccountModel;
use Vazaha\Mastodon\Models\CredentialAccountModel;
use Vazaha\Mastodon\Models\RelationshipModel;
use Vazaha\Mastodon\Models\TokenModel;
use Vazaha\Mastodon\Requests\Accounts\BlockRequest;
use Vazaha\Mastodon\Requests\Accounts\CreateRequest;
use Vazaha\Mastodon\Requests\Accounts\FamiliarFollowersRequest;
use Vazaha\Mastodon\Requests\Accounts\FeaturedTagsRequest;
use Vazaha\Mastodon\Requests\Accounts\FollowersRequest;
use Vazaha\Mastodon\Requests\Accounts\FollowingRequest;
use Vazaha\Mastodon\Requests\Accounts\FollowRequest;
use Vazaha\Mastodon\Requests\Accounts\GetRequest;
use Vazaha\Mastodon\Requests\Accounts\IdentityProofsRequest;
use Vazaha\Mastodon\Requests\Accounts\ListsRequest;
use Vazaha\Mastodon\Requests\Accounts\LookupRequest;
use Vazaha\Mastodon\Requests\Accounts\MuteRequest;
use Vazaha\Mastodon\Requests\Accounts\NoteRequest;
use Vazaha\Mastodon\Requests\Accounts\PinRequest;
use Vazaha\Mastodon\Requests\Accounts\RelationshipsRequest;
use Vazaha\Mastodon\Requests\Accounts\RemoveFromFollowersRequest;
use Vazaha\Mastodon\Requests\Accounts\SearchRequest;
use Vazaha\Mastodon\Requests\Accounts\StatusesRequest;
use Vazaha\Mastodon\Requests\Accounts\UnblockRequest;
use Vazaha\Mastodon\Requests\Accounts\UnfollowRequest;
use Vazaha\Mastodon\Requests\Accounts\UnmuteRequest;
use Vazaha\Mastodon\Requests\Accounts\UnpinRequest;
use Vazaha\Mastodon\Requests\Accounts\UpdateCredentialsRequest;
use Vazaha\Mastodon\Requests\Accounts\VerifyCredentialsRequest;
use Vazaha\Mastodon\Results\AccountResult;
use Vazaha\Mastodon\Results\FamiliarFollowersResult;
use Vazaha\Mastodon\Results\FeaturedTagResult;
use Vazaha\Mastodon\Results\IdentityProofResult;
use Vazaha\Mastodon\Results\ListResult;
use Vazaha\Mastodon\Results\RelationshipResult;
use Vazaha\Mastodon\Results\StatusResult;

class AccountsProxy extends Proxy
{
    /**
     * Block account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#block
     */
    public function block(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new BlockRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Register an account.
     *
     * @param string  $username  The desired username for the account
     * @param string  $email     The email address to be used for login
     * @param string  $password  The password to be used for login
     * @param bool    $agreement Whether the user agrees to the local rules, terms, and policies. These should be presented to the user in order to allow them to consent before setting this parameter to TRUE.
     * @param string  $locale    the language of the confirmation email that will be sent
     * @param ?string $reason    if registrations require manual approval, this text will be reviewed by moderators
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#create
     */
    public function create(
        string $username,
        string $email,
        string $password,
        bool $agreement,
        string $locale,
        ?string $reason = null,
    ): TokenModel {
        $result = $this->apiClient->send(new CreateRequest(
            $username,
            $email,
            $password,
            $agreement,
            $locale,
            $reason,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TokenModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Find familiar followers.
     *
     * @param null|array<string> $id find familiar followers for the provided account IDs
     *
     * @return \Vazaha\Mastodon\Results\FamiliarFollowersResult<array-key,\Vazaha\Mastodon\Models\FamiliarFollowersModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#familiar_followers
     */
    public function familiarFollowers(
        ?array $id = null,
    ): FamiliarFollowersResult {
        /** @var \Vazaha\Mastodon\Results\FamiliarFollowersResult<array-key,\Vazaha\Mastodon\Models\FamiliarFollowersModel> */
        $models = $this->apiClient
            ->send(new FamiliarFollowersRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Get account's featured tags.
     *
     * @param string $id the ID of the Account in the database
     *
     * @return \Vazaha\Mastodon\Results\FeaturedTagResult<array-key,\Vazaha\Mastodon\Models\FeaturedTagModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#featured_tags
     */
    public function featuredTags(
        string $id,
    ): FeaturedTagResult {
        /** @var \Vazaha\Mastodon\Results\FeaturedTagResult<array-key,\Vazaha\Mastodon\Models\FeaturedTagModel> */
        $models = $this->apiClient
            ->send(new FeaturedTagsRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Follow account.
     *
     * @param string             $id        the ID of the Account in the database
     * @param ?bool              $reblogs   receive this account's reblogs in home timeline? Defaults to true
     * @param ?bool              $notify    receive notifications when this account posts a status? Defaults to false
     * @param null|array<string> $languages Filter received statuses for these languages. If not provided, you will receive this account's posts in all languages.
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#follow
     */
    public function follow(
        string $id,
        ?bool $reblogs = null,
        ?bool $notify = null,
        ?array $languages = null,
    ): RelationshipModel {
        $result = $this->apiClient->send(new FollowRequest(
            $id,
            $reblogs,
            $notify,
            $languages,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Get account's followers.
     *
     * @param string $id    the ID of the Account in the database
     * @param ?int   $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#followers
     */
    public function followers(
        string $id,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new FollowersRequest(
                $id,
                $limit,
            ));

        return $models;
    }

    /**
     * Get account's following.
     *
     * @param string $id    the ID of the Account in the database
     * @param ?int   $limit Maximum number of results to return. Defaults to 40 accounts. Max 80 accounts.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#following
     */
    public function following(
        string $id,
        ?int $limit = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new FollowingRequest(
                $id,
                $limit,
            ));

        return $models;
    }

    /**
     * Get account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#get
     */
    public function get(
        string $id,
    ): AccountModel {
        $result = $this->apiClient->send(new GetRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * (DEPRECATED) Identity proofs.
     *
     * @param string $id the ID of the Account in the database
     *
     * @return \Vazaha\Mastodon\Results\IdentityProofResult<array-key,\Vazaha\Mastodon\Models\IdentityProofModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#identity_proofs
     */
    public function identityProofs(
        string $id,
    ): IdentityProofResult {
        /** @var \Vazaha\Mastodon\Results\IdentityProofResult<array-key,\Vazaha\Mastodon\Models\IdentityProofModel> */
        $models = $this->apiClient
            ->send(new IdentityProofsRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Get lists containing this account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @return \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#lists
     */
    public function lists(
        string $id,
    ): ListResult {
        /** @var \Vazaha\Mastodon\Results\ListResult<array-key,\Vazaha\Mastodon\Models\ListModel> */
        $models = $this->apiClient
            ->send(new ListsRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Lookup account ID from Webfinger address.
     *
     * @param string $acct the username or Webfinger address to lookup
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#lookup
     */
    public function lookup(
        string $acct,
    ): AccountModel {
        $result = $this->apiClient->send(new LookupRequest(
            $acct,
        ));

        /** @var null|\Vazaha\Mastodon\Models\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Mute account.
     *
     * @param string $id            the ID of the Account in the database
     * @param ?bool  $notifications mute notifications in addition to statuses? Defaults to true
     * @param ?int   $duration      How long the mute should last, in seconds. Defaults to 0 (indefinite).
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#mute
     */
    public function mute(
        string $id,
        ?bool $notifications = null,
        ?int $duration = null,
    ): RelationshipModel {
        $result = $this->apiClient->send(new MuteRequest(
            $id,
            $notifications,
            $duration,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Set private note on profile.
     *
     * @param string  $id      the ID of the Account in the database
     * @param ?string $comment The comment to be set on that user. Provide an empty string or leave out this parameter to clear the currently set note.
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#note
     */
    public function note(
        string $id,
        ?string $comment = null,
    ): RelationshipModel {
        $result = $this->apiClient->send(new NoteRequest(
            $id,
            $comment,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Feature account on your profile.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#pin
     */
    public function pin(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new PinRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Check relationships to other accounts.
     *
     * @param null|mixed[] $id check relationships for the provided account IDs
     *
     * @return \Vazaha\Mastodon\Results\RelationshipResult<array-key,\Vazaha\Mastodon\Models\RelationshipModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#relationships
     */
    public function relationships(
        ?array $id = null,
    ): RelationshipResult {
        /** @var \Vazaha\Mastodon\Results\RelationshipResult<array-key,\Vazaha\Mastodon\Models\RelationshipModel> */
        $models = $this->apiClient
            ->send(new RelationshipsRequest(
                $id,
            ));

        return $models;
    }

    /**
     * Remove account from followers.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#remove_from_followers
     */
    public function removeFromFollowers(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new RemoveFromFollowersRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Search for matching accounts.
     *
     * @param string $q         search query for accounts
     * @param ?int   $limit     Maximum number of results. Defaults to 40 accounts. Max 80 accounts.
     * @param ?int   $offset    skip the first n results
     * @param ?bool  $resolve   Attempt WebFinger lookup. Defaults to false. Use this when `q` is an exact address.
     * @param ?bool  $following Limit the search to users you are following. Defaults to false.
     *
     * @return \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#search
     */
    public function search(
        string $q,
        ?int $limit = null,
        ?int $offset = null,
        ?bool $resolve = null,
        ?bool $following = null,
    ): AccountResult {
        /** @var \Vazaha\Mastodon\Results\AccountResult<array-key,\Vazaha\Mastodon\Models\AccountModel> */
        $models = $this->apiClient
            ->send(new SearchRequest(
                $q,
                $limit,
                $offset,
                $resolve,
                $following,
            ));

        return $models;
    }

    /**
     * Get account's statuses.
     *
     * @param string  $id              the ID of the Account in the database
     * @param ?string $max_id          Return results older than this ID
     * @param ?string $since_id        Return results newer than this ID
     * @param ?string $min_id          Return results immediately newer than this ID
     * @param ?int    $limit           Maximum number of results to return. Defaults to 20 statuses. Max 40 statuses.
     * @param ?bool   $only_media      filter out statuses without attachments
     * @param ?bool   $exclude_replies filter out statuses in reply to a different account
     * @param ?bool   $exclude_reblogs filter out boosts from the response
     * @param ?bool   $pinned          Filter for pinned statuses only. Defaults to false, which includes all statuses. Pinned statuses do not receive special priority in the order of the returned results.
     * @param ?string $tagged          filter for statuses using a specific hashtag
     *
     * @return \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel>
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#statuses
     */
    public function statuses(
        string $id,
        ?string $max_id = null,
        ?string $since_id = null,
        ?string $min_id = null,
        ?int $limit = null,
        ?bool $only_media = null,
        ?bool $exclude_replies = null,
        ?bool $exclude_reblogs = null,
        ?bool $pinned = null,
        ?string $tagged = null,
    ): StatusResult {
        /** @var \Vazaha\Mastodon\Results\StatusResult<array-key,\Vazaha\Mastodon\Models\StatusModel> */
        $models = $this->apiClient
            ->send(new StatusesRequest(
                $id,
                $max_id,
                $since_id,
                $min_id,
                $limit,
                $only_media,
                $exclude_replies,
                $exclude_reblogs,
                $pinned,
                $tagged,
            ));

        return $models;
    }

    /**
     * Unblock account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unblock
     */
    public function unblock(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new UnblockRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unfollow account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unfollow
     */
    public function unfollow(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new UnfollowRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unmute account.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unmute
     */
    public function unmute(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new UnmuteRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Unfeature account from profile.
     *
     * @param string $id the ID of the Account in the database
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#unpin
     */
    public function unpin(
        string $id,
    ): RelationshipModel {
        $result = $this->apiClient->send(new UnpinRequest(
            $id,
        ));

        /** @var null|\Vazaha\Mastodon\Models\RelationshipModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Update account credentials.
     *
     * @param ?string      $display_name      the display name to use for the profile
     * @param ?string      $note              the account bio
     * @param ?UploadFile  $avatar            Avatar image encoded using `multipart/form-data`
     * @param ?UploadFile  $header            Header image encoded using `multipart/form-data`
     * @param ?bool        $locked            whether manual approval of follow requests is required
     * @param ?bool        $bot               whether the account has a bot flag
     * @param ?bool        $discoverable      whether the account should be shown in the profile directory
     * @param null|mixed[] $fields_attributes The profile fields to be set. Inside this hash, the key is an integer cast to a string (although the exact integer does not matter), and the value is another hash including `name` and `value`. By default, max 4 fields.
     * @param null|mixed[] $source            source[privacy]: Default post privacy for authored statuses. Can be `public`, `unlisted`, or `private`.
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#update_credentials
     */
    public function updateCredentials(
        ?string $display_name = null,
        ?string $note = null,
        ?UploadFile $avatar = null,
        ?UploadFile $header = null,
        ?bool $locked = null,
        ?bool $bot = null,
        ?bool $discoverable = null,
        ?array $fields_attributes = null,
        ?array $source = null,
    ): AccountModel {
        $result = $this->apiClient->send(new UpdateCredentialsRequest(
            $display_name,
            $note,
            $avatar,
            $header,
            $locked,
            $bot,
            $discoverable,
            $fields_attributes,
            $source,
        ));

        /** @var null|\Vazaha\Mastodon\Models\AccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * Verify account credentials.
     *
     * @see https://docs.joinmastodon.org/methods/accounts/#verify_credentials
     */
    public function verifyCredentials(
    ): CredentialAccountModel {
        $result = $this->apiClient->send(new VerifyCredentialsRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\CredentialAccountModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
