<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  /** @use HasFactory<\Database\Factories\LocationFactory> */
  use HasFactory;
  // Cast `created_at` to `creationDate`
  protected $appends = ['creationDate'];
  protected $hidden = ['created_at', 'updated_at'];

  /**
   * Get creationDate alias for created_at.
   */
  public function getCreationDateAttribute()
  {
    return $this->created_at->format('Y-m-d');
  }
}
