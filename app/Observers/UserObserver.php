<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    
     public function saving (User $user){
        $slug = Str::slug($user->lastname_usu,'-',);
            if(User::where('slug',$slug)->exists())
                $slug = $slug . uniqid();
                
            $user->slug = strtolower($slug);

     }
}
