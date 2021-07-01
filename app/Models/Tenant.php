<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name'
    ];

    public function tenant()
    {
        return $this->hasMany(User::class);
    }
}
