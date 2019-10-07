<?php


 $connect = mysqli_connect("localhost", "root", "", "testing");
 $output = '';
// $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%".$_POST['query']."%'";
 $query = "SELECT * FROM tbl_country";
 $result = mysqli_query($connect, $query);
 $output = '<ul class="searchresult">';
 if (mysqli_num_rows($result) > 0) {
 	while ($row = mysqli_fetch_array($result)) {
 		
 	   $output.='<li>'.$row['country_name'].'</li>';
 	}
 }
 else
 {
 	 $output.='<li>Country not found</li>';
 }

 $output.= '</ul>';
 echo $output;


?>