<?php
class Post_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function add()
  {
      $input['name'] = $this->input->post('name');
      $input['content'] = nl2br($this->input->post('content'));
      $input['ip'] = $this->input->ip_address();
      $this->db->insert('board', $input);
  }

  public function get_list()
  {
    $this->db->select('sn, name, content, ip, date');
    $query = $this->db->get('board');
    return $query->result_array();
  }

  public function del($sn)
  {
    $this->db->delete('board',array('sn'=>$sn));
  }
}
?>
