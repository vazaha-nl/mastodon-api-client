<?php

namespace Vazaha\Mastodon\Enums;

enum HttpMethod: string
{
    case DELETE = 'DELETE';
    case GET = 'GET';
    case PATCH = 'PATCH';
    case POST = 'POST';
    case PUT = 'PUT';
}
