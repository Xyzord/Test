    <html>  
    <head>							
		<title>Advertisements</title>				
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
							<th>Hírdetés</th>
							<th>Feladó</th>
						</tr>
					</thead>
					<tbody>
				   <?php
						// listing the advertisements
						while($ads = mysqli_fetch_array($adList, MYSQLI_ASSOC)) {
								echo "<tr>
										<td class='adId'><i>#".$ads["adsID"]."</i></td>
										<td class='adTitle'>".$ads["adsTitle"]."</td>
										<td class='adOwner'>".$ads["usrName"]."</td>
									</tr>";
						}
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