<?php

error_reporting(E_ALL);
require_once "config";
$url=$_GET['id'];
print_r($data);
if($data){
		//echo "<link href='css/bootstrap.min.css' rel='stylesheet'";
		//echo "<script src = 'js/bootstrap.min.js'></script";
		//echo "<script src = 'jquery-1.12.0.min.js'></script";
		echo'
 	 <h1>User Details Table</h1>
  
  <<table class="table table-bordered" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Employer</th>
        <th>Last Updated</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>';


	
        
       
              echo '<tr>';
                  echo '<td>'.$data['displayName'].'</td>';
                  echo '<td>'.$data['surname'].'</td>';
                  echo '<td>'.$data['email'].'</td>';
                  echo '<td>'.$data['phoneNumber'].'</td>';
                  echo '<td>'.$data['employer'].'</td>';
                   echo '<td>'.$data['lastCheckedIntertations'].'</td>';
                  

              echo '</tr>';
      

}

?>

