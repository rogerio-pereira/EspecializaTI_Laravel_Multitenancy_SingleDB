<?php

namespace App\Models;

use App\Observers\Tenant\TenantObserver;
use App\Scopes\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);

        static::observe(new TenantObserver);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
