<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Interfaces\RequestInterface;
use Vazaha\Mastodon\Requests\Concerns\PostRequest;
use Vazaha\Mastodon\Requests\Concerns\RequestsOAuthTokens;

/**
 * @see https://docs.joinmastodon.org/methods/oauth/#token
 *
 * @implements \Vazaha\Mastodon\Interfaces\RequestInterface<\Vazaha\Mastodon\Results\OAuthTokenResult>
 */
final class CreateOAuthTokenRequest extends Request implements RequestInterface
{
    use PostRequest;
    use RequestsOAuthTokens;

    public function __construct(
        protected string $clientId,
        protected string $clientSecret,
        protected ?string $redirectUri,
        protected ?string $code = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/oauth/token';
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getFormParams(): array
    {
        return array_filter([
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'redirect_uri' => $this->redirectUri,
            'grant_type' => $this->getGrantType(),
            'code' => $this->code,
        ]);
    }

    protected function getGrantType(): string
    {
        if (isset($this->code)) {
            return 'authorization_code';
        }

        return 'client_credentials';
    }
}
