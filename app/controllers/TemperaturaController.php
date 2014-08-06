<?php

class TemperaturaController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function listar(){
		$data = Temperatura::orderBy('created_at', "desc")->take(100)->get()->toArray();
		return Response::json($data);
	}

	public function index(){
		$list_ = null;
		$list = Temperatura::orderBy('created_at', "desc")->take(5000)->get();
		$i=0;
		foreach ($list as $key => $value) {
			if(!empty($list[$key+1]) and $list[$key+1]["temperatura"] != $value["temperatura"]){
				$list_[] = [($value->created_at->getTimestamp()*1000), $value->temperatura];
			}
		}
		$data = array(
			"total"=>Temperatura::count(),
			"ultimos_minutos"=>Temperatura::orderBy('created_at', "desc")->take(10)->get()->toArray(),
			"maxima"=> Temperatura::orderBy('temperatura', "desc")->take(1)->get()->toArray(),
			"minima"=> Temperatura::orderBy('temperatura', "asc")->take(1)->get()->toArray(),
			"list"=> json_encode($list_)
		);
		// echo "<pre>";print_r($data);die;
		return View::make('pages.temperatura.index', $data);
	}

	public function temperatura($t)
	{
		// $mongo = new MongoClient( 'mongodb://admin:123@localhost:27017' );
		// $mongo->selectDB( 'twitterdb' )->selectCollection( 'tweets' )->insert(
		// 	array( 'nome' => "ricardo" , 'tweet' => "texto" ) 
		// );

		try{
			Temperatura::create(array('temperatura' => (float)$t));
			$data = array(
				'success' => true
			);
		}catch (Exception $e){
			$data = array(
				'success' => false,
				'reason' => $e->getMessage()
			);
			throw $e;
		}
		return Response::json($data);
	}

}
