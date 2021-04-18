<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->library(array('email'));
        $this->load->helper('form');
    }

    public function send_email()
    {
        // $config = array();
        // $config['protocol'] = 'smtp';
        // $config['smtp_host'] = 'ss://smtp.googlemail.com';
        // $config['smtp_port'] = '465';
        // $config['smtp_user'] = 'johncarlgabuat@gmail.com';
        // $config['smtp_pass'] = 'i8e3vcrf7h012256789';
        // $config['smtp_crpyto'] = 'ssl';
        // $config['mailtype'] = 'html';
        // $config['charset'] = 'iso-8859-1';
        // $config['wordwrap'] = TRUE;
        // $this->load->library('email');
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'johncarlgabuat@gmail.com',
            'smtp_pass' => 'i8e3vcrf7h012256789',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'newline' => '\r\n',
            'mailtype' => 'html'
        );

        // $this->email->initialize($config);
        // $this->email->set_newline('\r\n');

        $this->load->library('email', $config);
        // $this->email->set_mailtype("html");
        

        $this->email->from('johncarlgabuat@gmail.com', 'Your Name');
        $this->email->to('johncargabuat@gmail.com');
        $this->email->subject('This the test');
        $this->email->message('this is the test message');

        if($this->email->send())
        {
            echo 'Email sent';
        }
        else 
        {
            show_error($this->email->print_debugger());
        }
       
    }


	public function index($offset = null)
	{
        $limit = 6;
        if(!is_null($offset))
        {
            $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        }
		$data = array();

		// $data['results'] = $this->User_model->view_join_data($limit,$offset);
        $data['rowsz'] = $this->User_model->total_records_count();

       
        $config['base_url'] = base_url('UserController/index');
        $config['total_rows'] =  $this->User_model->get_Data($limit,$offset,$count=true);
        $config['uri_segment'] = 3;
        $config['per_page'] = $limit;

        $config['full_tag_open'] = '<ul class="pagination d-flex justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false ;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="page-item prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<liclass="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<liclass="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['query_string_segment'] = 'page';
        // $config['page_query_string'] = true;
        // $config['use_page_numbers'] = true;

        $this->pagination->initialize($config);

        $data['slider'] = $this->User_model->view_join_data();
        $data['results'] = $this->User_model->get_Data($limit,$offset,$count=false);

        // echo json_encode($data['results']);

        $this->load->view('templates/header');
		$this->load->view('Home',$data);
        $this->load->view('templates/footer');
	}

    public function reserveValidation($vid)
    {
        // $data= array();
        // $ids = $this->input->post('dataId');
        // $startDate = $this->input->post('data_startDate');
        // $endDate = $this->input->post('data_endDate');

        // $from = strtotime($startDate);
        // $formatted_from = date('Y-m-d H:i:s', $from);

        // $to = strtotime($endDate);
        // $formatted_to = date('Y-m-d H:i:s', $to);
        // // echo $to;
        // // echo $to;

        // $data['rez'] = $this->User_model->getBooking($ids,$startDate,$endDate);

        // if(empty($data['rez']))
        // {
        //     echo json_encode('true');
        // }
        // else 
        // {
        //     echo json_encode('null');
        //     echo json_encode($data['rez']);
        // }
            $data= array();
            // $ids = $this->input->post('dataId');
            $startDate = $this->input->post('data_startDate');
            $endDate = $this->input->post('data_endDate');

            $from = date('Y-m-d H:i:s', strtotime($startDate));
            $to = date('Y-m-d H:i:s', strtotime($endDate));

            // echo $from;
            // echo $to;

            $data['rez'] = $this->User_model->getBooking($vid,$from,$to);

            if(empty($data['rez']))
            {
                echo json_encode('true');
            }
            else 
            {
                // echo json_encode('null');
                echo json_encode($data['rez']);
            }
        
        
    }

    public function view_vehicle($id)
    {
        $data = array();
		$data['results'] = $this->Admin_model->get_data_cars();
        $data['result'] = $this->User_model->view_Single_car($id);

        // $param['single_id'] = $id;
        // $param['date_from'] = $this->input->post('d_cdateform');
        // $param['date_to'] = $this->input->post('d_cdateto');

        // $data['rez'] = $this->User_model->getBooking($id,$param);

        // echo json_encode($param);

        $this->load->view('templates/header');
		$this->load->view('SingleCar',$data);
        $this->load->view('templates/footer');
    }

    public function reserverForm()
    {
        $data = array();   
        if(isset($_SESSION['is_logged_in']) == true )
        {
            $s_id = $_SESSION['id'];
            $data['results'] = $this->User_model->getSessionData($s_id);
        }
        $this->load->view('templates/header');
		$this->load->view('ReserveForm',$data);
        $this->load->view('templates/footer');
    }

    public function createBooking()
    {
        $param['vh_id'] = $this->input->post('vechicle_id');
        $param['fname'] = $this->input->post('fname');
        $param['lname'] = $this->input->post('lname');
        $param['email'] = $this->input->post('email');
        $param['mobile'] = $this->input->post('mobile');
        $param['house_no'] = $this->input->post('house_no');
        $param['village'] = $this->input->post('village');
        $param['city'] = $this->input->post('city');
        $param['state'] = $this->input->post('state');
        $param['zip'] = $this->input->post('zip');
       
        $param['day'] = $this->input->post('d_day');
        $param['total'] = $this->input->post('d_total');
        $param['cname'] = $this->input->post('d_cname');
        $param['cmodel'] = $this->input->post('d_cmodel');
        $param['cyear'] = $this->input->post('d_cyear');
        $param['clocation'] = $this->input->post('d_clocation');
        $param['cdestination'] = $this->input->post('d_cdestination');
        $param['type'] = $this->input->post('type');
        $param['act_id'] = $this->input->post('acct_id');
        
        $from = date('Y-m-d H:i:s', strtotime($this->input->post('d_cdateform')));
        $to = date('Y-m-d H:i:s', strtotime($this->input->post('d_cdateto')));
        $param['cdateform'] = $from;
        $param['cdateto'] = $to;
        
        
        if(isset($_FILES['valid_id']['name']))
        {
            $path = $config['upload_path']  = 'uploads/imgs/';
            $config['allowed_types']        = '*';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('valid_id'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['valid_id'] = $full_path;
                // echo $full_path;
            }
        }

        if(isset($_FILES['billing']['name']))
        {
            $path = $config['upload_path']  = 'uploads/imgs/';
            $config['allowed_types']        = '*';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('billing'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['billing'] = $full_path;
            }
        }
        
        if(isset($_FILES['selfie']['name']))
        {
            $path = $config['upload_path']  = 'uploads/imgs/';
            $config['allowed_types']        = '*';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('selfie'))
            {
                $uploaded_img= $this->upload->data();
                $full_path = $path.$uploaded_img['file_name'];
                $param['selfie'] = $full_path;
            }
        }
        $this->User_model->add_booking($param);
        echo json_encode($param);
    }

    public function contactInquiries()
    {
        $data = array();
        $data['FirstName'] = $this->input->post('Fname');
        $data['LastName'] = $this->input->post('Lname');
        $data['Email'] = $this->input->post('email');
        $data['Contact'] = $this->input->post('Contact');
        $data['Message'] = $this->input->post('inquiry');

        $this->User_model->insertInquiries($data);
        echo json_encode($data);
    }

    public function subscriber()
    {
        $data = array();
        $data['Name'] = $this->input->post('name');
        $data['Email'] = $this->input->post('email');

        $this->User_model->insertSubscriber($data);
        echo json_encode($data);
    }


    public function thankyou()
    {
        $data = array();
        $this->load->view('templates/header');
		$this->load->view('templates/Thankyou',$data);
        $this->load->view('templates/footer');
    }

    // public function register_form()
    // {
    //     $data = array();
    //     $this->load->view('templates/header');
	// 	$this->load->view('RegisterForm',$data);
    //     $this->load->view('templates/footer');
    // }


    
    public function register_form()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[5]|max_length[12]|xss_clean|is_unique[tbl_users.first_name]');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{11}$/]');
        $this->form_validation->set_rules('email', 'Email ID', 'required|trim|xss_clean|valid_email|is_unique[tbl_users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('repassword', 'Confirm Password', 'required|matches[password]');
       
        
       
       
        $this->form_validation->set_message('is_unique', 'The %s is already taken');

    
        if($this->form_validation->run() == TRUE)
        {
            $param['reset'] = TRUE;
            echo '<script>alert("Account successfully registered");</script>';

            

            if(isset($_FILES['valid_id']['name']))
            {
                $path = $config['upload_path']  = 'uploads/imgs/';
                $config['allowed_types']        = '*';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('valid_id'))
                {
                    $uploaded_img= $this->upload->data();
                    $full_path = $path.$uploaded_img['file_name'];
                    echo $full_path;
                    $data['valid_id'] = $full_path;
                   
                }
            }
            else 
            {
                $this->form_validation->set_rules('billing', 'Proof of Billing', 'required');
            }

            if(isset($_FILES['billing']['name']))
            {
                $path = $config['upload_path']  = 'uploads/imgs/';
                $config['allowed_types']        = '*';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('billing'))
                {
                    $uploaded_img= $this->upload->data();
                    $full_path = $path.$uploaded_img['file_name'];
                    echo $full_path;
                    $data['billing'] = $full_path;
                }
            }
            else 
            {
                $this->form_validation->set_rules('selfie', 'Selfie', 'required');
            }
            if(isset($_FILES['selfie']['name']))
            {
                $path = $config['upload_path']  = 'uploads/imgs/';
                $config['allowed_types']        = '*';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('selfie'))
                {
                    $uploaded_img= $this->upload->data();
                    $full_path = $path.$uploaded_img['file_name'];
                    echo $full_path;
                    $data['selfie'] = $full_path;
                }
            }
            else 
            {
                $this->form_validation->set_rules('valid_id', 'Valid ID', 'required');
            }

            $data['first_name'] = $this->input->post('fname');
            $data['last_name'] = $this->input->post('lname');
            $data['mobile'] = $this->input->post('mobile');
            $data['email']  = $this->input->post('email');
            $data['password']=  md5($this->input->post('password'));
            $data['house_no'] = $this->input->post('house_no');
            $data['village'] = $this->input->post('village');
            $data['city'] = $this->input->post('city');
            $data['state'] =  $this->input->post('state');
            $data['zip_code'] = $this->input->post('zip');

            $this->User_model->add_account($data);

        }
        else 
        {
            $param['reset'] = FALSE;
        }

        $this->load->view('templates/header');
        $this->load->view('RegisterForm',$param);
        $this->load->view('templates/footer');
    }

}
    