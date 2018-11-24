<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;
class CustomPermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'mod')->firstOrFail();
        
        $permissions = Permission::all();
        $permissionsFiltered = $permissions->filter(function ($permission, $key) {
            return !in_array($permission->key, [
                'browse_admin',
                'browse_bread',
                'browse_database',
                'browse_media',
                'browse_compass',
                'browse_roles',
                'read_roles',
                'edit_roles',
                'add_roles',
                'delete_roles',
                'browse_settings',
                'read_settings',
                'edit_settings',
                'add_settings',
                'delete_settings',
                'browse_pages',
                'read_pages',
                'edit_pages',
                'add_pages',
                'delete_pages',
            ]);
        });
        $role->permissions()->sync(
            $permissionsFiltered->pluck('id')->all()
        );
    }
}