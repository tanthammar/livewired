<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/livewired.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Livewired\Components\Concerns;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

trait InteractsWithUser
{
    public function getUserProperty(): Authenticatable
    {
        return Auth::user();
    }

    public function getTeamsProperty(): Collection
    {
        return Auth::user()->teams;
    }
}
