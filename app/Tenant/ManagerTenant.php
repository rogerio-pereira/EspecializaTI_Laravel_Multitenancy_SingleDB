<?php

namespace App\Tenant;

use Illuminate\Support\Facades\Auth;

class ManagerTenant 
{
    public function getTenantIdentifier()
    {
        return Auth::user()->tenant->id;
    }
}