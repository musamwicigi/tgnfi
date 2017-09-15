<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sermon extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('goodnews');

		}

	public function index(){
		$data['main_content'] = 'fe/department/sermon';
		$data['sermon']=$this->goodnews->sermon();
		$data['list_articles']=$this->goodnews->list_sermon_10();
		$this->load->view('fe/includes/template',$data);
	}
	public function sermonarticle($no){
		$data['main_content'] = 'fe/department/sermonarticle';
		$data['sermon']=$this->goodnews->get_sermon($no);
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$data['sermon1']=$this->goodnews->sermon1();
		$this->load->view('fe/includes/template',$data);
	}

	
}