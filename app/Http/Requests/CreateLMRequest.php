<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLMRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:learning_materials',
            'description' => 'required',
            'file' => 'required|mimes:mpeg,avi,mp4,viv,mov,jpgv,movie,txt,text,pdf,pptx',
            'subjectId' => 'required',
            'typeOfLearningMaterialId' => 'required',
            'chapterId' => 'required',
            'InstructorId' => 'required',
        ];
    }
}
