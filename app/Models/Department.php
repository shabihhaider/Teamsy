<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted(): void
    {
        static::addGlobalScope(new TenantScope);

        static::creating(function($department) {
            if(session()->has('tenant_id'))
            {
                $department->tenant_id = session()->get('tenant_id');
            }
        });
    }
}