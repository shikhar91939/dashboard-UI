<?php
class Newdashboard extends CI_Controller {
 
    /**
    * Responsable for auto load the model
    * @return void
    */
    public function __construct()
    {
        parent::__construct();
        session_start();
        
        // $this->load->model('products_model');
        // $this->load->model('brands_model');
        // $this->load->model('colors_model');
        //$this->load->driver('session');
       $this->load->database();
       // $this->load->helper('url');
        // $this->load->helper(array('form', 'url'));
        // $config['upload_path'] = './uploads/products/';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size']  = '100';
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';

        // $this->load->library('upload', $config);     
      //  $this->load->library('grocery_CRUD');
        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
        
        
        
        
    }
    
    public function index()
    {
    $data['prevent_css'] = true;
    $data['main_content'] = 'admin/newdashboard';
    $this->load->view('includes/template', $data);
    
    
    }

    public function foo()
    {
        echo json_encode("returned");
    }
    
    public function submitDateRange()
    {
    $start=$this->input->post('start');
    $end=$this->input->post('end');

    // $start = implode('/', array_reverse(explode('-', $start)));
    // $end = implode('/', array_reverse(explode('-', $end)));
    // echo $this->dateFormatter("2015-05-01");

    $start = str_replace('/','-',$start);
    $end = str_replace('/','-',$end);

    // $start = "2015-05-01";
    // $end = "2015-05-05";


    $date_interval_obj = date_diff(date_create($start), date_create($end));// date_diff() works in yyyy-mm--dd . e.g. 2013-03-15
    // var_dump($date_interval_obj->format("%a")); // format("%R%a") will give string(2) "+4"   --where--   format("%a") gives string(1) "4"
    $date_interval = $date_interval_obj->format("%a");

    $start = $this->dateFormatter($start);
    $end = $this->dateFormatter($end);

    $start_comparison = date('m-d-Y',strtotime($start . "+1 days"));


    $response = array('start'=> $start, 'end' => $end, 'start_comparison' => $start_comparison, 'interval'=> $date_interval);
    echo json_encode($response);
    // $this->getInventoryData();
    // echo json_encode($this->getMISdata());
    

    // $response = array('a'=>5);
    // echo json_encode($response);
    }

    public function dateFormatter($date)
    {
        // $array_ymd = explode('-', $date);
        // $array_ymd = array_reverse($array_ymd);
        // $date = implode('/', $array_ymd);

        // now $date format is dd/mm/yyy
        $date =  date('m-d-Y', strtotime($date));//need date in m-d-Y for "+x days" in strtotime
        $date = implode('/', explode('-', $date));

        return $date;
    }

    public function getInventoryData()
    {
        $sqlo = "select t1.id,t1.productid,t4.name as client,t1.old_status,t1.new_status,t1.time_stamp,datediff(now(),t1.time_stamp) from status_update_log as t1 inner join (SELECT max(id) as mid FROM `status_update_log` group by productid) as t2 on t1.id = t2.mid inner join products as t3 on t1.productid = t3.id left join compniesdata as t4 on t3.client_id = t4.id";
        $query = $this->db->query($sqlo);
        $table_sql = $query->result_array();
        echo "<pre>";
        var_dump($table_sql);die;
        echo "</pre>";
    }
    
    public function getMISdata()
    {
        $returnArray = array();
        $hours = 600;
        $hours_compare = 2*$hours;

        $query_total = $this->db->query("SELECT count(id) FROM `status_update_log` where new_status = 'listed' and time_stamp > date_sub(now(),interval $hours_compare hour)");
        $table_sql_compare = $query_total->result_array();
        $mis_upload_count_total = "";
        foreach ($table_sql_compare as $outerArray) 
        {
          foreach ($outerArray as $key => $value) 
          {
            $mis_upload_count_total = $value;
          }
        }

        // var_dump( $mis_upload_count_total);die;

        $query = $this->db->query("SELECT count(id) FROM `status_update_log` where new_status = 'listed' and time_stamp > date_sub(now(),interval $hours hour)");
        $table_sql = $query->result_array();
                        // $timeStamp1 = date("2014-05-04 00:00:00");
                        // $timeStamp2 = date("2015-05-04 19:36:17");
                        // $sqlo = "SELECT count(id) FROM status_update_log where new_status = 'listed' and date(time_stamp) > '$timeStamp1' and date(time_stamp) < '$timeStamp2'";
                        // $query = $this->db->query($sqlo);
                        // $table_sql = $query->result_array();
                        // var_dump($table_sql);die;


        $mis_upload_count = "";

        foreach ($table_sql as $outerArray) 
        {
          foreach ($outerArray as $key => $value) 
          {
            $mis_upload_count = $value;
          }
        }
        $compare_mis = $mis_upload_count_total - $mis_upload_count ;
        $diff_mis= $mis_upload_count  - $compare_mis ;
        $percent_mis =   ($compare_mis == 0) ? "Infinite" : ((double)($diff_mis / $compare_mis) * 100);

        /*$mis_upload_count = "1";*/
        /*$diff_mis = "2";*/
        $mis_percent_display = /*"3";// = */(gettype($percent_mis ) == "string" ) ? $percent_mis :  number_format((float)$percent_mis, 2, '.', '');

        $returnArray["mis_upload_count"] = "" . $mis_upload_count;
        $returnArray["diff_mis"] = "" . $diff_mis;
        $returnArray["mis_percent_display"] = "" . $mis_percent_display;

        // echo "<pre>";
        // var_dump($returnArray);
        // echo "</pre>";
        return $returnArray;
    }
    
}