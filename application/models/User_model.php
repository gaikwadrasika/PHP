<?php
 class User_model extends CI_model
 {

    //function createmodel($formArray)
    //{
      //  $this->db->get('users', $formArray);
   // }

    //function all()
    //{
      //  return $users = $this->db->get('users')->result_array();
    //}

    function displayuser()
    {
     $query=$this->db->get('users');
      return $query->result_array();
    }
    function saverecords($name,$email,$username)
	{
	$query="insert into users values('','$name','$email','$username')";
	$this->db->query($query);

    }
    function edit($user_id)
    {
         $this->db->where('user_id',$user_id);
         return $user = $this->db->get('users')->row_array();

   }
   

// Executes: REPLACE INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')}

   function updateUser($user_id,$data)
    {
       $this->db->where('user_id',$user_id);
       $this->db->update('users',$data);


    }

   

    //function deleteUser($user_id){  
      //$this->db->where("user_id", $user_id);  
     // $this->db->delete("users");  
     
 //}  
  
 }

?>