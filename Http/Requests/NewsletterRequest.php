<?php

namespace Modules\Newsletters\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $method = $this->method();
        if( strtoupper($method)=='POST'){
            return [
                'name'  => 'nullable|max:191',
                'email' => "required|string|email|max:191|unique:newsletters,email",
                'phone' => "nullable|max:191",
                'menu_id' => "required|numeric"
            ];
        }else{
            $id = $this->request->get('id');
            return [
                'name'  => 'nullable|max:191',
                'email' => "required|string|email|max:191|unique:newsletters,email,{$id},id",
                'phone' => "nullable|max:191",
                'menu_id' => "required|numeric"
            ];
        }
    }
}