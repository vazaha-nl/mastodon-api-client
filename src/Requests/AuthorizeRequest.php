<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Models\Contracts\ModelContract;
use Vazaha\Mastodon\Models\EmptyResponse;
use Vazaha\Mastodon\Requests\Concerns\ResolvesScope;

class AuthorizeRequest extends GetRequest
{
    use ResolvesScope;

    /**
     * @param array<int, string|\Vazaha\Mastodon\Enums\Scope>|string $scope
     */
    public function __construct(
        protected string $clientId,
        protected string $redirectUri = 'urn:ietf:wg:oauth:2.0:oob',
        protected null|array|string $scope = null,
        protected ?bool $forceLogin = null,
        protected ?string $lang = null,
    ) {
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
        return array_filter([
            'response_type' => 'code',
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'scope' => $this->resolveScope($this->scope),
            'force_login' => (string) $this->forceLogin,
            'lang' => $this->lang,
        ], static fn ($val) => null !== $val);
    }

    public function createModel(): ModelContract
    {
        return new EmptyResponse();
    }
}
