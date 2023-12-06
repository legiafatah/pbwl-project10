<?php

namespace App\Controllers;

use App\Core\Controller;

class Dokter extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Dokter();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('dokter/index', $data);
	}

	public function input()
	{
		$this->dashboard('dokter/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/dokter');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('dokter/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/dokter');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/dokter');
	}
}
