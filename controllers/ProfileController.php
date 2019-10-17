<?php

namespace App\Controllers;

    class ProfileController extends \App\Core\Controller 
    {
        public function show()
        { 
            $auth = false;

            if($this->getSession()->get('user_id') !== NULL){
                $auth = true;
            }

            $this->set('auth', $auth);
        }     
    }