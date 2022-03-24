<?php 


class Mod_Isibo extends CI_Model
{
	function registerHeader($fn, $ln, $dob, $id,$sex,$ubu, $isano, $insur, $phone, $houseNumber, $uname, $password,$isibo, $email="none"){
		$data1 = array(
			'usr_id' =>null,
			'usr_username' => $uname,
			'usr_password' => $password, 
			'usr_roles_id' => 2,
			'usr_isibo' => $isibo
		);

		$this->db->insert('ums_users', $data1);

		$last_id = $this->db->insert_id();
		$data = array(
			'ldr_leader_id' =>null,
			'ldr_firstname' => $fn,
			'ldr_lastname' => $ln,
			'ldr_phone' => $phone,
			'ldr_email'=>$email,
			'ldr_gender' =>$sex,
			'ldr_dob' => $dob,
			'ldr_nid' => $id,
			'ldr_profile' => null,
			'ldr_village_code'=>2,
			'ldr_insurance'=>$insur,
			'ldr_used_id'=>$last_id,
			'ldr_category_code' => $ubu
		);
		$this->db->insert('ums_leaders', $data);
		$last_id1 = $this->db->insert_id();
		$data1 = array(
			'mbr_member_id' =>null,
			'mbr_firstname' => $fn,
			'mbr_lastname' => $ln,
			'mbr_phone' => $phone,
			'mbr_email'=>$email,
			'mbr_gender' =>$sex,
			'mbr_dob' => $dob,
			'mbr_nid' => $id,
			'mbr_relationship' => "head",
			'mbr_leader_id'=>$last_id1,
			'mbr_insurance'=>$insur
		);

		$this->db->insert('ums_members', $data1);
	}

	function saveIgikorwa($name, $vill, $cont, $desc, $cat, $owner){
		$data = array(
			'ibi_id' =>null,
			'ibi_name' => $name,
			'ibi_village' => $vill, 
			'ibi_contact' => $cont,
			'ibi_desc' => $desc,
			'ibi_category' => $cat,
			'ibi_owner' => $owner,
		);

		$this->db->insert('ums_ibikorwa_doc', $data);

		$this->DBNAME = $this->db->insert_id();
	}

	function registerMember($fname, $lname, $tel, $nid,$email,$dob, $isano, $sex, $id,$ins){

		$data = array(
			'mbr_member_id' =>null,
			'mbr_firstname' => $fname,
			'mbr_lastname' => $lname,
			'mbr_phone' => $tel,
			'mbr_nid'=>$nid,
			'mbr_email' =>$email,
			'mbr_dob' => $dob,
			'mbr_insurance' => $ins,
			'mbr_relationship' => $isano,
			'mbr_gender' => $sex,
			'mbr_leader_id'=>$id
		);

		$this->db->insert('ums_members', $data);

	}

	function saveFile($id, $pic){

		$data = array(
			'ibi_file_id' =>null,
			'ibi_file_igikorwa' => $id,
			'ibi_file_image' => $pic
		);

		$this->db->insert('ums_ibikorwa_doc_file', $data);

	}

	function selectCategory(){
		$this->db->select('*');
		$this->db->from('ums_category');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function isibo($id){
		$this->db->select('*');
		$this->db->from('ums_users');
		$this->db->join('ums_isibo','usr_isibo=isibo_code');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return null;
		}
	}

	function soma($id){
		$this->db->select('*');
		$this->db->from('ums_amatangazo');
		$this->db->where('ama_id',$id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0) {
			return $query;
		}else{
			return null;
		}
	}

	function selectInsurance(){
		$this->db->select('*');
		$this->db->from('ums_ubwishingizi');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function umuganda(){
		$this->db->select('*');
		$this->db->from('ums_umuganda');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function abashyitsi(){
		$this->db->select('*');
		$this->db->from('ums_guests');
		$this->db->join('ums_leaders', 'gue_ldr_id =ldr_leader_id ');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectFamily(){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectFamily1($id){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$this->db->where('ldr_leader_id', $id);
		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectFamilyDetails($id){
		$this->db->select('*');
		$this->db->from('ums_members');
		$this->db->join('ums_leaders', 'mbr_leader_id = ldr_leader_id');
		$this->db->join('ums_ubwishingizi', 'mbr_insurance = ubw_id');
		$this->db->where('mbr_leader_id', $id);

		$query = $this->db->get();
		$query->num_rows();
		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectPeaple($id){
		$this->db->select('*');
		$this->db->from('ums_leaders');
		$this->db->where('ldr_gender', $id);
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectYouth(){
		$this->db->select('*,TIMESTAMPDIFF (YEAR, ldr_dob, CURDATE()) AS age');
		$this->db->from('ums_leaders');
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectForAnn($id=12){
		$this->db->select('*');
		$this->db->from('ums_admin');
		$this->db->join('ums_users', 'adm_user_id=usr_id');
		$this->db->join('ums_isibo', 'usr_isibo=isibo_code');
		$this->db->where('usr_id', $id);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query;
		}
		else{
			return false;
		}
	}

	function abaturage()
	{
		$this->db->select('*,TIMESTAMPDIFF (YEAR, ldr_dob, CURDATE()) AS age,TIMESTAMPDIFF (MONTH, ldr_dob, CURDATE()) AS mnth,TIMESTAMPDIFF (DAY, ldr_dob, CURDATE()) AS dy');
		$this->db->from('ums_leaders');
		$this->db->join('ums_category', 'ldr_category_code=cat_cotegory_code');
		$this->db->join('ums_ubwishingizi', 'ldr_insurance=ubw_id');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function amashuri($id, $cat)
	{
		$this->db->select('*');
		$this->db->from('ums_ibikorwa_doc');
		$this->db->join('ums_village', 'ibi_village=village_code');
		$this->db->where('village_code', $id);
		$this->db->where('ibi_category', $cat);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function igikorwa($id)
	{
		$this->db->select('*');
		$this->db->from('ums_ibikorwa_doc');
		$this->db->join('ums_village', 'ibi_village=village_code');
		$this->db->where('ibi_id', $id);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}
	function igikorwapic($id)
	{
		$this->db->select('*');
		$this->db->from('ums_ibikorwa_doc_file');
		$this->db->where('ibi_file_igikorwa', $id);

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function amatangazoAll()
	{
		$this->db->select('*');
		$this->db->from('ums_amatangazo');
		$this->db->order_by('ama_id', 'DESC');
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function amatangazoOne($id)
	{
		$this->db->select('*');
		$this->db->from('ums_amatangazo');
		$this->db->join('ums_admin', 'ama_created_by=adm_user_id ');
		$this->db->where('ama_id', $id);
		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function ubudehe()
	{
		$this->db->select('*');
		$this->db->from('ums_members');
		$this->db->join('ums_leaders', 'mbr_leader_id=ldr_leader_id');
		$this->db->join('ums_category', 'ldr_category_code=cat_cotegory_code');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function ubwishingizi()
	{
		$this->db->select('*');
		$this->db->from('ums_members');
		$this->db->join('ums_ubwishingizi', 'mbr_insurance=ubw_id');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectChild()
	{
		$this->db->select('*,TIMESTAMPDIFF (YEAR, mbr_dob, CURDATE()) AS age');
		$this->db->from('ums_members');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function itangazo($t, $b, $p, $isibo, $owner){ 
		$data1 = array(
			'ama_id' =>null,
			'ama_title' => $t,
			'ama_desc' => $b,
			'ama_file' => $p,
			'ama_category' => "ayaleta",
			'ama_isibo' => $isibo,
			'ama_created_by' => $owner,
			'ama_created_on' => gmdate("l jFY h:i:s A")
		);

		$this->db->insert('ums_amatangazo', $data1);
	}

	function selectIbyaranzwe($id){
		$this->db->select('*');
		$this->db->from('ums_amatangazo');
		$this->db->join('ums_admin', 'ama_created_by=adm_id');
		$this->db->join('ums_isibo', 'ama_isibo =isibo_code');
		$this->db->where('isibo_code', $id);
		$this->db->where('ama_category', 'ayaleta');
		$this->db->order_by('ama_id', 'DESC');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	function selectAmatangazo(){
		$this->db->select('*');
		$this->db->from('ums_announcement');
		$this->db->join('ums_leaders', 'ann_leader_id =ldr_leader_id');
		$this->db->order_by('ann_id', 'DESC');

		$query = $this->db->get();

		if ($query->num_rows()>0){
			return $query->result();
		}
		else{
			return false;
		}
	}

}
