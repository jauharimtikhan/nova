<?php

namespace App\Models;

use Novalites\Database\Model;

class User extends Model
{
    protected   $table = 'user';
    protected   $primaryKey = 'id';
    public $timestamps = true;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
