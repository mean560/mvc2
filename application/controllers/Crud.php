<?php
class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Crud_model', 'cm');
    }

    public function get_all_data()
    {
        $result = $this->cm->get_all_data();
        echo json_encode($result);
    }

    // Insert
    public function insert()
    {
        $data = $this->input->post();
        $response = $this->cm->saverecords($data);

        echo json_encode($response);
    }

    // Delete Record
    public function delete()
    {
        $data = $this->input->post();
        $response = $this->cm->deleterecords($data);
        echo json_encode($response);
    }

    // Update
    public function update()
    {
        $data = $this->input->post();
        $response = $this->cm->displayrecordsById($data);
        echo json_encode($response);
    }

    public function updatedata()
    {
        $data = $this->input->post();
        $response = $this->cm->update_records($data);
        echo json_encode($response);
    }

















    public function savedata()
    {
        $this->load->view('insert');
    }

    // Display
    public function dispdata()
    {
        $this->load->model('Crud_model', 'cm');
        $result['data'] = $this->cm->display_records();
        $this->load->view('display_record', $result);
    }

    // Update
    public function ifupdate()
    {
        if ($this->input->post('update')) {
            $this->load->model('Crud_model', 'cm');
            $id = $this->input->get('id');
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $email = $this->input->post('email');

            $response = $this->cm->update_records($fname, $lname, $email, $id);
            if ($response == true) {
                redirect(base_url('index.php/Crud/dispdata'));
                exit;
            } else {
                echo "Insert error !";
            }
        }
    }

    // public function updatedata()
    // {
    //     $this->load->model('Crud_model', 'cm');
    //     $id = $this->input->get('id');
    //     $result['data'] = $this->cm->displayrecordsById($id);
    //     $this->load->view('update_records', $result);

    //     // if ($this->input->post('update')) 
    //     // {
    //     //     $fname = $this->input->post('fname');
    //     //     $lname = $this->input->post('lname');
    //     //     $email = $this->input->post('email');
    //     //     $response = $this->cm->update_records($fname, $lname, $email, $id);
    //     //     if ($response == true) {
    //     //         redirect(base_url('index.php/Crud/dispdata'));
    //     //         exit;
    //     //     } else {
    //     //         echo "Update error!";
    //     //     }
    //     // }
    // }
}
