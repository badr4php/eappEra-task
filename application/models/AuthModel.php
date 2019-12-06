<?php

class AuthModel extends CI_Model{

    private $tableName = "users";
    private $data ;

    public function login($data){
        $response['authenticated']= false;
        $user = $this->getRow('email', $data['email']);
        if(isset($user->email) && password_verify($data['password'], $user->password)){
            $this->setAccessToken($user->id);
            $response['access_token'] = $this->data['access_token'];
            $response['authenticated']= true;
        }
        return $response;
    }

    private function setAccessToken($id){
        $this->data['access_token'] = $this->generateAccessToken();
        $this->update($id);
    }

    private function generateAccessToken(){
        return hash("sha256", rand()); 
    }

    private function getRow($column, $value){
        return $this->db->where($column, $value)->get($this->tableName)->row();
    }

    public function update($id){
        if (!empty($this->data)){
            return $this->db->where('id', $id)->update($this->tableName, $this->data);
        }
    }

    public function isAuth(){
        return $this->getRow('access_token', $this->getAccessToken());
    }

    private function getAccessToken(){
        $headers = $this->input->request_headers('Host');
        return isset($headers['access_token']) ? $headers['access_token'] : '';
    }
}