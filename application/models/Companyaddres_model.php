<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Companyaddres_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get companyaddres by addressId
     */
    function get_companyaddres($addressId)
    {
        return $this->db->get_where('companyaddress',array('addressId'=>$addressId))->row_array();
    }
        
    /*
     * Get all companyaddress
     */
    function get_all_companyaddress()
    {
        $this->db->order_by('addressId', 'desc');
        return $this->db->get('companyaddress')->result_array();
    }
        
    /*
     * function to add new companyaddres
     */
    function add_companyaddres($params)
    {
        $this->db->insert('companyaddress',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update companyaddres
     */
    function update_companyaddres($addressId,$params)
    {
        $this->db->where('addressId',$addressId);
        return $this->db->update('companyaddress',$params);
    }
    
    /*
     * function to delete companyaddres
     */
    function delete_companyaddres($addressId)
    {
        return $this->db->delete('companyaddress',array('addressId'=>$addressId));
    }
}
