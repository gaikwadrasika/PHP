
<?Php

class Users extends CI_controller{
//public function index()
//{
// $this->load->view('list');
//}



public function index()
	{
    
    $data['users']=$this->User_model->displayuser(); 
    $this->load->view('list',$data); 


	}
public function createfun()
{
  $this->load->view('create');
 
}

public function save(){
 
  $name=$this->input->post('name');
  $email=$this->input->post('email');
  $username=$this->input->post('username');
  $this->User_model->saverecords($name,$email,$username);  
        echo "data successfully added";
}

function edit($user_id)
{
 $data['user']=$this->User_model->edit($user_id);
 
  $this->load->view('edit' ,$data);
}

//function delete($user_id)
//{
 //$this->User_model->deleteUser($user_id);
//}
function Updateuser()
{
  $user_id=$this->input->post('user_id');
  $name=$this->input->post('name');
  $email=$this->input->post('email');
  $username=$this->input->post('username');
  $data = array(
    'name' => $name,
    'email' => $email,
    'username' =>$username
);
  $this->User_model->Updateuser($user_id , $data);  
        echo "data successfully Updated";
        redirect('http://localhost/crud/index.php/users/');
}
public function delete($user_id)
{
    $this->db->where('user_id', $user_id);
    $this->db->delete('users');
    redirect('http://localhost/crud/index.php/users/');
}
}

?>