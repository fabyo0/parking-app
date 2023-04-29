<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait UserRecorderScope
{
    public function bootUserRecord(Builder $builder)
    {
        static::addGlobalScope('user', function (Builder $builder) {
            $builder->where('user_id', auth()->id());
        });
    }
}
