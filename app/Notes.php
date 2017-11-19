<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
  protected $fillable = [
      'user_id', 'patients_id', 'note',
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }
}
