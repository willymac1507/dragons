<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'headline',
        'body',
        'slug',
        'image_url',
        'user_id'
    ];

    protected $with = [
        'author'
    ];

    public function author() :BelongsTo
    {
        return $this->belongsTo(User::class, foreignKey: 'user_id');
    }
}
