<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $models = ['blog', 'brand', 'category', 'product', 'subcategory', 'subsubcategory', 'user', 'role'];
        foreach ($models as $model) {
            Permission::create(['name' => 'create_' . $model]);
            Permission::create(['name' => 'edit_' . $model]);
            Permission::create(['name' => 'delete_' . $model]);
            Permission::create(['name' => 'show_' . $model]);
            Permission::create(['name' => 'index_' . $model]);
        }
    }

}
