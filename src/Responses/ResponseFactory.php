<?php

namespace Vazaha\Mastodon\Responses;

use Psr\Http\Message\ResponseInterface;
use Vazaha\Mastodon\ApiClient;
use Vazaha\Mastodon\Requests\PagedRequest;
use Vazaha\Mastodon\Requests\Request;

class ResponseFactory
{
	public function create(ApiClient $client, Request $request, ResponseInterface $response): Response
	{
		if ($request instanceof PagedRequest) {
			return new PagedResponse($client, $request, $response);
		}

		return new Response($client, $request, $response);
	}
}