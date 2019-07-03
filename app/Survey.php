<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
      'user_id', 'rating', 'inspire', 'best_part', 'worst', 'interesting', 'relevant', 'inspiring', 'satisfy', 'problem', 'food', 'food_selection', 'changes', 'thoughts'
    ];
}

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
// protected $hidden = [
//     'password', 'remember_token',
// ];

/**
 * The attributes that should be cast to native types.
 *
 * @var array
 */
// protected $casts = [
//     'email_verified_at' => 'datetime',
// ];
// }
