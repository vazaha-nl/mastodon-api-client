<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\GetRequest;
use Vazaha\Mastodon\Requests\Concerns\HasEmptyResponse;
use Vazaha\Mastodon\Requests\Concerns\ResolvesScope;

/**
 * @see https://docs.joinmastodon.org/methods/oauth/#authorize
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\Result>
 */
final class AuthorizeRequest extends Request implements RequestInterface
{
    use ResolvesScope;
    use GetRequest;
    use HasEmptyResponse;

    /**
     * @param null|array<int, string|\Vazaha\Mastodon\Enums\Scope>|string $scope
     */
    public function __construct(
        protected string $clientId,
        protected string $redirectUri,
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
}
