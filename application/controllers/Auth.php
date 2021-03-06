<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Auth extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    } 

    /*
     * Listing of auth
     */
    function index()
    {
        $data['auth'] = $this->Auth_model->get_all_auth();
        
        $data['_view'] = 'auth/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new auth
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'authName' => $this->input->post('authName'),
            );
            
            $auth_id = $this->Auth_model->add_auth($params);
            redirect('auth/index');
        }
        else
        {            
            $data['_view'] = 'auth/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a auth
     */
    function edit($authId)
    {   
        // check if the auth exists before trying to edit it
        $data['auth'] = $this->Auth_model->get_auth($authId);
        
        if(isset($data['auth']['authId']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'authName' => $this->input->post('authName'),
                );

                $this->Auth_model->update_auth($authId,$params);            
                redirect('auth/index');
            }
            else
            {
                $data['_view'] = 'auth/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The auth you are trying to edit does not exist.');
    } 

    /*
     * Deleting auth
     */
    function remove($authId)
    {
        $auth = $this->Auth_model->get_auth($authId);

        // check if the auth exists before trying to delete it
        if(isset($auth['authId']))
        {
            $this->Auth_model->delete_auth($authId);
            redirect('auth/index');
        }
        else
            show_error('The auth you are trying to delete does not exist.');
    }
    
}
