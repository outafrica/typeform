<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormQuestion extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'form_id',
        'form_question_category_id',
        'question',
        'form_question_option_type_id',
        'is_approved',
    ];

    // define question - form  relationships
    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    // define question - category  relationships
    public function category()
    {
        return $this->belongsTo(FormQuestionCategory::class, 'form_question_category_id', 'id');
    }

    // define question - answer  relationships
    public function answers()
    {
        return $this->hasMany(FormQuestionAnswer::class);
    }

    // define question - optiontype  relationships
    public function optionType()
    {
        return $this->belongsTo(FormQuestionOptionType::class, 'form_question_option_type_id', 'id');
    }

    // define question - option  relationships
    public function options()
    {
        return $this->hasMany(FormQuestionOption::class);
    }
}
