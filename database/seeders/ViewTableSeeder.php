<?php

namespace Database\Seeders;
use App\Models\View;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ViewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $view = new View;
        $view->counts = 5;
        $view->post_id= 1;
        $view->save();
        
        View::factory()->count(50)->create();
    }
}
