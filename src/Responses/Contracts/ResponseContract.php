<?php

namespace Vazaha\Mastodon\Responses\Contracts;

use Illuminate\Support\Collection;
use Vazaha\Mastodon\Models\Contracts\ModelContract;

interface ResponseContract
{
    /**
     * @return \Illuminate\Support\Collection<int, \Vazaha\Mastodon\Models\Model>
     */
    public function getModels(): Collection;

    public function getModel(): ?ModelContract;

    public function getCount(): int;
}