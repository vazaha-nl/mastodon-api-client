<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests;

use Vazaha\Mastodon\Enums\HttpMethod;
use Vazaha\Mastodon\Requests\Concerns\CreatesApplicationModels;

final class CreateApplicationRequest extends Request
{
    use CreatesApplicationModels;

    public function __construct(
        protected string $clientName,
        protected string $redirectUris = 'urn:ietf:wg:oauth:2.0:oob',
        protected string $scopes = 'read',
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
            'scopes' => $this->scopes,
            'website' => $this->website,
        ];
    }

    public function getQueryParams(): array
    {
        return [];
    }

    public function getHttpMethod(): HttpMethod
    {
        return HttpMethod::POST;
    }
}
