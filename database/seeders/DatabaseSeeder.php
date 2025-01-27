<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Start seeding database...');

        $this->call([
            //
        ]);

        if (App::environment('local')) {
            $factories = [
                'users' => User::factory(10)
                    ->has(
                        Book::factory()
                            /** @phpstan-ignore-next-line */
                            ->state(function (array $attributes, User $user) {
                                $name = "{$user->name}'s Book";
                                $slug = Str::slug($name);

                                return [
                                    'user_id' => $user->id,
                                    'name' => $name,
                                    'slug' => $slug,
                                ];
                            }),
                    ),
            ];

            foreach ($factories as $key => $factory) {
                $this->command->info("Start seeding {$key}...");

                $factory->create();

                $this->command->info(Str::ucfirst($key) . ' seeded successfully');
            }
        }

        $this->command->info('Database seeded successfully');
    }
}
