<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new ProjectModel();

		$data = [
			'projects'  =>  $model->getProjects(false, 15),
			'title' => 'Emmanuel Sogelola',
			'project_model' => $model,
		];
		echo view('templates/header', $data);
		echo view('home', $data);
		echo view('templates/footer', $data);
	}
	public function project($slug)
	{
		$model = new ProjectModel();

		if ($slug != null && file_exists('static/projects/' . $slug)) {


			$project_name = str_replace('_', ' ', $slug);
			$description = $model->getDescription($slug);
			if ($slug)
				$data = [
					'title' => 'Emmanuel Sogelola',
					'project' => $model->getProjects($project_name),
					'description' => $description,
				];

			echo view('project', $data);
		}
		else{
			return redirect()->route('/');
		}
	}
	public function sendEmail()
	{
		$email = \Config\Services::email();

		// $email->setFrom($this->request->getPost('email'), $this->request->getPost('name'));
		// $email->setSubject('Email Test');
		// $email->setMessage('Testing the email class.');

		$email->setFrom('emmanuelsogelola@gmail.com', 'Your Name');
		$email->setTo('emmanuelsogelola@gmail.com');

		$email->setSubject('Email Test');
		$email->setMessage('Testing the email class.');

		if (!$email->send(false)) {
			echo 'did not send!';
		} else {
			echo 'sent';
			$email->printDebugger();
		}


		//return redirect()->route('/');
	}
}
