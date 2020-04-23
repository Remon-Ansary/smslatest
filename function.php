<?php

  function showdetails($city,$disease)
  {
  	include('dbcon.php');
  	$sql="SELECT * FROM `student` WHERE `disease` like '%$disease%' AND `city`='$city'";
  	$run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)<1)
    {
      echo "<script>alert('No Doctor Found');</script>";
    }
     

  	else

  	{
      $count=0;

         while( $data=mysqli_fetch_assoc($run))
         {
          $count++;
          ?>
           <table border="1" style="width:50%;color: #d16161; margin-top: 20px;" align="center">
           	<tr>
               <th colspan="3"> Doctor's Details</th>
           	</tr>
           	<tr>
           		<td rowspan="6"><img src="dataimg/<?php echo $data['image']; ?>" style="max-height: 250px;max-width: 250px;" /></td>
           		<th>Disease</th>
           		<td><?php echo $data['disease']; ?></td>
           	</tr>
           	<tr>
           		<th>Doctor's Name</th>
           		<td><?php echo $data['name']; ?></td>
           	</tr>
            <tr>
              <th>Qualification & Specialist</th>
              <td><?php echo $data['qualification']; ?></td>
            </tr>
           	<tr>
           		<th>Hospital</th>
           		<td><?php echo $data['hospital']; ?></td>
           	</tr>
           	<tr>
           		<th>Contact No </th>
           		<td><?php echo $data['pcont']; ?></td>

           	</tr>
           	<tr>
           		<th>City</th>
           		<td><?php echo $data['city']; ?></td>
           	</tr>
            

           </table>

          <?php
        }
  	}
   
  	
  }

?>