<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	protected $table = 'menus';

	public function getTopMenu()
	{
		return $this->orderBy('weight')->published()->get();
	}
	public function scopePublished ($query){
		$query->where(['active' => '1']);
	}
}
