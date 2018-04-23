<?php
class book_model extends CI_Model{
	var $table = 'books';
	public function __construct(){
		$this->load->database();
	}
	public function get_books()
	{
		 $query = $this->db->get('books');
		  return $query->result_array();
	}
	public function book_add($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();

	}
	public function book_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function get_books_by_id($id){
		$this->db->from($this->table);
		$this->db->where('book_id',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function book_delete($id){
		$this->db->where('book_id', $id);
		$this->db->delete($this->table);
	}
}



?>