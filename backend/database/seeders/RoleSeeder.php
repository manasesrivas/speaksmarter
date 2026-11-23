<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);

        $permission_create_rol = Permission::create(['name' => 'create roles']);
        $permission_read_rol = Permission::create(['name' => 'read roles']);
        $permission_update_rol = Permission::create(['name' => 'update roles']);
        $permission_delete_rol = Permission::create(['name' => 'delete roles']);

        $permission_create_lesson = Permission::create(['name' => 'create lessons']);
        $permission_read_lesson = Permission::create(['name' => 'read lessons']);
        $permission_update_lesson = Permission::create(['name' => 'update lessons']);
        $permission_delete_lesson = Permission::create(['name' => 'delete lessons']);

        $permission_create_category = Permission::create(['name' => 'create categoryies']);
        $permission_read_category = Permission::create(['name' => 'read categories']);
        $permission_update_category = Permission::create(['name' => 'update categories']);
        $permission_delete_category = Permission::create(['name' => 'delete categories']);

        $admin_permissions = [
            $permission_create_rol,
            $permission_read_rol,
            $permission_update_rol,
            $permission_delete_rol,
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_update_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category,
        ];
        
        $editor_permission = [
            $permission_create_lesson,
            $permission_read_lesson,
            $permission_update_lesson,
            $permission_delete_lesson,
            $permission_create_category,
            $permission_read_category,
            $permission_update_category,
            $permission_delete_category,
        ];

        $role_admin->syncPermissions($admin_permissions);
        $role_editor->syncPermissions($editor_permission);
    }
}
