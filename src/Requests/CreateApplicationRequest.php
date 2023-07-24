<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\Scope;
use Vazaha\Mastodon\Requests\Concerns\CreatesApplicationModels;
use Vazaha\Mastodon\Requests\Concerns\PostRequest;
use Vazaha\Mastodon\Requests\Concerns\ResolvesScope;

final class CreateApplicationRequest extends Request
{
    use CreatesApplicationModels;
    use ResolvesScope;
    use PostRequest;

    /**
     * @param array<int, string|\Vazaha\Mastodon\Enums\Scope>|string|\Vazaha\Mastodon\Enums\Scope $scopes
     */
    public function __construct(
        protected string $clientName,
        protected string $redirectUris = 'urn:ietf:wg:oauth:2.0:oob',
        protected null|array|Scope|string $scopes = null,
        protected ?string $website = null,
    ) {
    }

    public function getEndpoint(): string
    {
        return '/api/v1/apps';
    }

    /**
     * @return array<string, null|string>
     */
    public function getFormParams(): array
    {
        return [
            'client_name' => $this->clientName,
            'redirect_uris' => $this->redirectUris,
            'scopes' => $this->resolveScope($this->scopes),
            'website' => $this->website,
        ];
    }

    public function getQueryParams(): array
    {
        return [];
    }
}
