<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimoni_model extends CI_Model {
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function getToBeShown() {
        $this->db->order_by('created_date', 'desc');
        $query = $this->db->get('testimoni_obj', 10);
        return $query->result();
    }

    public function getAll() {
        $query = $this->db->get_where('testimoni_obj',array('is_delete' => 0));
        return $query->result();
    }

    public function getObj($id) {
        $query = $this->db->get_where('testimoni_obj', array('id' => $id));
        $tempArr = $query->result();
        $hits = $tempArr['hits'];
        $hits = $hits + 1;

        $this->db->where('id', $id);
        $this->db->update('testimoni_obj', array('hits' => $hits));

        $query = $this->db->get_where('testimoni_obj', array('id' => $id));
        return $query->result();
    }

    // tanpa penambahan hits
    public function getObjForAdmin($id) {
        $query = $this->db->get_where('testimoni_obj', array('id' => $id));
        return $query->result();
    }


    public function getIsiID($id) {
        $query = $this->db->get_where('testimoni_id', array('obj_id' => $id));
        return $query->result();
    }

    public function getIsiENG($id) {
        $query = $this->db->get_where('testimoni_eng', array('obj_id' => $id));
        return $query->result();
    }

    public function getIsiCHN($id) {
        $query = $this->db->get_where('testimoni_chn', array('obj_id' => $id));
        return $query->result();
    }

    public function setIsiID($id,$teks) {
        $this->db->where('obj_id', $id);
        return $this->db->update('testimoni_id',array('teks_ID'=>$teks));
    }

    public function setIsiENG($id,$teks) {
        $this->db->where('obj_id', $id);
        return $this->db->update('testimoni_eng',array('teks_ENG'=>$teks));
    }

    public function setIsiCHN($id,$teks) {
        $this->db->where('obj_id', $id);
        return $this->db->update('testimoni_chn',array('teks_CHN'=>$teks));
    }

    public function insert($data) {
        $dataObj = array('nama' => $data['nama'],
                        'written_by' => $data['author'],
                        'img_url' => $data['img_url'],
                        'age' => $data['age'],
                        'origin' => $data['origin']);

        $dataID = array('teks_id' => $data['teks_id']);

        $dataENG = array('teks_eng' => $data['teks_eng']);

        $dataCHN = array('teks_chn' => $data['teks_chn']);

        $this->db->insert('testimoni_obj', $dataObj);
        $this->db->insert('testimoni_id', $dataID);
        $this->db->insert('testimoni_eng', $dataENG);
        return $this->db->insert('testimoni_chn', $dataCHN);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->update('testimoni_obj', array('is_delete' => 1));
    }

    public function update($id,$data){
        $this->db->where('id', $id);
        $nama = array('nama' => $data['nama']);
        $age = array('age' => $data['age']);
        $origin = array('origin' => $data['origin']);
        return $this->db->update('testimoni_obj',array('nama'=>$data['nama'],'age' => $data['age'],'origin' => $data['origin']));
    }
}