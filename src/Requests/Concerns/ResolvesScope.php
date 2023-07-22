<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Enums\Scope;

trait ResolvesScope
{
    /**
     * @param null|array<int, string|\Vazaha\Mastodon\Enums\Scope>|string|\Vazaha\Mastodon\Enums\Scope $scope
     */
    protected function resolveScope(null|array|Scope|string $scope): ?string
    {
        if (is_string($scope)) {
            return $scope;
        }

        if ($scope instanceof Scope) {
            return $scope->value;
        }

        if (is_array($scope)) {
            $scopes = array_map(static function ($scope) {
                if ($scope instanceof Scope) {
                    return $scope->value;
                }

                return (string) $scope;
            }, $scope);

            return implode(' ', $scopes);
        }

        return null;
    }
}
