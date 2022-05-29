<?php


class ItemCRUDModel extends CI_Model{


    public function get_itemCRUD(){
        // $this->load->database();

        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->like('isnumber', $this->input->get("search"));
          $this->db->like('isalpha', $this->input->get("search"));
          $this->db->like('opt', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("items");
        return $query->result();
    }
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateNumber($length = 6) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function insert_item()
    {   $range = range(1,$this->input->post('opt'));
        $checkNumeric = $this->input->post('isnumber');
        $checkalpha = $this->input->post('isalpha');
        if ($checkNumeric == "on" && $checkalpha =="on")
        {
            $description = $this->generateRandomString();
        }
        else if ($checkNumeric == "on"){
            $description = $this->generateNumber();
        }
        else{
            $description = $this->generateRandomString();
        }
        foreach ($range as $deals) {
            $data = array(
                'title' => $this->input->post('title'),
                'isnumber' => $this->input->post('isnumber'),
                'isalpha' => $this->input->post('isalpha'),
                'opt' => $this->input->post('opt'),
                'description' => $description,


            );
            $data = $this->db->insert('items', $data);
        };
    }


    public function update_item($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'isnumber' => $this->input->post('isnumber'),
            'isalpha' => $this->input->post('isalpha'),
            'opt' => $this->input->post('opt'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('items',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('items',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('items', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('items', array('id' => $id));
    }
}
?>