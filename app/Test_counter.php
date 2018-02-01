<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use  App\Events\TstCntChanged ;
class Test_counter extends Model
{
	protected $fillable = [
		'counter'
	];
	public function increase($cnt) {
		$this::whereId(1)->update(['counter'=> $cnt] );
		return $this::all()->first();
	}

	public function increasing() {
		$this::whereId(1)->increment('counter');
		$counter =  $this::whereId(1)->first()->counter;
		event(new TstCntChanged($counter));
	}
	public function info() {
		dump($this::whereId(1));

	}
}
