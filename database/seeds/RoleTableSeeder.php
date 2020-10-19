<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_eleve = Role::where('name', 'Eleve')->first();
        $role_enseignant = Role::where('name', 'Enseignant')->first();
        $role_parent = Role::where('name', 'Parent')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_supperadmin = Role::where('name', 'Supperadmin')->first();

        $role_eleve = new Role();
        $role_eleve->name = 'User';
        $role_eleve->description = 'un utilisateur ordinaire';
        $role_eleve->save();

        $role_parent = new Role();
        $role_parent->name = 'parent';
        $role_parent->description = 'un parent pour les eleves';
        $role_parent->save();

        $role_enseignant = new Role();
        $role_enseignant->name = 'Enseignant';
        $role_enseignant->description = 'un enseignant';
        $role_enseignant->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'un administrateur du site';
        $role_admin->save();

        $role_supperadmin = new Role();
        $role_supperadmin->name = 'Supperadmin';
        $role_supperadmin->description = 'L\'administrateur generale du site';
        $role_supperadmin->save();


    }
}
