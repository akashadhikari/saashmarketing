<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkingHoursRequest extends FormRequest
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
            
            'employees_id' => 'required',
            'date' => 'required|date_format:'.config('app.date_format'),
            'start_time' => 'required|date_format:H:i:s',
            'time' => 'required|date_format:H:i:s',
        ];
    }
}
