<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageConfig extends Model
{
    use HasFactory;
    protected $table = 'page_config';

    protected $fillable = [
        'page_type',
        'page_url',
        'name',
        'description',
        'img_link',
        'parent',
        'header_img',
        'header_text',
        'updated_by',
        'tenant_id',
        'language',
        'seq_no'
    ];

}
