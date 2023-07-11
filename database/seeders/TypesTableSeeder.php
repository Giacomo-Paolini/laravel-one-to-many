<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            "name" => "Web Development"
        ]);

        Type::create([
            "name" => "UI/UX Design"
        ]);

        Type::create([
            "name" => "Mobile Development"
        ]);
    }
}
