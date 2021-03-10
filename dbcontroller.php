<?php
class DBController {
	private $host = "localhost";
	private $user = "junior";
	private $password = "Software00x";
	private $database = "bloodbasedb";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
	    $conn = mysqli_connect($this->host,$this->user,$this->password, $this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn, $query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function myQuery($query) {
		$result = mysqli_query($this->conn, $query);
		while($row=mysqli_fetch_assoc($result)) {
			return  $row;
		}	
	}
	
	function numRows($query) {
	    $result  = mysqli_query($this->conn, $query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	
	function updateQuery($query) {
	    $result = mysqli_query($this->conn, $query);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($this->conn));
		} else {
			return $result;
		}
	}
	
	function insertQuery($query) {
	    $result = mysqli_query($this->conn, $query);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($this->conn));
		} else {
		    return mysqli_insert_id($this->conn);
		}
	}
	
	function deleteQuery($query) {
	    $result = mysqli_query($this->conn, $query);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($this->conn));
		} else {
			return $result;
		}
	}
	
	function destroySession()  {
		$_SESSION=array();
		if (session_id() != "" || isset($_COOKIE[session_name()]))
			setcookie(session_name(), '', time()-2592000, '/');
		session_destroy();  
	  }
  
	function sanitizeString($var)  {
      $this->conn;
      $var = strip_tags($var);
      $var = htmlentities($var);
      $var = stripslashes($var);
      return $connection->real_escape_string($var);
  }

}
?>