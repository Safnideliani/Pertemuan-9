<?php

namespace App\Controllers;

use App\Core\Controller;

class Siswa extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\siswa();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('siswa/index', $data);
	}

	public function input()
	{
		$this->dashboard('siswa/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('siswa/edit');
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
