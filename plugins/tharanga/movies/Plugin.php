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
    }
	public function boot(){

        $userRole = new UserRole;

        $userRole->name = "tharanga";
        $userRole->code = "ytpo";
        $userRole->is_system = 0;

        $userRole->name = "isuru";
        $userRole->code = "ytpoe";
        $userRole->is_system = 0;

        $userRole->save();
		

		
	}


}
