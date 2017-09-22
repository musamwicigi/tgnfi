<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Goodnews extends CI_Model{
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function inspirations()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('inspirational', 1);
                return $query->result();
        }
        public function dailyquotes()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('daily_quotes', 1);
                return $query->result();
        }
        public function pastors_desk()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('sermon',1);
                return $query->result();

        }
        public function welcome_today()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('welcome',2);
                return $query->result();

        }
        public function praiseand_worship()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('praiseandworship',1);
                return $query->result();

        }
        public function bible_study()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('biblestudy',1);
                return $query->result();

        }
        public function weekly_announcements()        
        {
                $this->db->select('*');
                $this->db->from('announcements');
                $results = $this->db->get();
                return $results->result();
        }

        public function weekly_announcements1()        
        {
                $this->db->order_by("announcements_id","");
                $query = $this->db->get('announcements',2);
                return $query->result();
        }

        public function announcements_item($announcements_id)        
        {
                $this->db->from('announcements');
                $this->db->where(array('announcements_id'=>$announcements_id));
                return $this->db->get()->result();
                
        }
         public function announcements_list()        
        {
                $this->db->order_by("announcements_id","desc");
                $query = $this->db->get('announcements',10);
                return $query->result();
                
        }
        public function dorcas()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('tabitha',4);
                return $query->result();

        }
        public function keephope_alive()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('keephopealive',8);
                return $query->result();

        }
         public function keephope_alives()
        {
                $this->db->order_by("date","desc");
                $query = $this->db->get('keephopealive',1);
                return $query->result();

        }
        public function pastorsword()
        {
                $this->db->order_by("date","desc");
                $query = $this->db->get('pastorsdesk',1);
                return $query->result();

        }
        public function keephopealive30()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('keephopealive',30);
                return $query->result();

        }
     public function khatoday()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('keephopealive',1);
                return $query->result();

        }
         public function praise_news()
        {
                $this->db->order_by("date","desc");
                $query = $this->db->get('praisenews',4);
                return $query->result();

        }
        public function youth_news()
        {
                $this->db->order_by("date","desc");
                $query = $this->db->get('youthnews',3);
                return $query->result();

        }
        public function youth_topics()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('youthtopics',10);
                return $query->result();

        }
        public function youth_topics1()
        {
                $this->db->order_by("date","desc");
                $query = $this->db->get('youthtopics',1);
                return $query->result();

        }  
         public function event()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('event', 5);
                return $query->result();
            }
            
        public function get_event($event_id){
            $this->db->from('event');
            $this->db->where(array('event_id'=>$event_id));
            return $this->db->get()->result();
         }


        public function blog()
        {
                $this->db->order_by("no","desc");
                $query = $this->db->get('blog', 5);
                return $query->result();

        }
         public function get_article($blog_id){
            $this->db->from('blog');
            $this->db->where(array('blog_id'=>$blog_id));
            return $this->db->get()->result();
         }


         public function list_article_10(){
                $this->db->order_by("no","desc");
                $query = $this->db->get('blog', 10);
                return $query->result();

         }

          public function youtube(){
                $this->db->order_by("no","desc");
                $query = $this->db->get('youtube', 6);
                return $query->result();

         }

         public function sermon(){        
                $this->db->order_by("no","desc");
                $query = $this->db->get('sermon', 5);
                return $query->result();
            }
             public function sermon1(){        
                $this->db->order_by("no","desc");
                $query = $this->db->get('sermon', 1);
                return $query->result();
            }
            public function blog1(){        
                $this->db->order_by("no","desc");
                $query = $this->db->get('blog', 1);
                return $query->result();
            }


         public function get_sermon($sermon_id){
            $this->db->from('sermon');
            $this->db->where(array('sermon_id'=>$sermon_id));
            return $this->db->get()->result();
         }


         public function list_sermon_10(){
                $this->db->order_by("no","desc");
                $query = $this->db->get('sermon', 10);
                return $query->result();
            }

        
               
}
