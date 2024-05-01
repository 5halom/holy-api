<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenant_id',
        'tenant_name',
        'updated_at',
        'updated_by'
    ];  

    public $timestamps = false;
    
}