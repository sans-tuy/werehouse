<!-- model untuk pagination -->
<?php
	class Pagination_model extends CI_Model
	{
		// mengambil data pada tabel products
		function dataProduct($number,$offset){
			return $query = $this->db->get('products',$number,$offset)->result();		
		}
	 
		// mencari banyak data pada tabel products
		function jumlah_data(){
			return $this->db->get('products')->num_rows();
		}
	}
	
?>
