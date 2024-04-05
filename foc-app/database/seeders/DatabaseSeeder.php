<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Curso;
use Database\Factories\CursoFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $cursos=new curso();
      $cursos->id = '1';
      $cursos->name = 'curso';
      $cursos->status = 'activo';
      $cursos->save();
      DB::table('cursos')->insert([
        'name' => Str::random(10),
        'id' => Str::random(10).'1',
        'status' => Str::random(10),
        'updated_at' => '2024-04-05 18:20:30',
        'created_at' => '2024-04-05 18:20:30'
    ]);
    DB::table('cursos')->insert([
        'name' => Str::random(10),
        'id' => Str::random(10).'1',
        'status' => Str::random(10),
        'updated_at' => '2024-04-05 18:20:30',
        'created_at' => '2024-04-05 18:20:30'
    ]);
    DB::table('cursos')->insert([
        'name' => Str::random(10),
        'id' => Str::random(10).'1',
        'status' => Str::random(10),
        'updated_at' => '2024-04-05 18:20:30',
        'created_at' => '2024-04-05 18:20:30'
    ]);
    DB::table('cursos')->insert([
        'name' => Str::random(10),
        'id' => Str::random(10).'1',
        'status' => Str::random(10),
        'updated_at' => '2024-04-05 18:20:30',
        'created_at' => '2024-04-05 18:20:30'
    ]);
    curso::factory(10)->create();
    User::factory(10)->create();

    $this->call([
        cursoseeder::class,
     
    ]);

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
