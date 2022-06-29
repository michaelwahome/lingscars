<?php 

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
	protected $table = 'roles';

	protected $primaryKey = 'role_id';

	protected $allowedFields =
		[
		'role_name',
		'role_description',
		];

	public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    //This funtion selects all the records from the table
	public function selectAll()
	{
		$query = $this->db->query("SELECT * FROM roles");

		foreach ($query->getResult() as $row)
		{
			$result[$row->user_id] = array(
				'role_id' => $row->role_id, 
				'role_description'=> $row->row_description,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($role_id)
	{
		$query = $this->db->query("SELECT * FROM roles WHERE role_id='$role_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'role_id' => $row->role_id, 
				'role_description'=> $row->row_description,
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;	
	}

	//This function adds a record to the table
	public function addRecord($role_name, $role_description)
	{
		if ($this->db->query("INSERT INTO roles (role_name, role_description) VALUES ('$role_name', '$role_description')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}

	//This function deletes a cart based on the primary key
	public function deleteOne($role_id)
	{
		if ($this->db->query("DELETE FROM roles WHERE role_id = '$role_id'"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}
}