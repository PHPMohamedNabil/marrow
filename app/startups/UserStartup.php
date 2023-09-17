<?php

namespace App\Startups;

use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Core\Container\Container;
use App\Startups\StartupInterface;
use Core\Database\NativeDB;
use Core\Request;
class UserStartup implements StartupInterface
{
   
   public function startup()
   {  

   }

   public function register()
   {   
    app()::$container->set(UserRepositoryInterface::class,UserRepository::class);
   }

      
      
}
