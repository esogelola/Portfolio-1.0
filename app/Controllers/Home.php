<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use Exception;

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
		
		$email->setTo("contact@esogelola.com");
		$email->setFrom($this->request->getPost('email'),$this->request->getPost('name'));
		$email->setSubject($this->request->getPost('subject'));
		$email->setMessage($this->request->getPost('message'));
		helper('cookie');

		if (!$this->validate(['email' => 'required|valid_email', 'subject' => 'required', 'message' => 'required']) && $email->send()) {
			setcookie('email_sent', 'true', time()+1);
            return redirect()->route('/');
        } else {
			setcookie('email_sent', 'false', time()+1);
		   // throw new Exception($email->printDebugger());
		   return redirect()->route('');
        }


		
	}
}
