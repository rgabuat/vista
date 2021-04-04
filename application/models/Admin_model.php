<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {


    public function __construct()
	{
        $this->load->database();
    }

    function get_data()
    {
        $query =  $this->db->get_where('tbl_brands',array('status' => '0' ));
        return $query->result_array();
    }


    function get_data_cars($options = array())
    {
        $results = $this->db->get('tbl_cars')->result_array();
        return $results;
    }
    

    function check()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        $query = $this->db->get();
        return $query->result_array();  

      
        
    }

    function add($results)
    {

        $this->db->insert('tbl_brands',$results);
        return $this->db->insert_id();
        
    }

    function add_car($param)
    {

        $this->db->insert('tbl_cars',$param);
        return $this->db->insert_id();
        
    }

    function get_data_join2()
    {
        $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id
        =tbl_cars.brand where tbl_cars.id=tbl_cars.id and del_status = '0' ");
        return $query->result();
    }

    function get_data_join()
    {
        
        // $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id
        // =tbl_cars.brand where tbl_cars.id=tbl_cars.id");
        // return $query->result();

        // $this->db->select('tbl_cars.name','tbl_brands.brand_name','tbl_cars.model');
        // $this->db->from('tbl_cars');
        // $this->db->join('tbl_brands','tbl_brands.id = tbl_cars.brand');
        // $query = $this->db->get();
        // return $query->result();
        $query = $this->db->query("SELECT tbl_cars.name,tbl_brands.brand_name,tbl_cars.model,tbl_cars.id FROM tbl_cars join tbl_brands on tbl_brands.id = tbl_cars.brand and del_status = '0' ");
        return $query->result();
    }

    function updateBrand($data)
    {
        $this->db->update('tbl_brands', $data,['id' => $data['id']]);
    }

//vehicle update

    function editVehicle($id)
    {
        
        $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id=tbl_cars.brand where tbl_cars.id='".$id."' ");
        return $query->result();
    }

    function updateVehicle($data)
    {
        $this->db->update('tbl_cars', $data,['id' => $data['id']]);
    }

//fetch form data

    function getdataForm()
    {
        // $query =  $this->db->get_where('tbl_brands',array('status' => '0' ));
        // return $query->result_array();

        $this->db->select('*','tbl_cars.id as bid');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_bookings','tbl_bookings.vh_id = tbl_cars.id');
        $this->db->where('status','0');
        $query = $this->db->get();
        return $query->result_array();

        // $query =  $this->db->get_where('tbl_bookings',['status' => '0' ]);
        // return $query->result_array();
    }

    function confirmedBooking()
    {
        // $query =  $this->db->get_where('tbl_brands',array('status' => '0' ));
        // return $query->result_array();
        $this->db->select('*','tbl_cars.id as bid');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_bookings','tbl_bookings.vh_id = tbl_cars.id');
        $this->db->where('status','1');
        $queryConfirm = $this->db->get();
        return $queryConfirm->result_array();
    }

    function declinedBooking()
    {
        // $query =  $this->db->get_where('tbl_brands',array('status' => '0' ));
        // return $query->result_array();

        $this->db->select('*','tbl_cars.id as bid');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_bookings','tbl_bookings.vh_id = tbl_cars.id');
        $this->db->where('status','2');
        $queryConfirm = $this->db->get();
        return $queryConfirm->result_array();

        // $query =  $this->db->get_where('tbl_bookings',array('status' => '2' ));
        // return $query->result_array();
    }


    function getProfileData($id)
    {

        $this->db->select('*','tbl_cars.id.id as bid');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_bookings','tbl_bookings.vh_id = tbl_cars.id');
        $this->db->where('tbl_bookings.id',$id);
        $profileQuery = $this->db->get();
        return $profileQuery->result_array();

        // $profileQuery =  $this->db->get_where('tbl_bookings',['id' => $id]);
        // return $profileQuery->result_array();
    }

    function count_notifications()
    {
        $querynotif =  $this->db->get_where('tbl_bookings',array('notif_status' => '0' ));

        $data['results'] =  $querynotif->result_array();
        $data['count'] =  $querynotif->num_rows();

       
        $output = '';

        if($data['results'] > 0 )
        {
            foreach($data['results'] as $rows)
            {
                
                $output .= '
                <li class="list-group-item d-flex justify-content-between" row-id="'.$rows['id'].'">
                <a href="'.base_url('AdminController/viewProfile').'/'.$rows['id'].'" target="blank" onClick="return read_notif(this)" class="test" data-id="'.$rows['id'].'">
               
                <strong>'.$rows['fname'].'</strong><br />
                <small><em>'.$rows['created_at'].'</em></small>
                </a>
                </li>
                ';
            }
        }
        else 
        {
            $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
        }
       

        $data['output'] = $output;
        return $data;
    }

    function admin_view_single($id)
    {
        $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id=tbl_cars.brand where tbl_cars.id='".$id."' ");
        return $query->result();
    }

    function delete($id)
    {
        $this->db->set('del_status',1);
        $this->db->where('id',$id);
        $this->db->update('tbl_cars');
    }

    function confirm($id)
    {
        $this->db->set('status',1);
        $this->db->where('id',$id);
        $this->db->update('tbl_bookings');
    }

    function decline($id)
    {
        $this->db->set('status',2);
        $this->db->where('id',$id);
        $this->db->update('tbl_bookings');
    }

    function read_notifs($id)
    {
        $this->db->set('notif_status',1);
        $this->db->where('id',$id);
        $this->db->update('tbl_bookings');
    }
}