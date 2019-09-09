<?php

namespace Tharanga\Movies;

use Backend\Models\UserRole;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        $this->registerRole('deshani','rtyu','director page');
        $this->registerRole('bhathiya','yuio','pharmacist page');
        $this->registerRole('himidiri','uyti','home page');

    }

    public function boot()
    {

    }


    private function registerRole($name, $code, $description, $is_system = 0)
    {
        $roleToDelete = UserRole::where('name', '=', $name)->first();
        if ($roleToDelete) {
            $roleToDelete->delete();
        }
        $userRole = new UserRole;
        $userRole->name = $name;
        $userRole->code = $code;
        $userRole->description = $description;
        $userRole->is_system = $is_system;
        $userRole->save();
    }

}
