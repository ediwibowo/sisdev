<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Companyaddres extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Companyaddres_model');
    } 

    /*
     * Listing of companyaddress
     */
    function index()
    {
        $data['companyaddress'] = $this->Companyaddres_model->get_all_companyaddress();
        
        $data['_view'] = 'companyaddres/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new companyaddres
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'companyId' => $this->input->post('companyId'),
				'country' => $this->input->post('country'),
				'city' => $this->input->post('city'),
				'addres' => $this->input->post('addres'),
				'description' => $this->input->post('description'),
				'lat' => $this->input->post('lat'),
				'lon' => $this->input->post('lon'),
				'menuId' => $this->input->post('menuId'),
            );
            
            $companyaddres_id = $this->Companyaddres_model->add_companyaddres($params);
            redirect('companyaddres/index');
        }
        else
        {            
            $data['_view'] = 'companyaddres/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a companyaddres
     */
    function edit($addressId)
    {   
        // check if the companyaddres exists before trying to edit it
        $data['companyaddres'] = $this->Companyaddres_model->get_companyaddres($addressId);
        
        if(isset($data['companyaddres']['addressId']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'companyId' => $this->input->post('companyId'),
					'country' => $this->input->post('country'),
					'city' => $this->input->post('city'),
					'addres' => $this->input->post('addres'),
					'description' => $this->input->post('description'),
					'lat' => $this->input->post('lat'),
					'lon' => $this->input->post('lon'),
					'menuId' => $this->input->post('menuId'),
                );

                $this->Companyaddres_model->update_companyaddres($addressId,$params);            
                redirect('companyaddres/index');
            }
            else
            {
                $data['_view'] = 'companyaddres/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The companyaddres you are trying to edit does not exist.');
    } 

    /*
     * Deleting companyaddres
     */
    function remove($addressId)
    {
        $companyaddres = $this->Companyaddres_model->get_companyaddres($addressId);

        // check if the companyaddres exists before trying to delete it
        if(isset($companyaddres['addressId']))
        {
            $this->Companyaddres_model->delete_companyaddres($addressId);
            redirect('companyaddres/index');
        }
        else
            show_error('The companyaddres you are trying to delete does not exist.');
    }
    
}
