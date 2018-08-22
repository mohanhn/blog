<?php 
class FGMembersite
{
	var $username;
    var $pwd;
    var $database;
    var $tablename;
    var $connection;

    function __construct()
    {
        return;
    }

   

    function InitDB($host,$uname,$pwd,$database,$tablename)
    {
        $this->db_host   = $host;
        $this->username  = $uname;
        $this->pwd       = $pwd;
        $this->database  = $database;
        $this->tablename = $tablename;
        
    }

    // prequal DB login 
    function DBLogin()
    {

        //$this->connection = mysql_connect($this->db_host,$this->username,$this->pwd);
        $this->connection = mysqli_connect($this->db_host,$this->username,$this->pwd,$this->database);
        if(!$this->connection)
        {   
            $this->HandleDBError("Database Login failed! Please make sure that the DB login credentials provided are correct");
            return false;
        }
        
        return true;
    }
	function RedirectToURL($url)
    {
        header("Location: $url");
        exit;
    }



    function insrtintotable($postname,$description,$type){
				if(!$this->DBLogin())
			{
			  $this->HandleError("Database login failed!");
			  return false;
			}
			
			$insert = "INSERT INTO blog(postname, description, type) 
											Values(
											'".$postname."',
											'".$description."',
											'".$type."'
											)";
								
		$insertResult = mysqli_query($this->connection,$insert);		
		if(!$insertResult)
		{
		  error_log("Error in Inserting the records");	
		  mysqli_close($this->connection);
		  return false;
		}
		else
		{
			 
			mysqli_close($this->connection);
			return "inserted";
		}	
	}



	function blogview(){
		if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
		$qry = "SELECT * from  blog";
		error_log($qry);
		$result = mysqli_query($this->connection,$qry);
		if(!$result || mysqli_num_rows($result) <= 0)
		{
			return false;
		}
		$ar= [];
		while($row = mysqli_fetch_assoc($result))
		{
			error_log("hiii");
			array_push($ar, $row);  
		}
		mysqli_close($this->connection);
		return $ar;
	}

	function updateintotable($slno,$fname,$lname,$ssn,$dob,$email,$occtype)

{
		if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
		$update_query = "update addoccupant set
		               firstname = '{$fname}',
		               	lastname = '{$lname}',						
		               	ssn = '{$ssn}',						
		               	dob = '{$dob}',						
		               email = '{$email}',						
		               occupanttype = '{$occtype}'						
				       where
				       	id = '{$slno}'";
		
		$result = mysqli_query($this->connection,$update_query);
		if(!$result)
		{
			return false;
		}
		else{
			mysqli_close($this->connection);
		return "updated";
		}
		
	}
	
	
	function deleteoccupant($sl_no)

{
		if(!$this->DBLogin())
        {
            $this->HandleError("Database login failed!");
            return false;
        }
		$delete_query = "DELETE FROM addoccupant						
				       where
				       	id = '{$sl_no}'";
		
		$result = mysqli_query($this->connection,$delete_query);
		if(!$result)
		{
			return false;
		}
		else{
			mysqli_close($this->connection);
		return "deleted";
		}
		
	}
	
	function validateemail($loginemail,$loginpassword)
        {
		if(!$this->DBLogin())
        {
			$this->HandleError("Database login failed!");
			return false;
		}
	    $decpassword=md5($loginpassword);	
        $ar = [] ;
		
		
	    $qry = 'Select * from applicants where applicantsemail="'.$loginemail.'" and applicantpassword="'.$decpassword.'"';
		
		
        $result = mysqli_query($this->connection,$qry);
        
        if(!$result || mysqli_num_rows($result) <= 0)
        {
           mysqli_close($this->connection);
           return false;
        
        }  else 
        
        {
          while($row = mysqli_fetch_assoc($result))
          {
              array_push($ar, $row);  
          }
		  mysqli_close($this->connection);
		  return $ar;      
		}
		
	}
	


}
 ?>