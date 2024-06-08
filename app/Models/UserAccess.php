<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    use HasFactory;

    protected $table = 'user_accesses';

    protected $fillable = [
        'user_id',
        'access',
        'title',
        'category',
        'read_only',
        'write_only'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
