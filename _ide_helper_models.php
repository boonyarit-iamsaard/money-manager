<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TFactory|null $use_factory
 * @property-read \App\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wallet> $wallets
 * @property-read int|null $wallets_count
 * @method static \Database\Factories\BookFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperBook {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $image
 * @property \App\Role $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Book> $books
 * @property-read int|null $books_count
 * @property-read \App\Models\TFactory|null $use_factory
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Wallet> $wallets
 * @property-read int|null $wallets_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $user_id
 * @property int $book_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Book $book
 * @property-read \App\Models\TFactory|null $use_factory
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\WalletFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Wallet whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperWallet {}
}

