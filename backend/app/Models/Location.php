<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Location extends Model
{
  /**
   * @var array<int, string>
   */
    protected $appends = ['creationDate'];

  /**
   * Hide `created_at` from being shown directly.
   */
    protected $hidden = ['created_at', 'updated_at'];

  /**
   * Get creationDate alias for created_at.
   *
   * @return string
   */
    public function getCreationDateAttribute()
    {
        return $this->created_at->format('Y-m-d');
    }
}
