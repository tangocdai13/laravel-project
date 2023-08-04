<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Family extends Model
{
    use HasFactory;

    protected $table = 'families';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class, 'family_id', 'id');
    }

    public function getAllFamily()
    {
        $families = DB::table($this->table)->get();

        return $families;
    }
}
