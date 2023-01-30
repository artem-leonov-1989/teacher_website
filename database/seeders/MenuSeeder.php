<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected array $list = [
        'welcome.index' => 'Головна'
    ];

    public function run(): void
    {
        Menu::truncate();
        foreach ($this->list as $routName => $menuName) {
            Menu::create([
                'name' => $menuName,
                'route' => $routName,
            ]);
        }
    }
}
