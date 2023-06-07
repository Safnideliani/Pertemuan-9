<?php

namespace App\Controllers;

use App\Core\Controller;

class Kelas extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Kelas();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('kelas/index', $data);
	}

	public function input()
	{
		$this->dashboard('kelas/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('kelas/edit');
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
