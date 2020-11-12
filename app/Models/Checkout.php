<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    protected $table = 'checkouts';
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function book()
    {
        return $this->belongsTo(Book::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

}



