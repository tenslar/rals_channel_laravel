<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    const UPDATED_AT = null;


    public function handleName()
    {
        return $this->handle_name_template ?? "ななしさん";
    }
}
