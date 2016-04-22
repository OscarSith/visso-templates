<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(ProyectoTableSeeder::class);
    }
}
