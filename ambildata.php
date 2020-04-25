<?php
include "koneksi.php";
$Q = mysqli_query($connection, "SELECT * FROM tb_pondok") or die (mysqli_connect_error());
if($Q){
	$posts = array();
		if(mysqli_num_rows($Q))
		{
			while($post = mysqli_fetch_assoc($Q)){
				$posts[] = $post;
			}
		}
		$data = json_encode(array('results'=>$posts));
		echo $data;
}
?>