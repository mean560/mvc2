<?php
class Crud_model extends CI_Model
{
	function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('crud');
		$query = $this->db->get()->result_array();
		return $query;
	}

	// Insert
	function saverecords($data)
	{
		$arr = array('0');
		if (is_array($data) && sizeof($data) > 0) {
			$this->db->insert('crud', $data);
			$arr = array('1');
		}

		return $arr;
	}

	// Delete
	function deleterecords($data)
	{
		$id = array_values($data);
		$this->db->where('id', $id[0]);
		$this->db->delete('crud');
		return true;
	}

	// Update
	function displayrecordsById($data)
	{
		$query = array('0');

		if(is_array($data) && sizeof($data)>0){
			$id = $data['id'];
			$this->db->select('*');
			$this->db->from('crud');
			$this->db->where('id', $id);
			$query = $this->db->get()->row_array();
		}

		return $query;
	}

	function update_records($data)
	{
		$arr = array('0');
		if(is_array($data)&&sizeof($data)>0){
			$id = $data['id'];
			// $fname = $data['fname'];
			// $lname = $data['lname'];
			// $email = $data['email'];
			$this->db->where('id', $id);
			$this->db->update('crud', $data);
			$arr = array('1');

		}
		return $arr;
		// $this->db->query("UPDATE crud SET fname='$fname', lname='$lname', email='$email' WHERE id='$id'");
		// return true;
	}
}
