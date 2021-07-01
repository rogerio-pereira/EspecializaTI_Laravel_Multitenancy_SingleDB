<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model) {
            $model->uuid = Str::uuid();
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
