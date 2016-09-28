<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
      'user_id', 'name', 'surname', 'email', 'phone'
    ];

    public function details()
    {
        // hasmany: A Contact has many details
        return $this->hasMany(Detail::class);
    }

    public function user()
    {
        // belongsto: Contact belongs to User
        return $this->belongsTo(User::class);
    }
}
