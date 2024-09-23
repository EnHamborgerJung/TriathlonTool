<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TriathlonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'Swim' => ['required'],
            'Bike' => ['required'],
            'Run' => ['required'],
            'TransitionOne' => ['required'],
            'TransitionTow' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
