<?php 

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
	protected $table = 'categories';

	protected $primaryKey = 'category_id';

	protected $allowedFields =
		[
		'category_name',
		'category_description',
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
		$query = $this->db->query("SELECT * FROM categories");

		foreach ($query->getResult() as $row)
		{
			$result[$row->category_id] = array(
				'category_id' => $row->category_id, 
				'category_name'=> $row->category_name, 
				'category_description' => $row->category_description, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;
	}

	//This function selects one record from the table based on the primary key
	public function selectOne($category_id)
	{		
		$query = $this->db->query("SELECT * FROM categories WHERE category_id='$category_id'");

		foreach ($query->getResult() as $row)
		{
			$result = array(
				'category_id' => $row->category_id, 
				'category_name'=> $row->category_name, 
				'category_description' => $row->category_description, 
				'created_at' => $row->created_at, 
				'updated_at' => $row->updated_at, 
				'is_deleted' => $row->is_deleted
			);
		}

		return $result;	
	}

	//This function adds a record to the table
	public function addRecord($category_name, $category_description="")
	{
		if ($this->db->query("INSERT INTO categories (category_name, category_description) VALUES ('$category_name', '$category_description')"))
		{
		    return "Successful";
		}
		else
		{
		    return "Unsuccessful";
		}
	}
}