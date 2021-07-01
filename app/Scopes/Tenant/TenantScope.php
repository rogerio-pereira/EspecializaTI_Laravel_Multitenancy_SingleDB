<?php

namespace App\Scopes\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        /*
         * I didn't like this approach, i believe would be better setting getTenantIdentifier as a static function
         *      and calling it like this
         *      ManagerTenant::getTenantIdentifier();
         */ 
        $tenantId = app(ManagerTenant::class)->getTenantIdentifier();

        $builder->where('tenant_id', $tenantId);
    }
}