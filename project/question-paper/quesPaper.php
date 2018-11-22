<html><head>
 <title>QP Generator</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #99d9e8;
}


li {
    float: left;
    border-right:1px solid #000;
	
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

h1{
    color:white;
}

li a:hover:not(.active) {
    background-color: white;
}

.active {
    background-color: Blue
    ;
}
body {
    min-height:100%;
    background-color: #263238;
	color:white;
}
</style>
</head>
<body>
<div class="container" ng-app="myApp">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <center><h1>Question Paper
		<div style="float:right" id="picture"><img src="../pesuLOGO.png" height=90 width=100/></div></h1></center>
		
			
      </div>
	  
    </div>
	<br/></br></br>
    
    <div ui-view></div>
    
  </div>
<ul class="header">
  <li><a class="active" href="../home.html">Home</a></li>
    <li style="float:right"><a href="../login-page/index.php">Logout</a></li>
</ul>
<br/>
	<div id="textDiv">
		<?php
			$fname=$_REQUEST['subject'];
			
			if($fname=="Data Structures"){
				$retarr ="UE15CS202";
			}
			elseif($fname=="Introduction to Data Science"){
				$retarr ="UE15CS201";
			}
			elseif($fname=="Digital Design and Computer Organization"){
				$retarr ="UE15CS203";
			}
			elseif($fname=="Web Technologies-1"){
				$retarr ="UE15CS204";
			}
			elseif($fname=="Theory of Computation"){
				$retarr ="UE15CS255";
			}
			elseif($fname=="Linear Algebra"){
				$retarr ="UE15CS251";
			}
			elseif($fname=="Design and Analysis of Algorithms"){
				$retarr ="UE15CS252";
			}
			elseif($fname=="Database Management System"){
				$retarr ="UE15CS253";
			}
			elseif($fname=="Microprocessor and Computer Architecture"){
				$retarr ="UE15CS254";
			}
			elseif($fname=="Computer Networks"){
				$retarr ="UE15CS301";
			}
			elseif($fname=="Operating Systems"){
				$retarr ="UE15CS302";
			}
			elseif($fname=="Principles of Programming Languages"){
				$retarr ="UE15CS303";
			}
			elseif($fname=="Compiler Design"){
				$retarr ="UE15CS351";
			}
			elseif($fname=="Machine Learning"){
				$retarr ="UE15CS353";
			}
			elseif($fname=="Unix System Programming"){
				$retarr ="UE15CS352";
			}
			elseif($fname=="Web Technologies-2"){
				$retarr ="UE15CS403";
			}
			elseif($fname=="Object Oriented Modelling and Design"){
				$retarr ="UE15CS401";
			}
			elseif($fname=="Wireless Systems"){
				$retarr ="UE15CS420";
			}
			elseif($fname=="Social Network Analysis"){
				$retarr="UE15CS424";
			}
			echo "<html><body>";
			echo "<center>";
			echo "<div id='courseCode' style='font-size:160%'>Course Code: ";
			echo $retarr;
			echo "</div>";
			echo "<div id='courseName' style='font-size:160%'>Course Name: ";
			echo $fname;
			echo "</div>";
			echo "</center><br/><br/><br/>";
			
			$content=$_REQUEST['item3'];
			$myFile=fopen("input.txt","w") or die("Unable to open file!");
			fwrite($myFile,$content);
			fclose($myFile);
			
			$qType=$_REQUEST['emp_gender'];
			
			
			//Code if shell exec works
			if($qType=="fillin"){
				//$cmd=escapeshellcmd('C:/Bhavana/python.exe ../Working/Fill_in_blanks.py');
				//$a=shell_exec($cmd);
				//echo($a);
				$a=file_get_contents("out1.txt");
				$b=explode("$",$a);
			
				$ans=array();
				$unique=array();
				for($j=0;$j<count($b)-1;$j++){
					if($j%2!=0){
						array_push($ans,$b[$j]);
					}
				}
				$unique = array_unique($ans);
				echo "<br>";
				$my_str="";
				$k=1;
				$p=0;
			
				for($i=0;$i<count($b)-1;$i++){
					echo "<b>Question $k: </b>";
					echo $b[$i];
					echo "<br>";
					$i++;
					$k++;
					echo "<b>Answer&nbsp &nbsp  :  </b>";
					echo "<input type=text name=$p>";
					echo "<br>";
					echo "<br>";
					$my_str = $my_str.$b[$i];
					$my_str = $my_str.",";
					$p++;
				}
			}
			else{
				//$cmd=escapeshellcmd('C:/Bhavana/python.exe what_question_gen.py');
				//$a=shell_exec($cmd);
				//echo($a);
				$a=file_get_contents("out2.txt");
				$b=explode("?",$a);
				//echo $a;
				$ans=array();			
				$unique=array();
				for($j=0;$j<count($b)-1;$j++){
					array_push($ans,$b[$j]);
				}
				//$unique = array_unique($ans);
				echo "<br>";
				$my_str="";
				$k=1;
				$p=0;
					
				for($i=0;$i<count($b)-1;$i++){
					echo "<b>Question $k: </b>";
					echo $b[$i];
					echo "<br>";
					$k++;
				}
			}			
			echo "</body></html>";
		?>	
		
		
	</div>
</body>
</html>
