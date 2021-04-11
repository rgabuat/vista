<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


    public function __construct()
	{
        $this->load->database();
        $this->load->helper('date');
    }

    public function get_Data($limit,$offset,$count = true)
    {
        $this->db->select('*');
        $this->db->from('tbl_cars');
        if($count)
        {
            return $this->db->count_all_results();
        }
        else
        {
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
        }
    }

    public function view_join_data()
    {
        $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id=tbl_cars.brand where tbl_cars.id=tbl_cars.id ");
        return $query->result();
        return $query->count_all_results();
    }

    function total_records_count()
    {
        return $this->db->count_all('tbl_cars','tbl_brands');
    }

    public function view_Single_car($id)
    {
        // $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id=tbl_cars.brand where tbl_cars.id='".$id."' ");
        // return $query->result();
        $this->db->select('*','tbl_brands.brand_name,tbl_brands.id as bid');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_brands','tbl_brands.id=tbl_cars.brand');
        $this->db->where("tbl_cars.id='".$id."'");
        $query = $this->db->get();
        return $query->result();
    }

    public function view_Single_cars($ids)
    {
        // $query = $this->db->query("SELECT tbl_cars.* ,tbl_brands.brand_name,tbl_brands.id as bid from tbl_cars join tbl_brands on tbl_brands.id=tbl_cars.brand where tbl_cars.id='".$id."' ");
        // return $query->result();
        $this->db->select('*','tbl_brands.brand_name,tbl_brands.id as bid');
        $this->db->from('tbl_cars');
        $this->db->join('tbl_brands','tbl_brands.id=tbl_cars.brand');
        $this->db->where("tbl_cars.id='".$ids."'");
        $query = $this->db->get();
        return $query->result();
    }

    public function add_booking($param)
    {
        $this->db->insert('tbl_bookings',$param);
        return $this->db->insert_id();
    }

    public function getBooking($vid,$from,$to)
    {
            $this->db->select('*');
            $this->db->from('tbl_bookings');
            $this->db->where('vh_id =',$vid);
            $this->db->where('cdateform BETWEEN "'.$from.'" AND "'.$to.'" ');
            $this->db->or_where('cdateto BETWEEN "'.$from.'" AND "'.$to.'" ');
            // $this->db->or_where('cdateform <= "'.$to.'"');
            // $this->db->or_where('cdateto >= "'.$from.'"');
            // $this->db->where('cdateform < "'.$to.'" ');
            // $this->db->where('cdateto > "'.$from.'"');
            
            // $this->db->where('status !=',1);
            $query = $this->db->get();

            if(!empty($query->result()))
            {
                return  $query->result();
            }
    

        
    }

    public function insertInquiries($data)
    {
        $this->db->insert('tbl_inquiries',$data);
        return $this->db->insert_id();
    }

    public function insertSubscriber($data)
    {
        $this->db->insert('tbl_subscriber',$data);
        return $this->db->insert_id();
    }

    public function getSessionData($s_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('id',$s_id);
        $query = $this->db->get();
        return  $query->result();
    }

    public function getAllData($s_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_bookings');
        $this->db->where('act_id',$s_id);
        $query = $this->db->get();
        return  $query->result();
    }

    public function add_account($data)
    {
        $this->db->insert('tbl_users',$data);
        return $this->db->insert_id();
    }


}