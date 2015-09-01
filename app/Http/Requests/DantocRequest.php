<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DantocRequest extends Request {

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
			'txtdantoc' => 'required|unique:dantoc,tendantoc'
		];
	}
	
	public function message(){
		return [
		'txtdantoc.required'=> 'vui lòng nhập tên Dân tộc ',
		'txtdantoc.unique'=> 'tên Dân tộc đã tồn tại'
		];
	}
}
