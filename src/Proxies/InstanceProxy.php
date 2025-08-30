<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Abstracts\Proxy;
use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\ExtendedDescriptionModel;
use Vazaha\Mastodon\Models\InstanceModel as ModelsInstanceModel;
use Vazaha\Mastodon\Models\PrivacyPolicyModel;
use Vazaha\Mastodon\Models\TermsOfServiceModel;
use Vazaha\Mastodon\Models\V1\InstanceModel;
use Vazaha\Mastodon\Requests\Instance\ActivityRequest;
use Vazaha\Mastodon\Requests\Instance\DomainBlocksRequest;
use Vazaha\Mastodon\Requests\Instance\ExtendedDescriptionRequest;
use Vazaha\Mastodon\Requests\Instance\PeersRequest;
use Vazaha\Mastodon\Requests\Instance\PrivacyPolicyRequest;
use Vazaha\Mastodon\Requests\Instance\RulesRequest;
use Vazaha\Mastodon\Requests\Instance\TermsOfServiceDateRequest;
use Vazaha\Mastodon\Requests\Instance\TermsOfServiceRequest;
use Vazaha\Mastodon\Requests\Instance\TranslationLanguagesRequest;
use Vazaha\Mastodon\Requests\Instance\V1Request;
use Vazaha\Mastodon\Requests\Instance\V2Request;
use Vazaha\Mastodon\Results\DomainBlockResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\RuleResult;

class InstanceProxy extends Proxy
{
    /**
     * Weekly activity.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/instance/#activity
     */
    public function activity(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new ActivityRequest(
            ));

        return $models;
    }

    /**
     * View moderated servers.
     *
     * @return \Vazaha\Mastodon\Results\DomainBlockResult<array-key, \Vazaha\Mastodon\Models\DomainBlockModel>
     *
     * @see https://docs.joinmastodon.org/methods/instance/#domain_blocks
     */
    public function domainBlocks(
    ): DomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\DomainBlockResult<array-key, \Vazaha\Mastodon\Models\DomainBlockModel> */
        $models = $this->apiClient
            ->send(new DomainBlocksRequest(
            ));

        return $models;
    }

    /**
     * View extended description.
     *
     * @see https://docs.joinmastodon.org/methods/instance/#extended_description
     */
    public function extendedDescription(
    ): ExtendedDescriptionModel {
        $result = $this->apiClient->send(new ExtendedDescriptionRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\ExtendedDescriptionModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List of connected domains.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/instance/#peers
     */
    public function peers(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new PeersRequest(
            ));

        return $models;
    }

    /**
     * View privacy policy.
     *
     * @see https://docs.joinmastodon.org/methods/instance/#privacy_policy
     */
    public function privacyPolicy(
    ): PrivacyPolicyModel {
        $result = $this->apiClient->send(new PrivacyPolicyRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\PrivacyPolicyModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * List of rules.
     *
     * @return \Vazaha\Mastodon\Results\RuleResult<array-key, \Vazaha\Mastodon\Models\RuleModel>
     *
     * @see https://docs.joinmastodon.org/methods/instance/#rules
     */
    public function rules(
    ): RuleResult {
        /** @var \Vazaha\Mastodon\Results\RuleResult<array-key, \Vazaha\Mastodon\Models\RuleModel> */
        $models = $this->apiClient
            ->send(new RulesRequest(
            ));

        return $models;
    }

    /**
     * View terms of service.
     *
     * @see https://docs.joinmastodon.org/methods/instance/#terms_of_service
     */
    public function termsOfService(
    ): TermsOfServiceModel {
        $result = $this->apiClient->send(new TermsOfServiceRequest(
        ));

        /** @var null|\Vazaha\Mastodon\Models\TermsOfServiceModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View a specific version of the terms of service.
     *
     * @param string $date the effective date of the terms of service
     *
     * @see https://docs.joinmastodon.org/methods/instance/#terms_of_service_date
     */
    public function termsOfServiceDate(
        string $date,
    ): TermsOfServiceModel {
        $result = $this->apiClient->send(new TermsOfServiceDateRequest(
            $date,
        ));

        /** @var null|\Vazaha\Mastodon\Models\TermsOfServiceModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View translation languages.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     *
     * @see https://docs.joinmastodon.org/methods/instance/#translation_languages
     */
    public function translationLanguages(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key, \Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new TranslationLanguagesRequest(
            ));

        return $models;
    }

    /**
     * View server information (v1).
     *
     * @see https://docs.joinmastodon.org/methods/instance/#v1
     *
     * @deprecated
     */
    public function v1(
    ): InstanceModel {
        $result = $this->apiClient->send(new V1Request(
        ));

        /** @var null|\Vazaha\Mastodon\Models\V1\InstanceModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View server information.
     *
     * @see https://docs.joinmastodon.org/methods/instance/#v2
     */
    public function v2(
    ): ModelsInstanceModel {
        $result = $this->apiClient->send(new V2Request(
        ));

        /** @var null|\Vazaha\Mastodon\Models\InstanceModel $model */
        $model = $result->first();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }
}
