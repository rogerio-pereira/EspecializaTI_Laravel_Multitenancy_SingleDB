<?php

namespace App\Observers\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    public function creating(Model $model)
    {
        $tenantId = app(ManagerTenant::class)->getTenantIdentifier();

        $model->setAttribute('tenant_id', $tenantId);
    }
}
