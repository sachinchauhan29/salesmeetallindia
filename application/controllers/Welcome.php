<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Salesmeet_model');
		$this->load->helper('common_helper');
		date_default_timezone_set('Asia/Kolkata');
	}





	public function index()
	{

		$this->load->view('index');
	}

	public function chartadmin()
	{
		$data['total_participation'] = $this->Salesmeet_model->totalparticipation();
		$data['abm_question1'] = $this->Salesmeet_model->abm_question();
		$data['rbm_question1'] = $this->Salesmeet_model->rbm_question();
		$data['sales_question1'] = $this->Salesmeet_model->Sales_question();
		$data['other_question1'] = $this->Salesmeet_model->other_question();
		$data['abm_question2'] = $this->Salesmeet_model->abm_question2();
		$data['rbm_question2'] = $this->Salesmeet_model->rbm_question2();
		$data['sales_question2'] = $this->Salesmeet_model->sales_question2();
		$data['other_question2'] = $this->Salesmeet_model->other_question2();


		$data['abm_question3'] = $this->Salesmeet_model->abm_question3();
		$data['rbm_question3'] = $this->Salesmeet_model->rbm_question3();
		$data['sales_question3'] = $this->Salesmeet_model->sales_question3();
		$data['other_question3'] = $this->Salesmeet_model->other_question3();

		$data['abm_question4'] = $this->Salesmeet_model->abm_question4();
		$data['rbm_question4'] = $this->Salesmeet_model->rbm_question4();
		$data['sales_question4'] = $this->Salesmeet_model->sales_question4();
		$data['other_question4'] = $this->Salesmeet_model->other_question4();

		$data['abm_question5'] = $this->Salesmeet_model->abm_question5();
		$data['rbm_question5'] = $this->Salesmeet_model->rbm_question5();
		$data['sales_question5'] = $this->Salesmeet_model->sales_question5();
		$data['other_question5'] = $this->Salesmeet_model->other_question5();

		$data['abm_question6'] = $this->Salesmeet_model->abm_question6();
		$data['rbm_question6'] = $this->Salesmeet_model->rbm_question6();
		$data['sales_question6'] = $this->Salesmeet_model->sales_question6();
		$data['other_question6'] = $this->Salesmeet_model->other_question6();


		$data['abm_question7'] = $this->Salesmeet_model->abm_question7();
		$data['rbm_question7'] = $this->Salesmeet_model->rbm_question7();
		$data['sales_question7'] = $this->Salesmeet_model->sales_question7();
		$data['other_question7'] = $this->Salesmeet_model->other_question7();

		$data['abm_question8'] = $this->Salesmeet_model->abm_question8();
		$data['rbm_question8'] = $this->Salesmeet_model->rbm_question8();
		$data['sales_question8'] = $this->Salesmeet_model->sales_question8();
		$data['other_question8'] = $this->Salesmeet_model->other_question8();


		$data['abm_question9'] = $this->Salesmeet_model->abm_question9();
		$data['rbm_question9'] = $this->Salesmeet_model->rbm_question9();
		$data['sales_question9'] = $this->Salesmeet_model->sales_question9();
		$data['other_question9'] = $this->Salesmeet_model->other_question9();

		$data['abm_question10'] = $this->Salesmeet_model->abm_question10();
		$data['rbm_question10'] = $this->Salesmeet_model->rbm_question10();
		$data['sales_question10'] = $this->Salesmeet_model->sales_question10();
		$data['other_question10'] = $this->Salesmeet_model->other_question10();

		$data['abm_question11'] = $this->Salesmeet_model->abm_question11();
		$data['rbm_question11'] = $this->Salesmeet_model->rbm_question11();
		$data['sales_question11'] = $this->Salesmeet_model->sales_question11();
		$data['other_question11'] = $this->Salesmeet_model->other_question11();

		$data['abm_question12'] = $this->Salesmeet_model->abm_question12();
		$data['rbm_question12'] = $this->Salesmeet_model->rbm_question12();
		$data['sales_question12'] = $this->Salesmeet_model->sales_question12();
		$data['other_question12'] = $this->Salesmeet_model->other_question12();

		$data['abm_question13'] = $this->Salesmeet_model->abm_question13();
		$data['rbm_question13'] = $this->Salesmeet_model->rbm_question13();
		$data['sales_question13'] = $this->Salesmeet_model->sales_question13();
		$data['other_question13'] = $this->Salesmeet_model->other_question13();

		$data['abm_question14'] = $this->Salesmeet_model->abm_question14();
		$data['rbm_question14'] = $this->Salesmeet_model->rbm_question14();
		$data['sales_question14'] = $this->Salesmeet_model->sales_question14();
		$data['other_question14'] = $this->Salesmeet_model->other_question14();

		$data['abm_question15'] = $this->Salesmeet_model->abm_question15();
		$data['rbm_question15'] = $this->Salesmeet_model->rbm_question15();
		$data['sales_question15'] = $this->Salesmeet_model->sales_question15();
		$data['other_question15'] = $this->Salesmeet_model->other_question15();
		// print_r($data);
		// die;
		$this->load->view('chartadmin', $data);
	}
	public function usedqr()
	{

		$this->load->view('index');
	}

	public function submit_form()
	{
		// Store number in session
		$this->session->set_userdata('user_number', $this->input->post('number'));

		// Assume userid comes from session or some other source
		$userid = $this->session->userdata('userid');

		$name = $this->input->post('name');
		$designation = $this->input->post('designation');
		$state = $this->input->post('state');

		// Create an array with form data
		$arr = array(
			'name' => $name,
			'number' => $this->input->post('number'),
			'designation' => $designation,
			'state' => $state,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_login', $arr);
		$user_number = $this->session->userdata('user_number');
		$this->db->order_by('id', 'DESC'); // Assuming 'id' is your primary key
		$check = $this->db->get_where('user_question', array('number' => $user_number))->row();


		// print_r($check->pageid);
		// die;
		if ($check->pageid == $check->pageid) {

			$next_pageid = $check->pageid + 1;
			redirect(base_url('question' . $next_pageid));
		} else {

			$this->load->view('question1');
		}
		//redirect(base_url('question1'));
	}


	public function question1()
	{
		$this->load->view('question1');

	}

	public function question2()
	{

		$this->load->view('question2');
	}
	public function question3()
	{

		$this->load->view('question3');
	}
	public function question4()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question4');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question5()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question5');
		} else {

			redirect(base_url('/'));
		}
	}

	public function question6()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question6');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question7()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question7');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question8()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question8');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question9()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question9');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question10()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question10');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question11()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question11');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question12()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question12');
		} else {

			redirect(base_url('/'));
		}
		;
	}
	public function question13()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question13');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question14()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question14');
		} else {

			redirect(base_url('/'));
		}
	}
	public function question15()
	{
		$user_number = $this->session->userdata('user_number');
		//print_r($user_number);
		// die;

		if ($user_number) {
			$this->load->view('question15');
		} else {

			redirect(base_url('/'));
		}
	}
	public function thanks()
	{

		$this->load->view('thanks');
	}
	public function questionone()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');


		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');


		if ($plan == 'C.10%') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question2'));
	}

	public function question2form()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');


		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'B.5') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question3'));
	}

	public function questinthreeform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;


		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'A.Increase follow-up% of hot and super-hot enquiries') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question4'));
	}


	public function questintfourform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'A.150 TIV or 20 tractor deliveries per DSE whichever is less, subject to minimum of 4 DSE') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question5'));
	}
	public function questintfiveform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');


		if ($plan == 'B.Dealer having 150+ sales volume annually') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question6'));
	}
	public function questintsixform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'B.Branch at every 30 to 50 km for better customer connect') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question7'));
	}
	public function questintsevenform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'D.State') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question8'));
	}
	public function questinteightform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'C.Euro 47Plus PH') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question9'));
	}
	public function questintnineform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');


		if ($plan == 'A.86') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question10'));
	}
	public function questintxform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'B.Demo') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question11'));
	}
	public function questintxiform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'A.100%') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question12'));
	}
	public function questintxiiform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'C.3rd to 26th') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question13'));
	}
	public function questintxiiiform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'C.45 days') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question14'));
	}
	public function questintixform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'B.1st Dec, 2024') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('question15'));
	}
	public function questintxfiveform()
	{

		// Store number in session
		$user_number = $this->session->userdata('user_number');
		// print_r($user_number);
		// die;

		$question = $this->input->post('question');
		$plan = $this->input->post('plan');
		$pageid = $this->input->post('pageid');

		if ($plan == 'C.1.5 crores') {
			$correct_answers = '1';
		} else {
			$correct_answers = '0';
		}
		// Create an array with form data
		$arr = array(
			'question' => $question,
			'number' => $user_number,
			'answer' => $plan,
			'pageid' => $pageid,
			'correct_answers' => $correct_answers,
		);
		// print_r($arr);
		// die;
		// Insert data into database
		$this->db->insert('user_question', $arr);

		// Redirect to the question page
		redirect(base_url('thanks'));
	}

}
