<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'name',
    ];

    protected $hidden = [
        'password',
    ];

    /**
     * Set the password attribute with hashing.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Check if the provided password matches.
     */
    public function checkPassword($password)
    {
        return Hash::check($password, $this->password);
    }
}
