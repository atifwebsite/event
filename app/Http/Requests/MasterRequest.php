<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Session;
use Validator;

class MasterRequest extends FormRequest
{

public function rules()
{
return [
    'fav_icon' => 'required|image',
    'logo' => 'required|image',
    'company_title' => 'required',
    'address' => 'required',
    'phone' => 'required',
    'email' => 'required|email',
    'description' => 'required',
    'facebook'=> 'required|url',
    'instagram'=> 'required|url',
    'twitter'  => 'required|url',


];
}
}
