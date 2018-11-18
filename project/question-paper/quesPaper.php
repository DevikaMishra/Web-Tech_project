<!DOCTYPE html>
<html>
<head>
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
<!--
	<script type="text/javascript">
		var xhr=new XMLHttpRequest();
		function init(){
			xhr.onreadystatechange=showContent;
			xhr.open("GET","text.txt",true);
			xhr.send();
		}
		
		function showContent(){
			if(xhr.readyState==4 && xhr.status==200){
				var res=xhr.responseText;
				var resArr=res.split(";");
				document.getElementById("textDiv").innerHTML=resArr[0];
				document.getElementById("picture").innerHTML=resArr[1];
				setTimeout(getPic,2000);
			}
		}
		
		function getPic(){
			this.xhr.onreadystatechange=this.showPic;
			this.xhr.open("GET","img.txt",true);
			this.xhr.send();
		}
		
		function showPic(){
			if(xhr.readyState==4 && xhr.status==200){
				var res=this.responseText;
				document.getElementById("picture").innerHTML=res;
			}
		}	
		
	</script>	
-->
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
    <li style="float:right"><a href="../login-page/index.html">Logout</a></li>
</ul>
<br/>
	<div id="textDiv">
		<center>
		<div id="courseCode" style="font-size:160%">Course Code: <span id="CCode">UE15CS</span></div>
		<div id="courseName" style="font-size:160%">Course Name: <span id="CCode">ABCDE</span></div>
		</center>
		<br/><br/><br/>
		<?php
			//$content=$_REQUEST['t'];
			//$myFile=fopen("input.txt","w") or die("Unable to open file!");
			//fwrite($myfile,$content);
			$a=file_get_contents("out.txt");
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
			echo "<html><body>";
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
			echo "</body></html>";
		?>		
	</div>
</body>
</html>