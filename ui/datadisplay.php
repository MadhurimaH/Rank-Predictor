<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib\bootstrap\css\bootstrap.min.css">
    <script src="lib\jquery.min.js"></script>
  <script src="lib\bootstrap\js\bootstrap.min.js"></script>
<style>
body {font-family: Arial;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
.tabcontent {
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>

</head>
<body>
	
  
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Studentdetails')" id="defaultOpen" >Student Details</button>
  <button class="tablinks" onclick="openCity(event, 'Student_Marks')">Student Marks</button>
  <button class="tablinks" onclick="openCity(event, 'Rank')">Rank</button>
   <button class="tablinks" onclick="openCity(event, 'Percentage')">Percentage</button>
    <button class="tablinks" onclick="openCity(event, 'Line_Graph')">Line Graph</button>
</div>
  

 <?php

   $E_No = $_POST['enrollement_no'];
   $Name = $_POST['Name'];
   
   // to prevent mysql injection
 $con=mysqli_connect("localhost","root","","mca");
 $result=mysqli_query($con,"SELECT * FROM student WHERE E_No='$E_No' && Name='$Name' ");
 $record1=mysqli_query($con,"SELECT *  FROM dm WHERE E_No='$E_No' ");
 $count=mysqli_num_rows($result);
  $record2=mysqli_query($con,"SELECT *  FROM ss WHERE E_No='$E_No' ");
      $record3=mysqli_query($con,"SELECT *  FROM fit WHERE E_No='$E_No' ");
       $record4=mysqli_query($con,"SELECT *  FROM co WHERE E_No='$E_No' ");
        $record5=mysqli_query($con,"SELECT *  FROM cp WHERE E_No='$E_No' ");
        $record6=mysqli_query($con,"SELECT * FROM exam_record WHERE E_No='$E_No'");
       
 
if($count==1)
{ 		

    echo "Welcome to igdtuw STUDENT PORTAL" ;
}
else
{ 
   
    
}	
   ?>
      
<div id="Studentdetails" class="tabcontent" >
<div class="container">
    <h3>Name: <strong><?php echo $Name;?> </strong>
    </h3>
  	 <h3>Enrollment Number: <strong><?php echo $E_No;?>  </strong>  </h3>
</div>
</div>

<div id="Student_Marks" class="tabcontent">

  	<div class="container">  
<h3><strong>MCA SEMESTER 1 </strong></h3>
  	 	<table>
  	 		<tr>
  	 		<th> Subjects  &nbsp &nbsp &nbsp &nbsp </th>
  	 		<th>Minor 1 &nbsp &nbsp &nbsp &nbsp </th>
  	 		<th>Minor 2 &nbsp &nbsp &nbsp &nbsp </th>
  	 		<th>Teacher Evaluation &nbsp &nbsp &nbsp &nbsp</th>
  	 		<th> External &nbsp &nbsp &nbsp &nbsp </th>
  	 	</tr>
  	 	
  	 		<td><?php 
  	 		while($dm=mysqli_fetch_assoc($record1)) {
  	 			echo "<tr>";
  	 			echo "<td> Discrete Mathematics &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$dm['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";

  	 	}
  	 	while($ss=mysqli_fetch_assoc($record2)) {
  	 			echo "<tr>";
  	 			echo "<td> Soft Skills &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$ss['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	while($fit=mysqli_fetch_assoc($record3)) {
  	 			echo "<tr>";
  	 			echo "<td> Fundamentals Of IT &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$fit['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	
  	 	while($CO=mysqli_fetch_assoc($record4)) {
  	 			echo "<tr>";
  	 			echo "<td> Computer Organisation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$CO['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	while($cp=mysqli_fetch_assoc($record5)) {
  	 			echo "<tr>";
  	 			echo "<td> Problem Solving With C &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$cp['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	?>
  	 	</table>
  	 	<h3 style="text-align: center;"> <strong>Total marks in Semester 1 : &nbsp &nbsp 
  	 	<?php
  	 	    while($ag=mysqli_fetch_assoc($record6)) {
  	 	    	echo "".$ag['GT']."";
  	 	    }
  	 	   ?></strong>
  	 	   </h3> 

  	 	   <h3><strong>MCA SEMESTER 2 </strong></h3>
  	 	<table>
  	 		<tr>
  	 		<th> Subjects  &nbsp &nbsp &nbsp &nbsp </th>
  	 		<th>Minor 1 &nbsp &nbsp &nbsp &nbsp </th>
  	 		<th>Minor 2 &nbsp &nbsp &nbsp &nbsp </th>
  	 		<th>Teacher Evaluation &nbsp &nbsp &nbsp &nbsp</th>
  	 		<th> External &nbsp &nbsp &nbsp &nbsp </th>
  	 	</tr>
  	 	
  	 		<td><?php 
  	 		$recor1=mysqli_query($con,"SELECT *  FROM dm WHERE E_No='$E_No' ");
  	 		while($dm2=mysqli_fetch_assoc($recor1)) {
  	 			echo "<tr>";
  	 			echo "<td> Discrete Mathematics &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$dm2['M21']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm2['M22']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm2['TE2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm2['EX2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";

  	 	}
  	 	$recor2=mysqli_query($con,"SELECT *  FROM ss WHERE E_No='$E_No' ");
     
  	 	while($ss=mysqli_fetch_assoc($recor2)) {
  	 			echo "<tr>";
  	 			echo "<td> Soft Skills &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$ss['M21']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['M22']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['TE2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['EX2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	 $recor3=mysqli_query($con,"SELECT *  FROM fit WHERE E_No='$E_No' ");
       
  	 	while($fit=mysqli_fetch_assoc($recor3)) {
  	 			echo "<tr>";
  	 			echo "<td> Fundamentals Of IT &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$fit['M21']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['M22']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['TE2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['EX2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	$recor4=mysqli_query($con,"SELECT *  FROM co WHERE E_No='$E_No' ");
       
  	 	while($CO=mysqli_fetch_assoc($recor4)) {
  	 			echo "<tr>";
  	 			echo "<td> Computer Organisation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$CO['M21']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['M22']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['TE2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['EX2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	 $recor5=mysqli_query($con,"SELECT *  FROM cp WHERE E_No='$E_No' ");
        
       
  	 	while($cp=mysqli_fetch_assoc($recor5)) {
  	 			echo "<tr>";
  	 			echo "<td> Problem Solving With C &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$cp['M21']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['M22']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['TE2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['EX2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	?>
  	 	</table>
  	 	<h3 style="text-align: center;"> <strong>Total marks in Semester 2 : &nbsp &nbsp 
  	 	<?php
  	 	$recor6=mysqli_query($con,"SELECT * FROM exam_record WHERE E_No='$E_No'");
  	 	    while($ag=mysqli_fetch_assoc($recor6)) {
  	 	    	echo "".$ag['GT2']."";
  	 	    }
  	 	   ?>
       </strong>
  	 	   </h3> 
</div>
  
</div>
		<div id="Rank" class="tabcontent">
  	 	   <h2> <strong>Class Comparison</strong> </h2> <br>
  	 	   <h3 style="text-align: center;"><strong>Semester 1</strong> </h3>  
  	 	   <h4> Rank 1 Marks :<?php
  	 	    $recor7=mysqli_query($con,"SELECT max(GT) as gt2 FROM exam_record");
         	 	    while($r1=mysqli_fetch_assoc($recor7)) {
  	 	    	echo "".$r1['gt2']."";
  	 	    }
  	 	   ?>
  	 	</h4>
  	 	<h4> Rank 2 Marks:<?php
  	 	 $recor8=mysqli_query($con,"SELECT max(GT) as sg2 FROM exam_record where GT < (SELECT max(GT) FROM exam_record)");
  	 	    while($r2=mysqli_fetch_assoc($recor8)) {
  	 	    	echo "".$r2['sg2']."";
  	 	    }
  	 	   ?>
  	 <h4> <strong> Your Rank : <?php
       $recor9=mysqli_query($con,"SELECT 1 + (SELECT count( * ) FROM exam_record a WHERE a.GT > b.GT ) AS rank FROM
exam_record b WHERE E_no = '$E_No' ORDER BY rank LIMIT 1  ");
          while($r3=mysqli_fetch_assoc($recor9)) {
            echo "".$r3['rank']."";
          }
         ?>
     
  	 	<h3 style="text-align: center;"><strong>Semester 2 </strong></h3>  
  	 	 <h4> Rank 1 Marks :<?php
  	 	    $record7=mysqli_query($con,"SELECT max(GT2) as gt FROM exam_record");
         	 	    while($r1=mysqli_fetch_assoc($record7)) {
  	 	    	echo "".$r1['gt']."";
  	 	    }
  	 	   ?>
  	 	</h4>
  	 	<h4> Rank 2 Marks:<?php
  	 	 $record8=mysqli_query($con,"SELECT max(GT2) as sg FROM exam_record where GT < (SELECT max(GT) FROM exam_record)");
  	 	    while($r2=mysqli_fetch_assoc($record8)) {
  	 	    	echo "".$r2['sg']."";
  	 	    }
  	 	   ?>
  	 	</h4>

  	 	<h4><strong> Your Rank : <?php
  	 	 $record9=mysqli_query($con,"SELECT 1 + (SELECT count( * ) FROM exam_record a WHERE a.GT2 > b.GT2 ) AS rank1 FROM
exam_record b WHERE E_no = '$E_No' ORDER BY rank1 LIMIT 1  ");
  	 	    while($r3=mysqli_fetch_assoc($record9)) {
  	 	    	echo "".$r3['rank1']."";
  	 	    }
  	 	   ?>
  	 </strong>	</h4>
  	 </div>

<div id="Percentage" class="tabcontent">
         <h2><strong>Percentage In each Semester</strong> </h2>
       <h3> Semester 1 :- <strong><?php 
       $record10=mysqli_query($con,"SELECT (GT/500)*100 as PER from exam_record  WHERE E_No=$E_No");
         while($PER1=mysqli_fetch_assoc($record10)) {
  	 	    	echo "".$PER1['PER']."";
  	 	    }
  	 	   ?></strong></h3>
  	 	   <h3> Semester 2 :- <strong><?php 
       $recor10=mysqli_query($con,"SELECT (GT2/500)*100 as PER from exam_record  WHERE E_No=$E_No");
         while($PER1=mysqli_fetch_assoc($recor10)) {
  	 	    	echo "".$PER1['PER']."";
  	 	    }
  	 	   ?></strong></h3>
  	 	   <h3 style="text-align: center;"> Aggregate Percentage:-<strong> <?php 
       $recor11=mysqli_query($con,"SELECT ((GT2+GT)/1000)*100 as PER from exam_record  WHERE E_No=$E_No");
         while($PER1=mysqli_fetch_assoc($recor11)) {
  	 	    	echo "".$PER1['PER']."";
  	 	    }
  	 	   ?></strong></h3>
  	 	   
</div>
<div id="Line_Graph" class="tabcontent">
  <h3><strong><u>Pictorial Representation of Result</u></strong></h3>
  <img src="img\p1.png" width=1000 height=350 style="align-content: center;" />
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

</body>
  </html>

