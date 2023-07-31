<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'parent',
        'created_by',
        'content',
        'meta_title',
        'meta_desc',
        'meta_keyword',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id', 'id');
    }
}
