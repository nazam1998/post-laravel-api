
<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        Post::factory()->count(15)->create();
    }
}
