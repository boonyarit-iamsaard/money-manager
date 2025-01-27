<?php

namespace App\Models;

use Database\Factories\WalletFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperWallet
 */
class Wallet extends Model
{
    /** @use HasFactory<WalletFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'user_id',
        'book_id',
    ];

    /**
     * @return BelongsTo<User, covariant Wallet>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo<Book, covariant Wallet>
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
