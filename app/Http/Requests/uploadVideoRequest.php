<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uploadVideoRequest extends FormRequest
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
            'video_title' => 'required|min:3|string',
            'Video_file' => 'required|file|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4,video/MP2T',
            'video_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ];
    }
}
