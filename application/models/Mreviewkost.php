<?php 
class Mreviewkost extends CI_Model {
    
    function simpan_review($data)
    {
        $this->db->insert('tbreviewkost', $data);
    }

    function get_reviews_by_kost($id_kost)
    {
        $this->db->select('*');
        $this->db->from('tbreviewkost');
        $this->db->join('tbuser', 'tbuser.id_user = tbreviewkost.id_user');
        $this->db->where('id_kost', $id_kost);
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();

        return $query->result();
    }
}
?>
