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

namespace KodeKeep\Livewired\Components;

class DisableTwoFactorAuth extends Component
{
    use Concerns\InteractsWithUser;

    protected $listeners = [
        'refreshTwoFactorAuth' => '$refresh',
    ];

    public function disableTwoFactorAuth(): void
    {
        $this->user->forceFill([
            'two_factor_secret'    => null,
            'uses_two_factor_auth' => false,
        ])->save();

        $this->emit('refreshTwoFactorAuth');
    }
}
