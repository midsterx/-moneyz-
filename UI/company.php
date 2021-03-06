<?php
		session_start();
 	?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="nav-bar.css">
		<link rel="stylesheet" type="text/css" href="table.css">
		<link rel="stylesheet" type="text/css" href="search-bar.css">
		<link rel="stylesheet" type="text/css" href="filter.css">
  		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	</head>
	<body>
		<nav>
			<a href="#">Stocks</a>
			<a href="#">My Profile</a>
			<a href="#">ForEx</a>
			<a href="#">Mutual Funds</a>
			<?php
				if (isset($_SESSION['logged_in'])){
						if ($_SESSION['logged_in'] == 1){
					echo '<a href="Logins/logout.php"><b>'.$_SESSION['first_name'].'</b></a>';
				}
				else{
					echo '<a href="Logins/index.php"><b>Sign In</b></a>';
				}
			}
			else {
				echo '<a href="Logins/index.php"><b>Sign In</b></a>';
			}
			 ?>
			<div class="animation start-home"></div>
		</nav>
		<div id="search">
			<form method="get" action="/search" id="searchbox">
				<input id="searchmain" name="q" type="text" size="40" placeholder="Search..." />
			</form>
		</div>
		<div id="wrap">
			<div id="dropdown" class="ddmenu">
			User Settings
				<ul>
					<li><a href="#">My Profile</a></li>
					<li><a href="#">Friend Requests</a></li>
					<li><a href="#">Account Settings</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Log Out</a></li>
			  	</ul>
			</div>
		</div>
		<script type="text/javascript">
			$("#dropdown").on("click", function(e)
			{
				e.preventDefault();

				if($(this).hasClass("open"))
				{
					$(this).removeClass("open");
					$(this).children("ul").slideUp("fast");
			  	}
			  	else
			  	{
					$(this).addClass("open");
					$(this).children("ul").slideDown("fast");
			  	}
			});
		</script>
		<table>
		    <thead>
			    <tr>
				    <th>Name
				    <th>ID
				    <th>Date
				    <th>Opening
				    <th>Closing
				    <th>Type
				    <th>High
				    <th>Low
				    <th>Trade_Qty
				    <th>Prev_Close
				    <th>Upvotes
				    <th>Downvotes
		  	</thead>
		    <tbody>
				<tr>
					<td>X
				    <td>1
					<td>21/3/2017
					<td>5
					<td>10
					<td>Food
					<td>15
					<td>1
					<td>3
					<td>2
					<td>3
					<td>4
				<tr class = "disabled">
					<td>Y
				    <td>1
					<td>21/3/2017
					<td>5
					<td>10
					<td>Food
					<td>15
					<td>1
					<td>3
					<td>2
					<td>3
					<td>4
				<tr>
					<td>Z
				    <td>1
					<td>21/3/2017
					<td>5
					<td>10
					<td>Food
					<td>15
					<td>1
					<td>3
					<td>2
					<td>3
					<td>4
				<tr>
					<td>W
				    <td>1
					<td>21/3/2017
					<td>5
					<td>10
					<td>Food
					<td>15
					<td>1
					<td>3
					<td>2
					<td>3
					<td>4
		  	</tbody>
		</table>
	</body>
</html>
