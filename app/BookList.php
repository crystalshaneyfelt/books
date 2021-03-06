<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookList extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
