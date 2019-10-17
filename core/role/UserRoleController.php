<?php

namespace App\Core\Role;

    use App\Core\Controller;

    class UserRoleController  extends Controller 
    {
        public function __pre() 
        {
            if($this->getSession()->get('user_id') === null)
            {
                $this->redirect('/lanaya/user/login');
            }
        }
    }