<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by userId
     */
    function get_user($userId)
    {
        return $this->db->get_where('user',array('userId'=>$userId))->row_array();
    }
        
    /*
     * Get all user
     */
    function get_all_user()
    {
        $this->db->order_by('userId', 'desc');
        return $this->db->get('user')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($userId,$params)
    {
        $this->db->where('userId',$userId);
        return $this->db->update('user',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($userId)
    {
        return $this->db->delete('user',array('userId'=>$userId));
    }
}
