<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_eleve = Role::where('name', 'eleve')->first();
        $role_enseignant = Role::where('name', 'Enseignant')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_supperadmin = Role::where('name', 'Admin')->first();

        $eleve = new User();
        $eleve->role_id = 1;
        $eleve->name = 'Nanema';
        $eleve->prenom = 'Armelle';
        $eleve->email= 'nanema@gmail.com';
        $eleve->password= bcrypt ('77687319tegwende');
        $eleve->save();
        // $eleve->roles()->attach($role_eleve);

        $enseignant = new User();
        $enseignant->role_id = 2;
        $enseignant->name = 'Beogo';
        $enseignant->prenom = 'Arstid';
        $enseignant->email= 'bircof@gmail.com';
        $enseignant->password= bcrypt ('bircof12345678');
        $enseignant->save();
        // $enseignant->roles()->attach($role_enseignant);

        $admin = new User();
        $admin->role_id = 4;
        $admin->name = 'Zagre';
        $admin->prenom = 'Tegwende Romarique Christiant';
        $admin->email= 'christiant@gmail.com';
        $admin->password = bcrypt('77687319christiant');
        $admin->save();
        // $admin->roles()->attach($role_admin);

        $parent = new User();
        $parent->role_id = 3;
        $parent->name = 'Zagre';
        $parent->prenom = 'Tegwende Romarique Christiant';
        $parent->email= 'zagr.franc@gmail.com';
        $parent->password = bcrypt('77687319christiant');
        $parent->save();
        // $admin->roles()->attach($role_admin);

        $supperadmin = new User();
        $supperadmin->role_id = 4;
        $supperadmin->name = 'Zagre';
        $supperadmin->prenom = 'Tegwende Romarique Christiant';
        $supperadmin->email= 'zagr.roma@gmail.com';
        $supperadmin->password = bcrypt('77687319christiant');
        $supperadmin->save();
        // $supperadmin->roles()->attach($role_admin);



    }
}
