<?php

namespace App\Http\Resources\FormQuestion;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormQuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'form_id' => $this->form->id,
            'question_category' => $this->category->name,
            'question' => $this->question,
            'option_type' => $this->optionType->name,
            'options' => $this->options,
        ];
    }
}
