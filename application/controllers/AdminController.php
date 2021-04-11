<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('array');
        $this->load->helper('date');
        $this->load->helper('security');
    }

	public function index()
	{  
        $data = array();
        
        if(isset($_SESSION['is_logged_in']))
        {
            $s_id = $_SESSION['id'];

            $data = array();
            $data['brands_count']=$this->db->count_all_results('tbl_brands');
            $data['cars_count']=$this->db->count_all_results('tbl_cars');
            $data['sess_results'] = $this->User_model->getAllData($s_id);
            $data['main_content'] = $this->load->view('Admin/Dashboard',$data,true);
            $this->load->view('Admin/template/header');
            $this->load->view('Admin/Admindashboard',$data);
            $this->load->view('Admin/template/footer');
        }
        else
        {
            redirect('login');
        }
  
	}

    public function create_brand()
    {
        if(isset($this->session->userdata['email']))
        {
        $data = array();
        $data['main_content'] = $this->load->view('Admin/createbrand',NULL,true);
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/Admindashboard',$data);
        $this->load->view('Admin/template/footer');
        }
        else
        {
            redirect('login');
        }

        
        if(isset($_POST['submit']) && $_POST['brand'] != '')
        {
            $results['brand_name'] = $this->security->xss_clean($this->input->post('brand'));
            $result = $this->Admin_model->add($results);

            if($_POST['submit'] != '' && $result == 1)
            {
                echo '<script>alert("Brand name already exists");</script>';
            }
            else if($_POST['submit'] != '')
            {
                echo '<script>alert("Brand name successfully added");</script>';
            }
            
        }
     
    }

    public function manage_brands()
    {
        if(isset($this->session->userdata['email']))
        {


        $data = array();


        $data['result'] = $this->Admin_model->get_data();
        $query = $this->db->get_where('tbl_brands',['id'=>'5']);
        $data['results'] = $query->result();

        $data['main_content'] = $this->load->view('Admin/Managebrands',$data,true);
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/Admindashboard',$data);
        $this->load->view('Admin/template/footer');
        
        }
        else
        {
            redirect('login');
        }

    }

    public function add_vehicle()
    {

        if(isset($this->session->userdata['email']))
        {
        $data = array();

        $data['results'] = $this->Admin_model->get_data();

        $data['main_content'] = $this->load->view('Admin/Addcar',$data,true);
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/Admindashboard',$data);
        $this->load->view('Admin/template/footer');
        }
        else
        {
            redirect('login');
        }
    }

    public function addnew_vehicle()
    {

        $param = array();

        $path = $config['upload_path']    = 'uploads/imgs/';
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if(isset($_FILES['img1']['name']))
        {
            if ($this->upload->do_upload('img1'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['vimg1'] = $full_path;
            }
        }

        if(isset($_FILES['img2']['name']))
        {
            if ($this->upload->do_upload('img2'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['vimg2'] = $full_path;
            }

        }

        if(isset($_FILES['img3']['name']))
        {
            if ($this->upload->do_upload('img3'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['vimg3'] = $full_path;
            }
            
        }

        if(isset($_FILES['img4']['name']))
        {
            if ($this->upload->do_upload('img4'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['vimg4'] = $full_path;
            }
        }

        if(isset($_FILES['img5']['name']))
        {
            if ($this->upload->do_upload('img5'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['vimg5'] = $full_path;
            }

        }
                $param['acc1'] = isset($_POST['chk1']) ? 1 : 0;
                $param['acc2'] = isset($_POST['chk2']) ? 1 : 0;
                $param['acc3'] = isset($_POST['chk3']) ? 1 : 0;
                $param['acc4'] = isset($_POST['chk4']) ? 1 : 0;
                $param['acc5'] = isset($_POST['chk5']) ? 1 : 0;
                $param['acc6'] = isset($_POST['chk6']) ? 1 : 0;
                $param['acc7'] = isset($_POST['chk7']) ? 1 : 0;
                $param['acc8'] = isset($_POST['chk8']) ? 1 : 0;
                $param['acc9'] = isset($_POST['chk9']) ? 1 : 0;
                $param['acc10'] = isset($_POST['chk10']) ? 1 : 0;
                $param['acc11'] = isset($_POST['chk11']) ? 1 : 0;
                $param['acc12'] = isset($_POST['chk12']) ? 1 : 0;
                isset($_POST['gas']) ? $param['fuel'] = $this->input->post('gas') : '';
                isset($_POST['transmission']) ? $param['engine'] = $this->input->post('transmission') : '';
                $param['brand']  = $this->input->post('brands');
                $param['name'] = $this->input->post('vname');
                $param['model'] = $this->input->post('vmodel');
                $param['price'] = $this->input->post('vprice');
                $param['price1'] = $this->input->post('vprice2');
                $param['price2'] = $this->input->post('vprice3');
                $param['description'] = $this->input->post('vdescription');
                $param['Model_Year'] = $this->input->post('vmyear');
               
                
                $this->Admin_model->add_car($param);
                echo json_encode($param);
                $insert_id = $this->db->insert_id();

    }

    public function manage_vehicle()
    {
        if(isset($this->session->userdata['email']))
        {
        $data = array();
        $data['result'] = $this->Admin_model->get_data_join();
        $data['brands_result'] = $this->Admin_model->get_data_join2();
        $data['main_content'] = $this->load->view('Admin/Managevehicles',$data,true);
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/Admindashboard',$data);
        $this->load->view('Admin/template/footer');
        }
        else
        {
            redirect('login');
        }
        
        json_encode($data['brands_result']);
    }

   

    public function fetch_brand()
    {
        $rows = $this->Admin_model->get_data();

        echo json_encode($rows);
    }


    public function edit_brand()
    {
        if(isset($_POST['brand_id']))
        {
            $data = array();
            $query = $this->db->get_where('tbl_brands',['id'=> $_POST['brand_id']]);
            $rows = $query->result();
            echo json_encode($rows);
        }
    }

    public function update_brand()
    {
         if(!empty($_POST))
        {
           if($_POST["b_id"] != '') 
           {
                
                date_default_timezone_set('UTC');
                $data = array();

                date_default_timezone_set('Asia/Manila');
                $todays_date = date("y-m-d h:i:sa");
                $today = strtotime($todays_date);

                $data['id']= $_POST["b_id"];     
                $data['brand_name'] = $this->input->post('b_name');
                $data['updated_at'] = date("Y-m-d h:i:sa", $today);

                $this->Admin_model->updateBrand($data);
                // $this->db->update('tbl_brands', $data,['id' => $id]);
                echo json_encode($data);
           }
    
        }

    }

    public function delete_brand()
    {
        if($_POST["d_id"] != '') 
        {
             date_default_timezone_set('UTC');
             $data = array();
             date_default_timezone_set('Asia/Manila');
             $todays_date = date("y-m-d h:i:sa");
             $today = strtotime($todays_date);

             $data['id']= $_POST["d_id"];     
             $data['status'] = '1';
             $data['updated_at'] = date("Y-m-d h:i:sa", $today);

             $this->Admin_model->updateBrand($data);
             echo json_encode($data);
        }

    }


// edit-vehicle controller

        // public function edit_vehicle()
        // {
        //     $datas= 5;

        //     if(isset($_POST['v_id']))
        //     {
                
        //         $data = array();
        //         $data['vid'] = $_POST['v_id'];
        //         $data['vids'] = $this->Admin_model->get_data_join2($data);
        //         $query = $this->db->get_where('tbl_cars',['id'=> $_POST['v_id']]);
        //         $rows = $query->result();

        //         echo json_encode($rows);
                
        //     }
        // }

        public function edit_vehicle($id)
        {
 
            if(isset($this->session->userdata['email']))
            {
             $data = array();
             date_default_timezone_set('Asia/Manila');
             $todays_date = date("y-m-d h:i:sa");
             $today = strtotime($todays_date);
            //  $data['id']= $_POST["v_id"];     
             $data['ids'] = $this->Admin_model->editVehicle($id);
             // $this->db->update('tbl_brands', $data,['id' => $id]);
             $this->load->view('Admin/template/header');
             $this->load->view('Admin/AdminSingleEdit',$data);
             
            }
            else 
            {
                redirect('login');
            }
         
        }

        public function update_vehicle($id)
        {
                $path = $config['upload_path']    = 'uploads/imgs/';
                $config['allowed_types']        = '*';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);


                    date_default_timezone_set('UTC');
                    $data = array();
    
                    date_default_timezone_set('Asia/Manila');
                    $todays_date = date("y-m-d h:i:sa");
                    $today = strtotime($todays_date);

                    if(isset($_FILES['u_img1']['name']))
                    {
                        if ($this->upload->do_upload('u_img1'))
                        {
                            $uploaded_img= $this->upload->data();
                            $full_path = $path.$uploaded_img['file_name'];
                            $data['vimg1'] = trim($full_path);
                        }
                      
                    }
                    if(isset($_FILES['u_img2']['name']))
                    {
                        if ($this->upload->do_upload('u_img2'))
                        {
                            $uploaded_img= $this->upload->data();
                            $full_path = $path.$uploaded_img['file_name'];
                            $data['vimg2'] = $full_path;
                        }
                      
                    }
                    if(isset($_FILES['u_img3']['name']))
                    {
                        if ($this->upload->do_upload('u_img3'))
                        {
                            $uploaded_img= $this->upload->data();
                            $full_path = $path.$uploaded_img['file_name'];
                            $data['vimg3'] = $full_path;
                        }
                      
                    }
                    if(isset($_FILES['u_img4']['name']))
                    {
                        if ($this->upload->do_upload('u_img4'))
                        {
                            $uploaded_img= $this->upload->data();
                            $full_path = $path.$uploaded_img['file_name'];
                            $data['vimg4'] = $full_path;
                        }
                      
                    }
                    if(isset($_FILES['u_img5']['name']))
                    {
                        if ($this->upload->do_upload('u_img5'))
                        {
                            $uploaded_img= $this->upload->data();
                            $full_path = $path.$uploaded_img['file_name'];
                            $data['vimg5'] = $full_path;
                        }
                      
                    }

        
                    $data['acc1'] = isset($_POST['u_chk1']) ? 1 : 0;
                    $data['acc2'] = isset($_POST['u_chk2']) ? 1 : 0;
                    $data['acc3'] = isset($_POST['u_chk3']) ? 1 : 0;
                    $data['acc4'] = isset($_POST['u_chk4']) ? 1 : 0;
                    $data['acc5'] = isset($_POST['u_chk5']) ? 1 : 0;
                    $data['acc6'] = isset($_POST['u_chk6']) ? 1 : 0;
                    $data['acc7'] = isset($_POST['u_chk7']) ? 1 : 0;
                    $data['acc8'] = isset($_POST['u_chk8']) ? 1 : 0;
                    $data['acc9'] = isset($_POST['u_chk9']) ? 1 : 0;
                    $data['acc10'] = isset($_POST['u_chk10']) ? 1 : 0;
                    $data['acc11'] = isset($_POST['u_chk11']) ? 1 : 0;
                    $data['acc12'] = isset($_POST['u_chk12']) ? 1 : 0;
                    $data['fuel']  = isset($_POST['u_gas']) ? 1 : 0;
                    $data['engine']  = isset($_POST['u_transmission']) ? 1 : 0;
                    $data['id']= $id;    
                    $data['name'] = $this->input->post('u_name');
                    $data['model'] = $this->input->post('u_model');
                    $data['price'] = $this->input->post('u_price');
                    $data['description'] = $this->input->post('u_desc');
                    $data['Model_Year'] = $this->input->post('u_year');
                    $data['price'] = $this->input->post('u_vprice1');      
                    $data['price1'] = $this->input->post('u_vprice2');  
                    $data['price2'] = $this->input->post('u_vprice3');                
                    $data['updated_at'] = date("Y-m-d h:i:sa", $today);
    
                    $this->Admin_model->updateVehicle($data);
                    // $this->db->update('tbl_brands', $data,['id' => $id]);
                    echo json_encode($data);
        
        }
        public function booking()
        {
            if(isset($this->session->userdata['email']))
            {
                $data = array();
                $data['results'] = $this->Admin_model->getdataForm();
                $data['main_content'] = $this->load->view('Admin/Newbooking',$data,true);
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/Admindashboard',$data);
                $this->load->view('Admin/template/footer');
                json_encode( $data['results']);
            }
            else
            {
                redirect('login');
            }
        }

        public function confirmed_booking()
        {
            if(isset($this->session->userdata['email']))
            {
                $data = array();
                $data['results'] = $this->Admin_model->confirmedBooking();
                $data['main_content'] = $this->load->view('Admin/Confirmedbookings',$data,true);
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/Admindashboard',$data);
                $this->load->view('Admin/template/footer');
                json_encode( $data['results']);
            }
            else
            {
                redirect('login');
            }
        }

        public function declined_booking()
        {
            if(isset($this->session->userdata['email']))
            {
                $data = array();
                $data['results'] = $this->Admin_model->declinedBooking();
                $data['main_content'] = $this->load->view('Admin/Declinedbookings',$data,true);
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/Admindashboard',$data);
                $this->load->view('Admin/template/footer');
                json_encode( $data['results']);
            }
            else
            {
                redirect('login');
            }
        }

        public function viewProfile($id)
        {
            if(isset($this->session->userdata['email']))
            {
             $data = array();
             $data['info'] = $this->Admin_model->getProfileData($id);
             $this->load->view('Admin/template/header');
             $this->load->view('Admin/AdminSingleBooking',$data);
            //  echo json_encode($data['info']);
            }
            else 
            {
                redirect('login');
            }
        }
        public function admin_view_car($id)
        {
            $data['car_info'] = $this->Admin_model->admin_view_single($id);
            $this->load->view('Admin/template/header');
            $this->load->view('Admin/AdminSingleView',$data);

            // echo json_encode($data['car_info']);
        }

        public function delete_car()
        {
            if($_POST['d_id'] != '')
            {
                $id = $_POST['d_id'];
                $this->Admin_model->delete($id);
                echo json_encode($id);
            }
            
        }

        public function confirm_booking()
        {

            $id = $_POST['data_id'];
            if($_POST['data_id'] != '')
            {
                $id = $_POST['data_id'];
                $this->Admin_model->confirm($id);
                echo json_encode($id);
            }
            
        }

        public function decline_booking()
        {

            $id = $_POST['data_id'];
            if($_POST['data_id'] != '')
            {
                $id = $_POST['data_id'];
                $this->Admin_model->decline($id);
                echo json_encode($id);
            }
            
        }

        public function load_notifications()
        {
           $counts =  $this->Admin_model->count_notifications();

           $data = array(
               'unseen_notification' => $counts['count'],
               'notification' => $counts['output']
           );
           
          echo json_encode($data);

        }

        public function read_notif()
        {
            $id = $_POST['data_id'];

            if($id != '')
            {
                $this->Admin_model->read_notifs($id);
                echo json_encode($id);
            }
        }

        public function users_view()
        {
            if(isset($this->session->userdata['email']))
            {
                $data = array();
                $data['results'] = $this->Admin_model->get_users();
                $data['main_content'] = $this->load->view('Admin/UsersView',$data,true);
                $this->load->view('Admin/template/header');
                $this->load->view('Admin/Admindashboard',$data);
                $this->load->view('Admin/template/footer');
                json_encode( $data['results']);
            }
            else
            {
                redirect('login');
            }
        }

}

