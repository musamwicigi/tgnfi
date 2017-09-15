<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('goodnews');

		}

	public function index(){
		$data['main_content'] = 'fe/blog/blog';
		$data['blog']=$this->goodnews->blog();
		$data['list_articles']=$this->goodnews->list_article_10();
		$this->load->view('fe/includes/template',$data);
	}
	public function article($no){
		$data['main_content'] = 'fe/blog/article';
		$data['article']=$this->goodnews->get_article($no);
		$data['list_articles']=$this->goodnews->list_article_10();
		$this->load->view('fe/includes/template',$data);
	}

	

	
}