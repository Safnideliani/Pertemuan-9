<?php

namespace App\Controllers;

use App\Core\Controller;

class Wali extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Wali();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('wali/index', $data);
	}

	public function input()
	{
		$this->dashboard('wali/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('wali/edit');
	}

	public function update()
	{
		//
	}

	public function delete()
	{
		//
	}
}
