<?php

namespace Myth\Auth\Controllers;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
use App\Models\ProjectModel;


class AuthController extends Controller
{
	protected $auth;
	/**
	 * @var Auth
	 */
	protected $config;

	/**
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;
	public function __construct()
	{
		// Most services in this controller require
		// the session to be started - so fire it up!
		$this->session = Services::session();

		$this->config = config('Auth');
		$this->auth = Services::authentication();
		helper('form', 'url', 'auth');
	}

	//--------------------------------------------------------------------
	// Login/out
	//--------------------------------------------------------------------

	/**
	 * Displays the login form, or redirects
	 * the user to their destination/home if
	 * they are already logged in.
	 */
	public function login()
	{
		// No need to show a login form if the user
		// is already logged in.
		if ($this->auth->check()) {
			$redirectURL = session('redirect_url') ?? '/';
			unset($_SESSION['redirect_url']);

			return redirect()->to($redirectURL);
		}

		// Set a return URL if none is specified
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';

		echo view($this->config->views['login'], ['config' => $this->config]);
	}
	public function projects($slug = null)
	{
		$model = new ProjectModel();
		$data['projects'] = $model->getProjects();
		$data = [
			'projects'  =>  $model->getProjects(),
			'title' => 'News archive',
			'config' => $this->config
		];

	
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';

		echo view($this->config->views['projects'], $data);
	}
	public function createProject()
	{

		$model = new ProjectModel();
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';

		if (!$this->validate([
			'project_name' => 'required|max_length[255]',
			'project_subtitle' => 'required|max_length[255]',
			'project_type' => 'required|max_length[255]',
			'project_status' => 'required|in_list[0,1,2]',
			'project_description' => [
				'uploaded[project_description]',
				'ext_in[project_description,txt]'
			],

		])) {
			echo view($this->config->views['createProject'], ['config' => $this->config, 'request' => $this->request]);
		} else {
			$model->save([
				'project_name' => $this->request->getVar('project_name'),
				'slug'  => url_title($this->request->getVar('project_name'), '_', TRUE),
				'project_subtitle' => $this->request->getVar('project_subtitle'),
				'project_type' => $this->request->getVar('project_type'),
				'github_link' => $this->request->getVar('github_link'),
				'github_zip_link' => $this->request->getVar('github_zip_link'),
				'github_tarball_link' => $this->request->getVar('github_tarball_link'),
				'webapp_link' => $this->request->getVar('webapp_link'),
				'project_status' => $this->request->getVar('project_status'),

			]);
			$model->saveFiles(url_title($this->request->getVar('project_name'), '_', TRUE));
			return redirect()->route("admin/projects");
		}
	}
	public function deleteProject($slug)
	{
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';
		helper(['form', 'url']);
		$model = new ProjectModel();
		$data = [
			'project' => $model->getProjects($slug),
			'config' => $this->config,
		];

		if (!$this->validate(['choice' => 'required'])) {
			echo view($this->config->views['deleteProject'], $data);
		} else {
			$model->delete($slug);
			$model->deleteDir('static/projects/' . url_title($data['project']['project_name'], "_", TRUE));
			return redirect()->route("admin/projects");
		}
	}
	public function editProject($slug)
	{
		$model = new ProjectModel();
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';

		$data = [
			'project' => $model->getProjects($slug),
			'config' => $this->config,
			'request' => $this->request
		];

		$editData = [
			'id' => $slug,
			'project_name' => $this->request->getVar('project_name'),
			'project_subtitle' => $this->request->getVar('project_subtitle'),
			'project_type' => $this->request->getVar('project_type'),
			'github_link' => $this->request->getVar('github_link'),
			'github_zip_link' => $this->request->getVar('github_zip_link'),
			'github_tarball_link' => $this->request->getVar('github_tarball_link'),
			'webapp_link' => $this->request->getVar('webapp_link'),
			'project_status' => $this->request->getVar('project_status'),

		];


		if (!$this->validate([
			'project_name' => 'required|max_length[255]',
			'project_subtitle' => 'required|max_length[255]',
			'project_type' => 'required|max_length[255]',
			'project_status' => 'required|in_list[0,1,2]',

		])) {
			echo view($this->config->views['editProject'], $data);
		} else {
			if ($model->updateItem($editData));
			$model->editFiles(url_title($this->request->getVar('project_name'), '_', TRUE), url_title($data['project']['project_name'], '_', TRUE));

			return redirect()->route("admin/projects");
		}
	}
	public function delImage($slug)
	{
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';
		helper(['form', 'url']);

		$model = new ProjectModel();

		$project_id = $slug[0];
		$project_name = substr($slug, 2);
		$model->deleteImage($project_id, $project_name);

		return redirect()->route('admin/projects');
	}
	public function editImages($slug)
	{
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';
		helper(['form', 'url']);
		$model = new ProjectModel();
		$project_name = $slug;
		$data = [
			'images' => $model->getImages($slug),
			'config' => $this->config,
		];
		if (!$this->validate(['save' => 'required'])) {
			echo view($this->config->views['editImages'], $data);
		} else {

			$model->saveImages($data['images'], $project_name);
			return redirect()->to("" . $slug);
		}
	}
	public function editDescription($slug)
	{
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';
		helper(['form', 'url']);
		$model = new ProjectModel();
		$data = [
			'project' => $model->getProjects($slug),
			'config' => $this->config,
			'description' =>  $model->getDescription($slug),
		];

		if (!$this->validate(['description' => 'required'])) {

			echo view($this->config->views['editDescription'], $data);
		} else {
			$description = $this->request->getVar('description');
			$model->saveDescription($slug, $description);
			return redirect()->to("" . $slug);
		}
	}

	public function viewUsers($slug = NULL)
	{
		$model = new UserModel();

		$data = [
			'users'  =>  [],
			'title' => 'News archive',
			'config' => $this->config,

		];

		// Set a return URL if none is specified
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';

		echo view($this->config->views['users'], $data);
	}
	
	public function information()
	{
		$model = new UserModel();
		$data['projects'] = $model->getUser();
		$data = [
			'projects'  =>  $model->getProjects(),
			'title' => 'News archive',
			'config' => $this->config
		];

		// Set a return URL if none is specified
		$_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/';

		echo view($this->config->views['information'], $data);

	}

	/**
	 * Attempts to verify the user's credentials
	 * through a POST request.
	 */
	public function attemptLogin()
	{
		$rules = [
			'login'	=> 'required',
			'password' => 'required',
		];
		if ($this->config->validFields == ['email']) {
			$rules['login'] .= '|valid_email';
		}

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$login = $this->request->getPost('login');
		$password = $this->request->getPost('password');
		$remember = (bool) $this->request->getPost('remember');

		// Determine credential type
		$type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		// Try to log them in...
		if (!$this->auth->attempt([$type => $login, 'password' => $password], $remember)) {
			return redirect()->back()->withInput()->with('error', $this->auth->error() ?? lang('Auth.badAttempt'));
		}

		// Is the user being forced to reset their password?
		if ($this->auth->user()->force_pass_reset === true) {
			return redirect('change_pass');
		}

		$redirectURL = session('redirect_url') ?? '/';
		unset($_SESSION['redirect_url']);

		return redirect()->to($redirectURL)->with('message', lang('Auth.loginSuccess'));
	}

	/**
	 * Log the user out.
	 */
	public function logout()
	{
		if ($this->auth->check()) {
			$this->auth->logout();
		}

		return redirect()->to('/');
	}


	//--------------------------------------------------------------------
	// Register
	//--------------------------------------------------------------------

	/**
	 * Displays the user registration page.
	 */
	public function register()
	{
		// Check if registration is allowed
		if (!$this->config->allowRegistration) {
			return redirect()->back()->withInput()->with('error', lang('Auth.registerDisabled'));
		}

		echo view($this->config->views['register'], ['config' => $this->config]);
	}

	/**
	 * Attempt to register a new user.
	 */
	public function attemptRegister()
	{
		// Check if registration is allowed
		if (!$this->config->allowRegistration) {
			return redirect()->back()->withInput()->with('error', lang('Auth.registerDisabled'));
		}

		$users = new UserModel();

		// Validate here first, since some things,
		// like the password, can only be validated properly here.
		$rules = [
			'username'  	=> 'required|alpha_numeric_space|min_length[3]|is_unique[users.username]',
			'email'			=> 'required|valid_email|is_unique[users.email]',
			'password'	 	=> 'required|strong_password',
			'pass_confirm' 	=> 'required|matches[password]',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
		}

		// Save the user
		$user = new User($this->request->getPost());

		$this->config->requireActivation !== false ? $user->generateActivateHash() : $user->activate();

		if (!$users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
		}

		if ($this->config->requireActivation !== false) {
			$activator = Services::activator();
			$sent = $activator->send($user);

			if (!$sent) {
				return redirect()->back()->withInput()->with('error', $activator->error() ?? lang('Auth.unknownError'));
			}

			// Success!
			return redirect()->route('login')->with('message', lang('Auth.activationSuccess'));
		}

		// Success!
		return redirect()->route('login')->with('message', lang('Auth.registerSuccess'));
	}

	//--------------------------------------------------------------------
	// Forgot Password
	//--------------------------------------------------------------------

	/**
	 * Displays the forgot password form.
	 */
	public function forgotPassword()
	{
		echo view($this->config->views['forgot'], ['config' => $this->config]);
	}

	/**
	 * Attempts to find a user account with that password
	 * and send password reset instructions to them.
	 */
	public function attemptForgot()
	{
		$users = new UserModel();

		$user = $users->where('email', $this->request->getPost('email'))->first();

		if (is_null($user)) {
			return redirect()->back()->with('error', lang('Auth.forgotNoUser'));
		}

		// Save the reset hash /
		$user->generateResetHash();
		$users->save($user);

		$email = Services::email();
		$config = new Email();

		$sent = $email->setFrom($config->fromEmail, $config->fromEmail)
			->setTo($user->email)
			->setSubject(lang('Auth.forgotSubject'))
			->setMessage(view($this->config->views['emailForgot'], ['hash' => $user->reset_hash]))
			->setMailType('html')
			->send();

		if (!$sent) {
			log_message('error', "Failed to send forgotten password email to: {$user->email}");
			return redirect()->back()->withInput()->with('error', lang('Auth.unknownError'));
		}

		return redirect()->route('reset-password')->with('message', lang('Auth.forgotEmailSent'));
	}

	/**
	 * Displays the Reset Password form.
	 */
	public function resetPassword()
	{
		$token = $this->request->getGet('token');

		echo view($this->config->views['reset'], [
			'config' => $this->config,
			'token'  => $token,
		]);
	}

	/**
	 * Verifies the code with the email and saves the new password,
	 * if they all pass validation.
	 *
	 * @return mixed
	 */
	public function attemptReset()
	{
		$users = new UserModel();

		// First things first - log the reset attempt.
		$users->logResetAttempt(
			$this->request->getPost('email'),
			$this->request->getPost('token'),
			$this->request->getIPAddress(),
			(string) $this->request->getUserAgent()
		);

		$rules = [
			'token'		=> 'required',
			'email'		=> 'required|valid_email',
			'password'	 => 'required|strong_password',
			'pass_confirm' => 'required|matches[password]',
		];

		if (!$this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
		}

		$user = $users->where('email', $this->request->getPost('email'))
			->where('reset_hash', $this->request->getPost('token'))
			->first();

		if (is_null($user)) {
			return redirect()->back()->with('error', lang('Auth.forgotNoUser'));
		}

		// Reset token still valid?
		if (!empty($user->reset_expires) && time() > $user->reset_expires->getTimestamp()) {
			return redirect()->back()->withInput()->with('error', lang('Auth.resetTokenExpired'));
		}

		// Success! Save the new password, and cleanup the reset hash.
		$user->password 		= $this->request->getPost('password');
		$user->reset_hash 		= null;
		$user->reset_at 		= date('Y-m-d H:i:s');
		$user->reset_expires    = null;
		$users->save($user);

		return redirect()->route('login')->with('message', lang('Auth.resetSuccess'));
	}

	/**
	 * Activate account.
	 *
	 * @return mixed
	 */
	public function activateAccount()
	{
		$users = new UserModel();

		// First things first - log the activation attempt.
		$users->logActivationAttempt(
			$this->request->getGet('token'),
			$this->request->getIPAddress(),
			(string) $this->request->getUserAgent()
		);

		$throttler = Services::throttler();

		if ($throttler->check($this->request->getIPAddress(), 2, MINUTE) === false) {
			return Services::response()->setStatusCode(429)->setBody(lang('Auth.tooManyRequests', [$throttler->getTokentime()]));
		}

		$user = $users->where('activate_hash', $this->request->getGet('token'))
			->where('active', 0)
			->first();

		if (is_null($user)) {
			return redirect()->route('login')->with('error', lang('Auth.activationNoUser'));
		}

		$user->activate();

		$users->save($user);

		return redirect()->route('login')->with('message', lang('Auth.registerSuccess'));
	}

	/**
	 * Resend activation account.
	 *
	 * @return mixed
	 */
	public function resendActivateAccount()
	{
		if ($this->config->requireActivation === false) {
			return redirect()->route('login');
		}

		$throttler = Services::throttler();

		if ($throttler->check($this->request->getIPAddress(), 2, MINUTE) === false) {
			return Services::response()->setStatusCode(429)->setBody(lang('Auth.tooManyRequests', [$throttler->getTokentime()]));
		}

		$login = urldecode($this->request->getGet('login'));
		$type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		$users = new UserModel();

		$user = $users->where($type, $login)
			->where('active', 0)
			->first();

		if (is_null($user)) {
			return redirect()->route('login')->with('error', lang('Auth.activationNoUser'));
		}

		$activator = Services::activator();
		$sent = $activator->send($user);

		if (!$sent) {
			return redirect()->back()->withInput()->with('error', $activator->error() ?? lang('Auth.unknownError'));
		}

		// Success!
		return redirect()->route('login')->with('message', lang('Auth.activationSuccess'));
	}
}
