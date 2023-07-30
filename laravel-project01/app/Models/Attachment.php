<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $table = 'attachments';
    protected $fillable = [
        'file_path',
        'attachable_type',
        'file_name',
        'attachable_id',
        'extension',
        'mime_type',
        'size'
    ];
}
