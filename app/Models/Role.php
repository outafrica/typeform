<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    // defining readable constants for roles 
    public const IS_FARMER = 1;
    public const IS_AGENT = 2;
    public const IS_ADMIN = 3;
    public const IS_SUPERADMIN = 3;
}
