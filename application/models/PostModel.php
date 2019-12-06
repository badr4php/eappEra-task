<?php

class PostModel extends CI_Model{

    private $tableName = "posts";
    private $filable = ['title', 'content', 'user_id'];
    private $data ;

    private function setFilable($inputs){
        foreach ($this->filable as $value) {
            if(!empty($inputs[$value])){
                $this->data[$value] = $inputs[$value];
            }
        }
    }

    public function insert($inputs){
        $this->setFilable($inputs);
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
}