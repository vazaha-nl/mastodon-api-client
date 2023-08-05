<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Vazaha\Mastodon\Proxies;

use Vazaha\Mastodon\Exceptions\InvalidResponseException;
use Vazaha\Mastodon\Models\InstanceModel as ModelsInstanceModel;
use Vazaha\Mastodon\Requests\Instance\ActivityRequest;
use Vazaha\Mastodon\Requests\Instance\DomainBlocksRequest;
use Vazaha\Mastodon\Requests\Instance\ExtendedDescriptionRequest;
use Vazaha\Mastodon\Requests\Instance\PeersRequest;
use Vazaha\Mastodon\Requests\Instance\RulesRequest;
use Vazaha\Mastodon\Requests\Instance\V1Request;
use Vazaha\Mastodon\Requests\Instance\V2Request;
use Vazaha\Mastodon\Results\DomainBlockResult;
use Vazaha\Mastodon\Results\EmptyOrUnknownResult;
use Vazaha\Mastodon\Results\ExtendedDescriptionResult;
use Vazaha\Mastodon\Results\RuleResult;
use Vazaha\Mastodon\Results\V1\InstanceResult;

class InstanceProxy extends Proxy
{
    /**
     * (DEPRECATED) View server information (V1).
     *
     * @return \Vazaha\Mastodon\Results\V1\InstanceResult<array-key,\Vazaha\Mastodon\Models\V1\InstanceModel>
     */
    public function v1(
    ): InstanceResult {
        /** @var \Vazaha\Mastodon\Results\V1\InstanceResult<array-key,\Vazaha\Mastodon\Models\V1\InstanceModel> */
        $models = $this->apiClient
            ->send(new V1Request(
            ));

        return $models;
    }

    /**
     * View extended description.
     *
     * @return \Vazaha\Mastodon\Results\ExtendedDescriptionResult<array-key,\Vazaha\Mastodon\Models\ExtendedDescriptionModel>
     */
    public function extendedDescription(
    ): ExtendedDescriptionResult {
        /** @var \Vazaha\Mastodon\Results\ExtendedDescriptionResult<array-key,\Vazaha\Mastodon\Models\ExtendedDescriptionModel> */
        $models = $this->apiClient
            ->send(new ExtendedDescriptionRequest(
            ));

        return $models;
    }

    /**
     * View server information.
     */
    public function v2(
    ): ModelsInstanceModel {
        $result = $this->apiClient->send(new V2Request(
        ));

        /** @var null|\Vazaha\Mastodon\Models\InstanceModel $model */
        $model = $result->getModel();

        if ($model === null) {
            throw new InvalidResponseException();
        }

        return $model;
    }

    /**
     * View moderated servers.
     *
     * @return \Vazaha\Mastodon\Results\DomainBlockResult<array-key,\Vazaha\Mastodon\Models\DomainBlockModel>
     */
    public function domainBlocks(
    ): DomainBlockResult {
        /** @var \Vazaha\Mastodon\Results\DomainBlockResult<array-key,\Vazaha\Mastodon\Models\DomainBlockModel> */
        $models = $this->apiClient
            ->send(new DomainBlocksRequest(
            ));

        return $models;
    }

    /**
     * Weekly activity.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function activity(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new ActivityRequest(
            ));

        return $models;
    }

    /**
     * List of connected domains.
     *
     * @return \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel>
     */
    public function peers(
    ): EmptyOrUnknownResult {
        /** @var \Vazaha\Mastodon\Results\EmptyOrUnknownResult<array-key,\Vazaha\Mastodon\Models\EmptyOrUnknownModel> */
        $models = $this->apiClient
            ->send(new PeersRequest(
            ));

        return $models;
    }

    /**
     * List of rules.
     *
     * @return \Vazaha\Mastodon\Results\RuleResult<array-key,\Vazaha\Mastodon\Models\RuleModel>
     */
    public function rules(
    ): RuleResult {
        /** @var \Vazaha\Mastodon\Results\RuleResult<array-key,\Vazaha\Mastodon\Models\RuleModel> */
        $models = $this->apiClient
            ->send(new RulesRequest(
            ));

        return $models;
    }
}
