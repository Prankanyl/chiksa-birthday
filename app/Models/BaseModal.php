<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class BaseModal extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    public $incrementing = true;

    protected $guarded = [];

    protected static function booted()
    {
        static::addGlobalScope(function (Builder $builder) {
            $builder->orderBy('id', 'asc');
        });
    }
}
