<html>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 15px;
  text-align: center;
  background: #008080;
  color: white;
  font-size: 10px;
  border: 1px solid black;
}
.header2 {
  /*padding: 15px;*/
  text-align: left;
  background: #000080;
  color: white;
  font-size: 10px;
  border: 1px solid black;
}

/* Page Content */
.content {padding:20px;}

.dropdown-submenu1 {
  position: relative;
}

.dropdown-submenu1 .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
.buttonStyle {
  background-color: #76bcba;
  border: 1px
  color: white;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  text-
}
.style_text{
color : black;
border: 1px;
background-color : #76bcba;
font-size: 20px;
margin: 4px 2px;
text-align: center;
height : 150;
width : 300;
}
.onImage {
  position: absolute;
  color: white;
  top: 20%;
  left: 50%;
  font-size: 40px;
  text-align: center;
  transform: translate(-50%, -50%);
}
.onImageHyundai {
  position: absolute;
  color: white;
  top: 10%;
  left: 50%;
  font-size: 80px;
  text-align: center;
  transform: translate(-50%, -50%);
}

</style>
</head>

  <body>
  <?php
	if($_GET["uname"] == "6010730"){
		if($_GET["psw"] == "6010730"){
			;
		}else{
			echo '<script language="javascript">';
			echo 'alert("Sorry Wrong Password ")';
			echo '</script>';
			return;}
	}else{
		echo '<script language="javascript">';
		echo 'alert("Sorry Wrong User ")';
		echo '</script>';
		return;
	}
  ?>
	
    <div >
  <h1><img src="Capture.JPG" alt="Smart IT Work Tracking Tool" width="2000" height="300">
  <div class="onImageHyundai">Hyundai Mobis</div>
  <div class="onImage">Smart&nbsp;IT&nbsp;Work&nbsp;Tracking&nbsp;Tool</div></h1>
	</div>
    <br>
	<input type="file"id="inp" class="custom-file-input"></input>
	<hr>
	<br>
    <div>
      &nbsp;&nbsp;&nbsp;
	  <button class="buttonStyle" id="project">Projects</button>&nbsp;&nbsp;&nbsp; <span id="container" class="style_text"></span> &nbsp;&nbsp;&nbsp; <span id="name" class="style_text"></span>
	  <br>
    </div>
	<br>
	&nbsp;&nbsp;&nbsp;
	<!--<div id="container"></div>-->
	<br><br>
	&nbsp;&nbsp;&nbsp;
	<!--<div id="name"></div>-->
	
	<br><br>
	<div id="tab"></div>
	
  </body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>

<script>
strSheetName = new Array();
document.getElementById('project').onclick = function() {
	a=5;
	
	var file = document.getElementById("inp");
	var reader = new FileReader();
	if (reader.readAsBinaryString) {
        reader.onload = function (e) {
        //Read the Excel File data.
        var workbook = XLSX.read(e.target.result, {
            type: 'binary'
        });
		var sheets = workbook.SheetNames;
		
		for(var i=0; i<sheets.length; i++)
		{
			//console.log(workbook.SheetNames[i]);
			strSheetName[i] =  workbook.SheetNames[i];
				
		}
		}
		for(var i=0; i<3; i++)
		{
			console.log("Hello3");
			console.log(strSheetName[i]);
		}
		reader.readAsBinaryString(file.files[0]);
    }
	var values = [" ","ACU", "MFC", "AVN", "ADS_PRK"];
	//var inpt = document.createElement("input");
	//inpt.type = "file";
	//document.getElementById("inp").appendChild(inpt);	
	var select = document.createElement("select");
	select.onchange=  fun;
	select.name = "projects";
	select.id = "projects"

	for (const val of values) {
		var option = document.createElement("option");
		option.value = val;
		option.text = val.charAt(0).toUpperCase() + val.slice(1);
		select.appendChild(option);
	}

	var label = document.createElement("label");
	label.innerHTML = "Choose your Project: "
	label.htmlFor = "Project";

	var count = document.getElementById("container").childElementCount;
	if(count == 0)
		document.getElementById("container").appendChild(label).appendChild(select);
  
}
/*function ProcessExcel(data) {
        //Read the Excel File data.
        var workbook = XLSX.read(data, {
            type: 'binary'
        });
		var sheets = workbook.SheetNames;
		console.log("Hello2");
		console.log(sheets.length);
		console.log(typeof sheets);
		return sheets;
}*/
		
function fun(){
	console.log("Hello");
	console.log(a);
	var select = document.createElement("select");
	select.onchange=  fun2;
	select.name = "names";
	select.id = "names"
	
	var values = [" ","Engineer1", "Engineer2", "Engineer3", "Engineer4"];
	for (const val of values) {
    var option = document.createElement("option");
    option.value = val;
    option.text = val.charAt(0).toUpperCase() + val.slice(1);
    select.appendChild(option);
	}
	
  var label = document.createElement("label");
  label.innerHTML = "Choose Engineer: "
  label.htmlFor = "Engineer";
  var count = document.getElementById("name").childElementCount;
  if(count == 0)
	document.getElementById("name").appendChild(label).appendChild(select);
  /*else
	document.getElementById("name").replaceChild(label,document.getElementById("name").childNode[0]).appendChild(select);*/
  
}
  
function fun2(){
//console.log("Name");
		
		var table = document.createElement("table");
        table.border = "2";
		table.style.padding = "15px";
		table.style.background = "#f1f1c1"
		table.style.width = "70%";
		table.style.cssFloat = "center";
        //Add the header row.
        var row = table.insertRow(-1);
 
        //Add the header cells.
        var headerCell = document.createElement("TH");
        headerCell.innerHTML = "Date";
        row.appendChild(headerCell);
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "Module Name";
        row.appendChild(headerCell);
 
        headerCell = document.createElement("TH");
        headerCell.innerHTML = "File Name";
        row.appendChild(headerCell);
		
		headerCell = document.createElement("TH");
        headerCell.innerHTML = "Total Statement";
        row.appendChild(headerCell);
		
		headerCell = document.createElement("TH");
        headerCell.innerHTML = "Statement covered";
        row.appendChild(headerCell);
		
		headerCell = document.createElement("TH");
        headerCell.innerHTML = "Total statement covered for module";
        row.appendChild(headerCell);
		
		headerCell = document.createElement("TH");
        headerCell.innerHTML = "Productivity";
        row.appendChild(headerCell);
		//document.body.appendChild(table);
		
		var count = document.getElementById("tab").childElementCount;
		if(count == 0){
			document.getElementById("tab").appendChild(table);
		}
		else{
			console.log("Removed");
			document.getElementById("tab").removeChild(document.getElementById("tab").lastElementChild);
			document.getElementById("tab").appendChild(table);
		}
		
}  



</script>