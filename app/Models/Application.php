<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Application extends Model
{
    protected $table = "Applications";
    protected $primaryKey = "id";

    protected $hidden = [
        'id'
    ];

    protected $fillable = [
        'name',
        'description',
        'hostname',
        'path',
        'protocol'
    ];

    public function toArray()
    {
        $array = parent::toArray();
        $return = [];

        foreach($array as $key => $value)
        {
            $return[Str::camel($key)] = $value;
        }

        return $return;
    }
}
