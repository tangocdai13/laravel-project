<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\Section;
use App\Models\Lesson;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'name',
        'slug',
        'link',
        'price',
        'created_by',
        'category_id',
        'lessions',
        'view_count',
        'benefits',
        'fqa',
        'is_feature',
        'is_online',
        'description',
        'content',
        'meta_title',
        'meta_desc',
        'meta_keyword'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'course_id', 'id');
    }

    public function lessions()
    {
        return $this->hasMany(Lesson::class, 'course_id', 'id');
    }
}
