<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard | SMA Negeri 1 Bantarsari'
		];
		return view('home/site', $data);
	}
}
