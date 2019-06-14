<!DOCTYPE html 5>
<html>
	<head>
		<title>IGMASS</title>
		<meta charset="utf-8">    
		<meta http-equiv="X-UA-Compatible" content="IE=edge">    
		<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 	<link rel="stylesheet" type="text/css" href="../css/style.css">
  		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  		<link rel="stylesheet" type="text/css" href="../css/jumbotron.css">
  	</head>

	<body style="background-image: url(../img/cloud.jpg); background-size: 100%" >
	<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
   	<script type="text/javascript"></script>



 <?php
 	session_start();
 
 	$E_No = -1;
 	$Name = "Invalid";
 	$con=mysqli_connect("localhost","root","","mca");
 	$doprocess = false;

 	if(isset($_POST['submit']))
 	{
 	   $E_No = $_POST['enrollement_no'];
 	   $Name = $_POST['Name'];
	   // Storing session data
	   $_SESSION["E_No"] = $E_No;
	   $_SESSION["Name"] = $Name;
	   $doprocess = true;
 	} else if (isset($_SESSION["E_No"])) {
	   $E_No = $_SESSION["E_No"];
	   $Name = $_SESSION["Name"];
	   $doprocess = true;
 	}   

 	if ($doprocess == true){
 	   // to prevent mysql injection
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

 	    echo " &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
 	    echo '<h1 align="center">Welcome to igdtuw STUDENT PORTAL</h1>';
 	}
 	else
 	{ 
 	    
 	}		 		
 	}
	 else {
	 	# code...

 	   echo "<h1> Record Not Found </h1>";
 	   die("User Not Found!");
	 }
   ?>

   	<header>
   		<div class="navbar navbar-fixed-top navbar navbar-dark bg-dark" style="background-color: black;" role="navigation">
        	<div class="navbar-inner">
        	<div class="container-fluid">
        		<div class="navbar-header">
    	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    	              <span class="sr-only">Toggle navigation</span>
    	              <span class="icon-bar"></span>
    	              <span class="icon-bar"></span>
    	              <span class="icon-bar"></span>
    	              <span class="icon-bar"></span>
    	              <span class="icon-bar"></span>
    	            </button>
    	            <b class="navbar-brand" style="color:white; font-family: Cooper Black; margin-right: 90px;" >IGMASS</b>
              	</div>

              	 <div class="navbar-collapse collapse">
        			<ul class="nav navbar-nav navbar-success">
    	    			<li class="menubar"><a href="result1.php">Home </a></li> 
    	    			<li class="menubar"><a href="about.html"> About Us </a></li>
    	    			<li class="menubar" ><a href="disclaimer.html"> Disclaimer </a></li>
    	    			<li class="menubar"><a href="contact.html"> Contact Us </a></li>
        			</ul>

        			
        			<ul class="nav navbar-nav navbar-right">
        				<li class="dropdown menubar">
    	                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile <b class="caret"></b></a>
    	                <ul class="dropdown-menu">
    	                  <li><a href="paper.html">Question Papers</a></li>
    	                  <li class="divider"></li>
    	                  <li class="dropdown-header"><a href="logout.php"><h5>Logout</h5></a></li>
                        </ul>
                        </li>
        			</ul>
        		</div>
        	</div>
        	</div>
        	</div>
   	</header> <br> <br> <br> <br> <br>
   	<content>

   		<div class="container-fluid">
   			<!--div class="d-flex align-content-start flex-wrap"-->
		   		<div class="row">
		   		<div class="col-md-3">
		   			
		   		</div>
		   		<div class="col-md-6">
		        <div class="row">
		        	<div class="col-md-6 well well-sm text-center" style="background-color:white
		        	; color: black;"><strong>Enrollment Number: <?php echo $E_No;?></strong>  </div>
		        	<div class="col-md-6 well well-sm text-center" style="background-color: white; color: black;"><strong>Name: <?php echo $Name;?></strong></div>
		        </div>
		        <div class="row">
		        	<div class="col-md-12 well well-sm text-center" style="background-color: white; color: black;"><strong>University: Indira Gandhi Delhi Technical University For Woman</strong></div>
		        </div>
		        <div class="row">
		        	<div class="col-md-4 well well-sm text-center" style="background-color:white; color: black;"><strong>Batch: 2017</strong></div>
		        	<div class="col-md-4 well well-sm text-center" style="background-color: white; color: black;"><strong>Course: MCA</strong></div>
		        
		        
		        	<div class="col-md-4 well well-sm text-center" style="background-color: white; color: black;"><strong>Aggregate: <?php 
       $recor11=mysqli_query($con,"SELECT ((GT2+GT)/1000)*100 as PER from exam_record  WHERE E_No=$E_No");
         while($PER1=mysqli_fetch_assoc($recor11)) {
  	 	    	echo "".$PER1['PER']."";
  	 	    }
  	 	   ?></strong></div>
  	 	   </div>		        	
		        <div class="row">
		        	<div class="col-md-12 well well-sm text-center" style="background-color: white; color: black;"><strong>(Note - Aggregate only consists of semesters and subjects shown below)</strong></div>
		        </div>
		        </div>
		        <div class="col-md-3">
		        	
		        </div>
		    </div>
   		</div>

   		<div class="container-fluid">
   		<div class="row">
   			<div class="col-md-offset-2 col-md-8">
		  <h2 class="page-header"><str   ong>Result Analysis</strong></h2>
		  <div class="panel panel-primary">
		    <div class="panel-heading">
		    	<div class="row">
		    	<div class="col-md-10"> Semester 1 </div>
		    	
		    	<div class="col-md-2 button button-default">+</div>
		    	</div>
		    </div>
		    <div class="panel-body">
		    	<table class="table striped hovered cell-hovered border bordered no-margin block-shadow ">
		    		<tr>
		    			<th> Subject </th>
		    			<th> Minor 1</th>
		    			<th> Minor 2</th>
		    			<th> Teacher's Assessment</th>
		    			<th> External</th>
		    			<th>Total</th>
		    		</tr>
		    		<td><?php 
  	 		while($dm=mysqli_fetch_assoc($record1)) {
  	 			echo "<tr>";
  	 			echo "<td> Discrete Mathematics &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$dm['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$dm['TOTAL']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";

  	 	}
  	 	while($ss=mysqli_fetch_assoc($record2)) {
  	 			echo "<tr>";
  	 			echo "<td> Soft Skills &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$ss['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$ss['TOTAL']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	while($fit=mysqli_fetch_assoc($record3)) {
  	 			echo "<tr>";
  	 			echo "<td> Fundamentals Of IT &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$fit['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$fit['TOTAL']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	
  	 	while($CO=mysqli_fetch_assoc($record4)) {
  	 			echo "<tr>";
  	 			echo "<td> Computer Organisation &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$CO['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$CO['TOTAL']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	while($cp=mysqli_fetch_assoc($record5)) {
  	 			echo "<tr>";
  	 			echo "<td> Problem Solving With C &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 			echo "<td>".$cp['M1']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['M2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['TE']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['EX']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "<td>".$cp['TOTAL']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	
  	 	?></td>
		    	</table>

		    </div>
		    <div class="panel-footer">
		    	<div class="flex-grid" style="margin-bottom: 0px; display: inline;">
		    		<div class="row cell3 border no-margin" style="display: inline;">
		    			<div class="col-md-4 cell colspan text-center no-margin nopadding well well-sm" style="background-color: #EF5350; color: white; border-collapse: collapse;">
		    				<div class="celldiv">Total - <?php
  	 	    while($ag=mysqli_fetch_assoc($record6)) {
  	 	    	echo "".$ag['GT']."";
  	 	    }
  	 	   ?>	</div>
		    			</div>
		    			<div class="col-md-4 cell colspan text-center no-margin nopadding well well-sm" style="background-color: #EF5350; color: white; border-collapse: collapse;">
		    				<div class="celldiv">Percentage - <?php 
       $record10=mysqli_query($con,"SELECT (GT/500)*100 as PER from exam_record  WHERE E_No=$E_No");
         while($PER1=mysqli_fetch_assoc($record10)) {
  	 	    	echo "".$PER1['PER']."";
  	 	    }
  	 	   ?></div>
		    			
		    		</div>
		    		
		    			<div class="col-md-4 cell colspan text-center no-margin nopadding well well-sm" style="background-color: #EF5350; color: white;">
		    				<div class="celldiv">Your Rank - <?php
       $recor9=mysqli_query($con,"SELECT 1 + (SELECT count( * ) FROM exam_record a WHERE a.GT > b.GT ) AS rank FROM
exam_record b WHERE E_no = '$E_No' ORDER BY rank LIMIT 1  ");
          while($r3=mysqli_fetch_assoc($recor9)) {
            echo "".$r3['rank']."";
          }
         ?></div>
		  	    			
		    		</div>
		    	</div>
		    </div>
		  </div>
      </div>
      
 		    	<br>
 		    	<br>
		  <div class="panel panel-primary">
		    <div class="panel-heading">
		    	<div class="row">
		    	<div class="col-md-10"> Semester 2 </div>
		    	
		    	<div class="col-md-2 button button-default" data-toggle="collapse" data-target=".demo">+</div>
		    	</div>
		    </div>
		    <div class="panel-body collapse demo">
		    	<table class="table striped hovered cell-hovered border bordered no-margin block-shadow ">
		    		<tr>
		    			<th> Subject </th>
		    			<th> Minor 1</th>
		    			<th> Minor 2</th>
		    			<th> Teacher's Assessment</th>
		    			<th> External</th>
		    			<th> Total</th>
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
  	 		echo "<td>".$dm2['TOTAL2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
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
  	 		echo "<td>".$ss['TOTAL2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
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
  	 		echo "<td>".$fit['TOTAL2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
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
  	 		echo "<td>".$CO['TOTAL2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
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
  	 		echo "<td>".$cp['TOTAL2']. "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td>";
  	 		echo "</tr>";
  	 		
  	 	}
  	 	?></td>
		    	</table>
		    </div>
		    <div class="panel-footer collapse demo">
		    	<div class="flex-grid" style="margin-bottom: 0px; display: inline;">
		    		<div class="row cell3 border no-margin" style="display: inline;">
		    			<div class="col-md-4 cell colspan text-center no-margin nopadding well well-sm" style="background-color: #EF5350; color: white; border-collapse: collapse;">
		    				<div class="celldiv">Total - <?php
  	 	$recor6=mysqli_query($con,"SELECT * FROM exam_record WHERE E_No='$E_No'");
  	 	    while($ag=mysqli_fetch_assoc($recor6)) {
  	 	    	echo "".$ag['GT2']."";
  	 	    }
  	 	   ?></div>
		    			</div>
		    			<div class="col-md-4 cell colspan text-center no-margin nopadding well well-sm" style="background-color: #EF5350; color: white; border-collapse: collapse;">
		    				<div class="celldiv">Percentage - <?php 
       $recor10=mysqli_query($con,"SELECT (GT2/500)*100 as PER from exam_record  WHERE E_No=$E_No");
         while($PER1=mysqli_fetch_assoc($recor10)) {
  	 	    	echo "".$PER1['PER']."";
  	 	    }
  	 	   ?></div>
		    			
		    		</div>
		    		
		    			<div class="col-md-4 cell colspan text-center no-margin nopadding well well-sm" style="background-color: #EF5350; color: white;">
		    				<div class="celldiv">Your Rank - <?php
  	 	 $record9=mysqli_query($con,"SELECT 1 + (SELECT count( * ) FROM exam_record a WHERE a.GT2 > b.GT2 ) AS rank1 FROM
exam_record b WHERE E_no = '$E_No' ORDER BY rank1 LIMIT 1  ");
  	 	    while($r3=mysqli_fetch_assoc($record9)) {
  	 	    	echo "".$r3['rank1']."";
  	 	    }
  	 	   ?></div>
		    			
		    			
		    		</div>
		    	</div>
		    </div>
		  </div>

		 

		  </div>
		  </div>
		</div>
   	</content>
   	<br><br><br><br><br><br>
   			<footer>
				<div class="well well-lg">
			        <div class="row">
			          <div class="col-md-2">
			            <h4><span class="glyphicon glyphicon-star"></span> Recent Updates</h4>
			            <nav>
			              <ul class="quick-links">
			                <li><a href="product.html">Update1</a></li>
			                <li><a href="product.html">Update2</a></li>
			                <li><a href="product.html">Update3</a></li>
			                <li><a href="all_products.html">All updates</a></li>
			              </ul>
			            </nav>
			          </div>
			          <div class="col-md-2">
			            <h4><span class="glyphicon glyphicon-star"></span> About</h4>
			            <nav>
			              <ul class="quick-links">
			                <li><a href="our_works.html">Our works</a></li>
			                <li><a href="patnerships.html">Patnerships</a></li>
			                <li><a href="leadership.html">Leadership</a></li>
			                <li><a href="news.html">News</a></li>
			                <li><a href="events.html">Events</a></li>
			                <li><a href="blog.html">Blog</a></li>
			              <ul>
			            </nav>          
			          </div>
			          <div class="col-md-2">
			            <h4><span class="glyphicon glyphicon-star"></span> Support</h4>
			            <nav>
			              <ul class="quick-links">
			                <li><a href="faq.html">FAQ</a></li>
			                <li><a href="contact_us.html">Contact us</a></li>            
			              </ul>
			            </nav>
			            <h4><span class="glyphicon glyphicon-star"></span> Legal</h4>
			            <nav>
			              <ul class="quick-links">
			                <li><a href="#">License</a></li>
			                <li><a href="#">Terms of Use</a></li>
			                <li><a href="#">Privacy Policy</a></li>
			                <li><a href="#">Security</a></li>      
			              </ul>
			            </nav>            
			          </div>
			          <div class="col-md-3">
			            <h4>Get in touch</h4>
			            <div class="social-icons-row">
			              <a href="#"><i class="fa fa-2x fa-twitter"></i></a>
			              <a href="#"><i class="fa fa-2x fa-facebook"></i></a>
			              <a href="#"><i class="fa fa-2x fa-linkedin"></i></a>                                         
			            </div>
			            <div class="social-icons-row">
			              <a href="#"><i class="fa fa-2x fa-google-plus"></i></a>              
			              <a href="#"><i class="fa fa-2x fa-github"></i></a>
			              <a href="mailto:info@mtutor.com"><i class="fa fa-2x fa-envelope"></i></a>        
			            </div>
			            <div class="social-icons-row">
			              <i class="fa fa-phone fa-2x"></i> +9198123456780
			            </div>
			          </div>      
			          <div class="col-md-3">
			            <h4>Subscribe Newsletter</h4>
			            <form>
			              <input type="text" name="email" placeholder="Email address">
			              <input type="submit" class="btn btn-primary" value="Subscribe">
			            </form>
			          </div>
			        </div>
			      </div>
			      <hr class="footer-divider">
			      <div class="container">
			        <p style="color: white;">
			          &copy; 2017-2020 IGDTUW. All Rights Reserved.
			        </p>
			      </div>    
		</footer>
	</body>
</html>