<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $admin = new User;
        $admin->name = 'Hassan Elsaied';
        $admin->email = 'hassanelsaied80@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->isAdmin = 1;
        $admin->is_verified = 1;
        $defaultpath = public_path('images/profile/user-uploads/user-09.jpg');
        $imagepath = 'images/users/profile/userImages';
        if (!Storage::exists($defaultpath)) {
            $path = Storage::disk('public')->putFileAs($imagepath, $defaultpath, 'user-09.jpg');
            $admin->image = $path;
        } else {
            $path = Storage::get($defaultpath);
            $admin->image = $path;
        }
        $admin->save();
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::all();
        $role->syncPermissions($permissions);
        $admin->assignRole([$role->id]);






        $user1 = new User;
        $user1->name = 'Hassan Mohammed';
        $user1->email = 'hassanelsaied101@gmail.com';
        $user1->password = bcrypt('12345678');
        $user1->isAdmin = 0;
        $defaultpath1 = public_path('images/profile/user-uploads/user-08.jpg');
        $imagepath1 = 'images/users/profile/userImages';
        if (!Storage::exists($defaultpath1)) {
            $path1 = Storage::disk('public')->putFileAs($imagepath1, $defaultpath1, 'user-08.jpg');
            $user1->image = $path;
        } else {
            $path1 = Storage::get($defaultpath1);
            $user1->image = $path1;
        }
        $user1->save();
        $models = ['blog', 'category', 'product', 'subcategory', 'subsubcategory'];



        $user2 = new User;
        $user2->name = 'Abo Ali';
        $user2->email = 'aboali80@gmail.com';
        $user2->password = bcrypt('12345678');
        $user2->isAdmin = 0;
        $defaultpath2 = public_path('images/profile/user-uploads/user-07.jpg');
        $imagepath2 = 'images/users/profile/userImages';
        if (!Storage::exists($defaultpath2)) {
            $path2 = Storage::disk('public')->putFileAs($imagepath2, $defaultpath2, 'user-07.jpg');
            $user2->image = $path2;
        } else {
            $path2 = Storage::get($defaultpath2);
            $user2->image = $path2;
        }
        $user2->save();


        $user3 = new User;
        $user3->name = 'Education Enginner';
        $user3->email = 'educationenginner2020@gmail.com';
        $user3->password = bcrypt('12345678');
        $user3->isAdmin = 0;
        $defaultpath3 = public_path('images/profile/user-uploads/user-06.jpg');
        $imagepath3 = 'images/users/profile/userImages';
        if (!Storage::exists($defaultpath3)) {
            $path3 = Storage::disk('public')->putFileAs($imagepath3, $defaultpath3, 'user-06.jpg');
            $user3->image = $path3;
        } else {
            $path3 = Storage::get($defaultpath3);
            $user3->image = $path3;
        }
        $user3->save();

        $role2 = Role::create(['name' => 'Company']);
        foreach ($models as $model) {
            $role2->givePermissionTo(['create_' . $model, 'edit_' . $model, 'show_' . $model, 'delete_' . $model, 'index_' . $model]);
        }
        $user3->assignRole([$role2->id]);

        $admin1 = new User;
        $admin1->name = 'AbdElhimmed Elsayed ';
        $admin1->email = 'adbelhimedelisaed80@gmail.com';
        $admin1->password = bcrypt('12345678');
        $admin1->isAdmin = 1;
        $defaultpath4 = public_path('images/profile/user-uploads/user-05.jpg');
        $imagepath4 = 'images/users/profile/userImages';
        if (!Storage::exists($defaultpath4)) {
            $path4 = Storage::disk('public')->putFileAs($imagepath4, $defaultpath4, 'user-05.jpg');
            $admin1->image = $path4;
        } else {
            $path4 = Storage::get($defaultpath4);
            $admin1->image = $path4;
        }
        $admin1->save();
        $admin1->assignRole([$role->id]);


        $user4 = new User;
        $user4->name = 'Esraa Khalel';
        $user4->is_verified = 1;
        $user4->email = 'esraaebrahemkhale123456@gmail.com';
        $user4->password = bcrypt('12345678');
        $user4->isAdmin = 0;
        $defaultpath5 = public_path('images/profile/user-uploads/user-04.jpg');
        $imagepath5 = 'images/users/profile/userImages';
        if (!Storage::exists($defaultpath5)) {
            $path5 = Storage::disk('public')->putFileAs($imagepath5, $defaultpath5, 'user-04.jpg');
            $user4->image = $path5;
        } else {
            $path5 = Storage::get($defaultpath5);
            $user4->image = $path5;
        }
        $user4->save();
    }

}
