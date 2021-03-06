<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Scalar\String_;

class Product extends Model
{
    protected $guarded = [];

    public function path() : String {
        return route('product.show', $this->id);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
