<?php

class UsersModel extends CI_Model{

    private $tableName = "users";
    private $filable = ['first_name', 'last_name', 'email', 'password', 'city', 'phone'];
    private $data ;

    private function setFilable(){
        foreach ($this->filable as $value) {
            if(!empty($this->input->post($value))){
                $this->data[$value] = $this->input->post($value);
            }
        }
        $this->setPassword();
    }

    public function insert(){
        $this->setFilable();
        if (!empty($this->data)){
            return $this->db->insert($this->tableName, $this->data);
        }
    }

    public function list(){
        return $this->db->get($this->tableName)->result();
    }

    public function getRow($column, $value){
        return $this->db->where($column, $value)->get($this->tableName)->row();
    }

    public function update($id){
        $this->setFilable();
        if (!empty($this->data)){
            return $this->db->where('id', $id)->update($this->tableName, $this->data);
        }
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete($this->tableName);
    }

    private function setPassword(){
        if(isset($this->data['password'])){
            $this->data['password'] = password_hash($this->data['password'], PASSWORD_DEFAULT);
        }
    }
}