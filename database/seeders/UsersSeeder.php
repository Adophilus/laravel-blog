<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\User;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::factory()
      ->count(5)
      ->state(new Sequence(...UsersSeeder::generateBlobs()))
      ->create();
  }

  public static function generateBlobs()
  {
    $profiles = [];

    for ($i = 1; $i < 4; $i++) {
      array_push($profiles, [
        'profile' => chunk_split(
          base64_encode(
            file_get_contents(__DIR__ . "/../../public/dev/profile_$i.jpg")
          )
        )
      ]);
    }

    return $profiles;
  }
}
