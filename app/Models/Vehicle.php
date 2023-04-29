<?php

namespace App\Models;

use App\Traits\UserRecorderScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;


class Vehicle extends Model
{
    use SoftDeletes,UserRecorderScope;

    protected $fillable = ['user_id', 'plate_number'];

    /*
         static::addGlobalScope('user',function (Builder $builder){
            $builder->where('user_id',auth()->id());
        });
     * */
}
