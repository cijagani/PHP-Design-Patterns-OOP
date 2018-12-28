<?php  
	class DBConnection{

		private $db_server="localhost";
		private $db_username="root";
		private $db_password="root";		
		private $db_dbname="test";

		private $DB;

		public function __construct()
		{
			$this->DB=mysqli_connect($this->db_server,$this->db_username,$this->db_password, $this->db_dbname);

			return $this->DB;
		}

		function insert($value='')
		{
			
		}

		function update($value='')
		{
			
		}

		function select($table,$fields='*')
		{
			return "select $fields from $table";
		}
	}
?>