    <html>  
    <head>							
		<title>Advertisers</title>				
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<meta name="author" content="Richard Biró">
		
		<link rel='stylesheet' type='text/css' href='css/style.css'>
	</head>
    <body>
		<!-- WRAPPER START -->
		<div id="wrapper">
			<!-- MENU START -->
			<div id="menu">
				<ul>
					<li><a href="http://localhost/test/" >Home</a></li>
					<li><a href="http://localhost/test/users" >List users</a></li>
					<li><a href="http://localhost/test/advertisements" >List advertisements</a></li>
				</ul>
			</div>
			<!-- MENU END -->
			<!-- CONTENT START -->
		   <div id="content">
				<table>
					<thead>
						<tr>
							<th>#ID</th>
							<th>Felhasználó</th>
						</tr>
					</thead>
					<tbody>
					   <?php
							//listing the users
							while($user = mysqli_fetch_array($userList, MYSQLI_ASSOC))
								echo "<tr>
									<td class='usrId'>#".$user["id"]."</td>
									<td class='usrName'>".$user["name"]."</td>
								</tr>";
						?>
					</tbody>
					<tfoot>
					</tfoot>
				</table>
			</div>
			<!-- CONTENT END -->
			<!-- FOOTER START -->
			<div id="footer">
				Author: Richard Biró
			</div>
			<!-- FOOTER END -->
		</div>
		<!-- WRAPPER END -->
    </body>  
    </html>  