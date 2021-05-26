<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name',
    ];

    public static function boot() 
    {
        parent::boot();

        self::creating(function ($model){
            // $model->uuid => Uuid::generate(4),
            $model->uuid = md5($model->name);
        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
