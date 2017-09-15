<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('goodnews'); 
}
	public function index(){
		$data['main_content'] = 'fe/home';
		$data['welcome_today']=$this->goodnews->welcome_today();
		$data['sermon']=$this->goodnews->sermon();
		$data['sermon1']=$this->goodnews->sermon1();
		$data['list_article_10']=$this->goodnews->list_article_10();
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$data['weekly_announcements1']=$this->goodnews->weekly_announcements1();
		$this->load->view('fe/includes/template',$data);
	}
	public function events(){
		$data['main_content'] = 'fe/event';
		$data['welcome_today']=$this->goodnews->welcome_today();
		$data['sermon1']=$this->goodnews->sermon1();
		$data['list_article_10']=$this->goodnews->list_article_10();
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$this->load->view('fe/includes/template',$data);
	}
	public function about_us(){
		$data['main_content'] = 'fe/about';
		$this->load->view('fe/includes/template',$data);
	}
	public function believe(){
		$data['main_content'] = 'fe/believe';
		$data['pastorsword']=$this->goodnews->pastorsword();
		$data['list_articles']=$this->goodnews->list_article_10();
		$this->load->view('fe/includes/template',$data);
	}
	public function pastor(){
		$data['main_content'] = 'fe/pastor';
		$this->load->view('fe/includes/template',$data);
	}
	public function firstlady(){
		$data['main_content'] = 'fe/firstlady';
		$this->load->view('fe/includes/template',$data);
	}
	public function Torgeir(){
		$data['main_content'] = 'fe/department/torgeir';
		$this->load->view('fe/includes/template',$data);
	}
	public function announcements(){
		$data['main_content'] = 'fe/announcements';
		$data['list_articles']=$this->goodnews->list_article_10();
		$data['weekly_announcements']=$this->goodnews->weekly_announcements();
		$this->load->view('fe/includes/template',$data);
	}

	public function announcements_item($announcements_id){
		$data['main_content'] = 'fe/announcements_item';
		$data['announcements_item']=$this->goodnews->announcements_item($announcements_id);
		$data['weekly_announcements']=$this->goodnews->weekly_announcements();
		$data['announcements_list']=$this->goodnews->announcements_list();
		$this->load->view('fe/includes/template',$data);
	}
	
	public function gallery(){
		$data['main_content'] = 'fe/gallery';
		$this->load->view('fe/includes/template',$data);
	}
	public function praise(){
		$data['main_content'] = 'fe/department/praise';
		$data['pastorsword']=$this->goodnews->pastorsword();
		$data['list_articles']=$this->goodnews->list_article_10();
		$data['youtube']=$this->goodnews->youtube();
		$this->load->view('fe/includes/template',$data);
	}
	public function women(){
		$data['main_content'] = 'fe/department/women';
	$data['list_sermon']=$this->goodnews->list_sermon_10();
		$data['youtube']=$this->goodnews->youtube();
		$this->load->view('fe/includes/template',$data);
	}
	public function men(){
		$data['main_content'] = 'fe/department/men';
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$data['youtube']=$this->goodnews->youtube();
		$this->load->view('fe/includes/template',$data);
	}
	public function youth(){
	$data['main_content'] = 'fe/department/youth';
		$data['list_articles']=$this->goodnews->list_article_10();
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$data['sermon1']=$this->goodnews->sermon1();
		$data['youtube']=$this->goodnews->youtube();
		$this->load->view('fe/includes/template',$data);
	}
	public function keephopealive(){
		$data['main_content'] = 'fe/department/keephopealive';
		$data['keephope_alive']=$this->goodnews->keephope_alive();
		$data['keephopealive30']=$this->goodnews->keephopealive30();
	
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$data['khatoday']=$this->goodnews->khatoday();
		$this->load->view('fe/includes/template',$data);
	}
		public function aboutkeephopealive(){
		$data['main_content'] = 'fe/department/aboutkeephopealive';
		$this->load->view('fe/includes/template',$data);
	}


	public function tabitha(){
		$data['main_content'] = 'fe/department/tabitha';
		$this->load->view('fe/includes/template',$data);
	}

	public function article($no){
		$data['main_content'] = 'fe/blog/article';
		$data['article']=$this->goodnews->get_article($no);
		$data['list_articles']=$this->goodnews->list_article_10();
		$this->load->view('fe/includes/template',$data);
	}
	public function sermon($no){
		$data['main_content'] = 'fe/department/sermon_article';
		$data['sermon']=$this->goodnews->get_sermon($no);
		$data['list_sermon']=$this->goodnews->list_sermon_10();
		$this->load->view('fe/includes/template',$data);
	}

	
}