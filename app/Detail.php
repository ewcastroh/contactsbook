<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';

    protected $fillable = [
      'contact_id', 'description'
    ];

    public function contact()
    {
        // belongsto: Detail belongs to Contact
        return $this->belongsTo(Contact::class);
    }
}
