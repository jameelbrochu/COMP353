<!DOCTYPE HTML>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sell - Musical Instruments</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#">NavBar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy.php">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buy_user.php">Buy (User)</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sell
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="sell_clothes.php">Clothes</a>
                            <a class="dropdown-item" href="sell_books.php">Books</a>
                            <a class="dropdown-item" href="sell_musical_instruments.php">Musical Instruments</a>
                            <a class="dropdown-item" href="sell_electronics.php">Electronics</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="index.php?logout">
                    <a href="index.php?logout" class="btn btn-outline-dark">Logout</a>
                </form>
            </div>
        </nav>
        
		<br><br>

		<!--
		<div class="container ">
			<div class="jumbotron">
				<h1>Add Clothes</h1> 
		-->		
				<!-- Button trigger modal -->
		<div class=container>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Add Musical Instruments
			</button>
		</div>
		<!-- Modal -->
		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Musical Instrument</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">		
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return" method="post" name="myForm">
							<div class="form-group">
								<label for="exampleInputEmail1">Price</label>
								<input type="number" class="form-control" id=""  placeholder="Enter Price" name='price' required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Rating</label>
								<select class="form-control" id="exampleFormControlSelect1" name="rating">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>	
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Description</label>
								<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="60" required></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Title</label>
								<input type="input" class="form-control" id=""  placeholder="Enter Title" name='title' required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Type</label>
								<input type="input" class="form-control" id=""  placeholder="Enter Type" name='type' required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Start Date</label>
								<input name="startDate" id="startDate" class="form-control" type="date"  readonly>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">End Date</label>
								<input name="endDate" id="endDate" class="form-control" type="date" required>
							</div>  
							<div class="form-group">
								<label for="exampleInputEmail1">Street Name</label>
								<input type="input" class="form-control" id=""  placeholder="Enter Street Name" name='streetName' required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Postal Code</label>
								<input type="input" class="form-control" id=""  placeholder="Enter Postal Code" name='postalCode'  maxlength="6" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Street Number</label>
								<input type="number" class="form-control" id=""  placeholder="Enter Street Number" name='streetNumber' required>
							</div>
							<div class='form-group' id = 'container'>
							</div>  
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<!--<button type="button" class="btn btn-primary">Submit</button>-->
					</div>
				</div>
			</div>
		</div>		
		<!--		
			</div>
		</div>
		-->
		
		<br><br>
		
		<div class=container>
			<table class="table table-hover table-bordered table-responsive table-striped" id="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Price</th>
						<th scope="col">Rating</th>
						<th scope="col">Description</th>
						<th scope="col">Title</th>
						<th scope="col">Type</th>
						<th scope="col">Start Date</th>
						<th scope="col">End Date</th>
						<th scope="col">cType</th>
					</tr>
				</thead>
				<tbody>
					<tr hidden>
						<th scope="row"></th>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div class=container>
		<?php
			function fillTable(){
				$db_connection = new mysqli("tvc353_2.encs.concordia.ca", "tvc353_2", "iLcS2017","tvc353_2");
				$queryGetMusicalInstruments = "SELECT MusicalInstruments.price,MusicalInstruments.rating,MusicalInstruments.descr,MusicalInstruments.title,MusicalInstruments.type,MusicalInstruments.date,MusicalInstruments.cType,MusicalInstruments.miID,Ad.miID as Ad,Ad.userID,Ad.startDate,Ad.endDate FROM (MusicalInstruments INNER JOIN Ad ON MusicalInstruments.miID=Ad.miID) INNER JOIN User ON Ad.userID=User.uID WHERE User.email='".$_SESSION['user_email']."'";
				//$queryGetMusicalInstruments = "SELECT * FROM MusicalInstruments";
				$passQuery = mysqli_query($db_connection , $queryGetMusicalInstruments);
				mysqli_close($db_connection);
				$classes_sections = array();
				$inc = 0;

				echo "
				<script>
					";
					while( $rowAllProvinces = mysqli_fetch_array( $passQuery))
					{ 
						++$inc;
						
				echo	"
						var table = document.getElementById('table');
						var row = table.insertRow();
						var cell1 = row.insertCell();
						var cell2 = row.insertCell();
						var cell3 = row.insertCell();
						var cell4 = row.insertCell();
						var cell5 = row.insertCell();
						var cell6 = row.insertCell();
						var cell7 = row.insertCell();
						var cell8 = row.insertCell();
						var cell9 = row.insertCell();
						
						
						
						cell1.outerHTML = '<th>' + ".$inc." + '</th>';
						cell2.innerHTML = '".$rowAllProvinces['price']."';
						cell3.innerHTML = '".$rowAllProvinces['rating']."';
						cell4.innerHTML = '".$rowAllProvinces['descr']."';
						cell5.innerHTML = '".$rowAllProvinces['title']."';
						cell6.innerHTML = '".$rowAllProvinces['type']."';
						cell7.innerHTML = '".$rowAllProvinces['startDate']."';
						cell8.innerHTML = '".$rowAllProvinces['endDate']."';
						cell9.innerHTML = '".$rowAllProvinces['cType']."';";
					};
				echo "</script>	   ";
			}
			fillTable();
		?>		
		<script>
			var d = new Date();
			var date = d.getDate();
			var month = d.getMonth()+1;

			if(date < 10)
			{
				var date = "0" + date;
			}
			
			if(month < 10)
			{
				var month = "0" + month;
			}
			
			document.getElementById("startDate").value = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + date ;
		</script>
		
		<?php

			function provinceDropdown(){
				$db_connection = new mysqli("tvc353_2.encs.concordia.ca", "tvc353_2", "iLcS2017","tvc353_2");
				$queryFindProvince = "SELECT DISTINCT cityName FROM City ORDER BY cityName";
				$passQuery = mysqli_query($db_connection , $queryFindProvince);
				mysqli_close($db_connection);
				$classes_sections = array();
				$inc = 0;
				$together = "";
				while( $rowAllProvinces = mysqli_fetch_assoc( $passQuery)){
					++$inc;
					$classes_sections[] =
					"var classText". $inc . " = document.createTextNode(\"" .  $rowAllProvinces['cityName'] . "\");
					var optionClass". $inc ." = document.createElement(\"option\");
					optionClass". $inc .".appendChild(classText". $inc .");
					selectClass.appendChild(optionClass". $inc .");";
				}
				//looping through all classes + sections and storing it as one long string into $together
				for ($key = 0, $size = count($classes_sections); $key < $size; $key++) {
					$together .= $classes_sections[$key] . " ";
				}
				echo
				'<script>
					document.onload = dropdown();
					function dropdown(){
						//var number = document.getElementById("sel1").value;
						// Container <div> where dynamic content will be placed
						var container = document.getElementById("container");
						//var stuff = document.createElement("input");
						//container.appendChild(stuff);
						while (container.hasChildNodes()) {
							container.removeChild(container.lastChild);
						}
						for (i=0;i<1;i++){//number;i++){
							// Create an <input> element, set its type and name attributes
							var div = document.createElement("div");
							div.className = "form-group";
							var label = document.createElement("label");
							var p = document.createElement("p");
							var text = document.createTextNode("Enter your city:");
							p.appendChild(text);
							label.appendChild(p);
							div.appendChild(label);
							//creating Class dropdown selection
							var number1 = i + 1;
							var selectClass = document.createElement("select");
							selectClass.className = "form-control";
							selectClass.placeholder = "Class";
							selectClass.name = "city";
							' . $together . '
							div.appendChild(selectClass);
							container.appendChild(div);
						}
					}
				</script>';
			}
			provinceDropdown();
		?>
	

		<?php 

			if(isset($_POST['price']))
			{
				
				/*
				echo "<table>";
				foreach ($_POST as $key => $value) 
				{
					echo "<tr>";
					echo "<td>";
					echo $key;
					echo "</td>";
					echo "<td>";
					echo $value;
					echo "</td>";
					echo "</tr>";
				}
				echo "</table>";
				*/
				submit();
			}
	
			function submit()
			{

				$miID = uniqid();
				$addressID = uniqid();
				$adID = uniqid();

				$db_connection = new mysqli("tvc353_2.encs.concordia.ca", "tvc353_2", "iLcS2017","tvc353_2");
				
				$queryAddClothes="insert into MusicalInstruments (miID,price,rating,descr,title,type,date,cType) values ('".$miID."', '".$_POST['price']."','". $_POST['rating'] ."','".$_POST['description']."','".$_POST['title']."','".$_POST['type']."','".$_POST['startDate']."','Buy and Sell')";
				$queryAddAddress="insert into Address (addressID,street,pCode,streetNo,cityName) values ('".$addressID."', '".$_POST['streetName']."','".$_POST['postalCode']."','".$_POST['streetNumber']."','".$_POST['city']."')";
				$queryGetUID="select uID from User where email='".$_SESSION['user_email']."'";
				

				$ret = mysqli_query($db_connection, $queryAddClothes);
				$ret1 =mysqli_query($db_connection, $queryAddAddress); 
				$ret2 =mysqli_query($db_connection, $queryGetUID);  
		
				$rowAllUID = mysqli_fetch_assoc($ret2);

		
				//$queryAddAd="insert into Ad(adID,isPromo,startDate,endDate,userID,addressID,cID) values ('".$adID."','false','".$_POST['startDate']."','".$_POST['endDate']."','".$rowAllUID['uID']."','".$addressID."','".$cID."')";
				$queryAddAd="insert into Ad(adID,startDate,endDate,userId,addressID,miID) values ('".$adID."','".$_POST['startDate']."','".$_POST['endDate']."','".$rowAllUID['uID']."','".$addressID."','".$miID."')";

				$ret3 =mysqli_query($db_connection, $queryAddAd);		

				if(!$ret) 
				{
					mysqli_close($db_connection);
					echo "connection failed";
					return false;
				}
				
				if(!$ret1) 
				{
					mysqli_close($db_connection);
					echo "connection failed to address";
					return false;
				}
			}

		?>

    </body>
</html>