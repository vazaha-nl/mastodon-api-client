<?php

declare(strict_types=1);

namespace Vazaha\Mastodon\Requests\Concerns;

use Vazaha\Mastodon\Enums\Scope;

trait ResolvesScope
{
    /**
     * @param array<int, string|\Vazaha\Mastodon\Enums\Scope>|\Vazaha\Mastodon\Enums\Scope|string|null $scope
     */
    protected function resolveScope(string|array|Scope|null $scope): ?string
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
