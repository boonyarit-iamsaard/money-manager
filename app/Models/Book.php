<?php

namespace App\Models;

use Database\Factories\BookFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperBook
 */
class Book extends Model
{
    /** @use HasFactory<BookFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'user_id',
    ];

    /**
     * @return BelongsTo<User, covariant Book>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
