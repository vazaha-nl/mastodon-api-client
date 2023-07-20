<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Models\EmptyResponse;

class AuthorizeRequest extends Request
{
    public function __construct(
        protected string $clientId,
        protected string $redirectUri,
        protected string $scope,
        protected bool $forceLogin,
        protected string $lang,
    ) {
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::GET;
    }

    public function getEndpoint(): string
    {
        return '/oauth/authorize';
    }

    /**
     * @return array<string, string>
     */
    public function getQueryParams(): array
    {
        return [
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'scope' => $this->scope,
            'force_login' => (string) $this->forceLogin,
            'lang' => $this->lang,
        ];
    }

    public function getFormParams(): array
    {
        return [];
    }

    public function createModel(): ModelContract
    {
        return new EmptyResponse();
    }
}
