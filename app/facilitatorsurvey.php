<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitatorsurvey extends Model
{
  protected $fillable = [
    'user_id', 'objectives', 'explain', 'describe', 'list', 'materials', 'prepare', 'delivery', 'modules'
  ];

  public function user()
    {
    return $this->belongsTo(User::class);
    }


}
