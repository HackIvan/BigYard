<?php

namespace App\Policies;

use App\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user){

        return $user->hasRole('seller');
    }

    public function read(User $user, Shop $shop){

        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function edit(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Shop  $shop
     * @return mixed
     */
    public function delete(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }




//   /**
//      * Determine whether the user can view any models.
//      *
//      * @param  \App\User  $user
//      * @return mixed
//      */
//     public function viewAny(User $user)
//     {
//         //
//     }

//     /**
//      * Determine whether the user can view the model.
//      *
//      * @param  \App\User  $user
//      * @param  \App\Shop  $shop
//      * @return mixed
//      */
//     public function view(User $user, Shop $shop)
//     {
//         return $user->id == $shop->user_id;
//     }
}


