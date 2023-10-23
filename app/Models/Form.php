<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Form extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'is_approved',
    ];

    // define form - questions relationships
    public function questions()
    {
        return $this->hasMany(FormQuestion::class);
    }

    // define form - responses relationships
    public function responses()
    {
        return $this->hasMany(FormQuestionResponse::class);
    }
}
