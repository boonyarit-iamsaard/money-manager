<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamps();

            $table->unique(['user_id', 'slug'], 'unique_user_book');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
