<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Qirolab\Laravel\Reactions\Contracts\ReactableInterface;
use Qirolab\Laravel\Reactions\Traits\Reactable;

class Post extends Model implements ReactableInterface
{
    use HasFactory, SoftDeletes, Reactable;

    protected $fillable = [
        'image',
        'description',
        'is_published',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
