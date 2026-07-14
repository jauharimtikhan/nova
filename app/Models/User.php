<?php

namespace App\Models;

use Novalites\Database\Model;

class User extends Model
{
    protected string  $table = 'user';
    protected  string $primaryKey = 'id';
    public bool $timestamps = true;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    protected array $fillable = [
        'name',
        'email',
        'password',
    ];

    protected array $hidden = [
        'password',
    ];
}
