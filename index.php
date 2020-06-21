<?php
	include "api.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 Tracker</title>
	<meta name = "viewport" , content = "width = device-width , initial-scale = 1">
	<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>


	<link rel="stylesheet" type="text/css" href = "style.css">

</head>
<body>
	<nav class="nav">
		<h1>Covid-19 Tracker</h1>
		<div class="menu">
			<ul>

				<li>
					<button class = "scroll-button scroll-button1 " type="button" data-id = "indiaa" >India stats</button>

				</li>
				<li>
					<button class = "scroll-button" type="button" data-id = "country" >Country-Wise Stats</button>

				</li>
			</ul>
		</div>
	</nav>
	<div class="main world">
		<div class="image">
			<img src="assets/m1.png">
			<img src="assets/m2.png">
			<img src="assets/m3.png">
		</div>
		<div class="content">
			<h1 class = "world-heading">WorldWide Covid-19 Cases</h1>
			<div class="maincontent">
				<div class="cases-div">
					<h2  class ="cases-number" id = "conf"><?php echo $t['TotalConfirmed'] + $t['NewConfirmed']?></h2>
					<h2>Confirmed </h2>
				</div>
				<div class="cases-div">
					<h2  class = "cases-number" id = "active"><?php echo $t['TotalConfirmed'] - $t['TotalDeaths'] - $t['TotalRecovered'] ?></h2>
					<h2>Active </h2>
				</div>
				<div class="cases-div">
					<h2  class = "cases-number" id = "reco"><?php echo $t['TotalRecovered']  ?></h2>
					<h2>Recovered</h2>
				</div>
				<div class="cases-div">
					<h2  class = "cases-number" id = "dead" ><?php echo $t['TotalDeaths']  ?></h2>
					<h2>Deceased</h2>
				</div>
		</div>
	</div>
</div>
<div id = "fcountry" class="country-wise">

	<h2>Covid-19 Country-wise Stats</h2>
	<table>
		<tr>
			<th>S.no</th>
			<th>Country</th>
			<th>Confirmed</th>
			<th>Active</th>
			<th>Recovered</th>
			<th>Deceased</th>
		</tr>

		<?php
		$sno = 0;
			foreach ($countries as $i)
			{
				$sno++;
				$ne = (array) $i;
				$counconf = $ne["TotalConfirmed"] + $ne['NewConfirmed'] - $ne['TotalDeaths'];
				$counactive = $ne['TotalConfirmed'] - $ne['TotalDeaths'] - $ne['TotalRecovered'];

				echo'
				<tr>
					<td>'.$sno.'</td>
					<td>'.$ne["Country"].'</td>
					<td>'.$counconf.'</td>
					<td>'.$counactive.'</td>
					<td>'.$ne["TotalRecovered"].'</td>
					<td>'.$ne["TotalDeaths"].'</td>
				</tr>
				';


			}
		 ?>

	</table>

</div>
<button type="button" class = "toggle country-toggle" name="button">View All</button>
<div id = "findiaa" class="india">
		<h2 class="india-heading">Covid-19 India Cases</h2>
		<div class="india-contents">
			<div class="icases-div">
				<h2   id = "conf" class = "india-cases"><?php echo $india_confirmed; ?></h2>
				<h2>Confirmed </h2>
			</div>
			<div class="icases-div">
				<h2   id = "active" class = "india-cases"><?php echo $india_active; ?></h2>
				<h2>Active </h2>
			</div>
			<div class="icases-div">
				<h2   id = "reco" class = "india-cases"><?php echo $india_recovered; ?></h2>
				<h2>Recovered</h2>
			</div>
			<div class="icases-div">
				<h2  id = "dead"  class = "india-cases"><?php echo $india_death; ?></h2>
				<h2>Deceased</h2>
			</div>
		</div>
	</div>
<div class="country-wise">
		<h2>Covid-19 India State-wise Stats</h2>
		<table>
			<tr>
				<th>S.no</th>
				<th>State/UT</th>
				<th>Confirmed</th>
				<th>Active</th>
				<th>Recovered</th>
				<th>Deceased</th>
			</tr>

			<?php
			$ssno = -1;
				foreach ($t2 as $i)
				{
					$ssno++;
					if($ssno !=0)
					{
						$in = (array) $i;
						echo'
						<tr>
							<td>'.$ssno.'</td>
							<td>'.$in["state"].'</td>
							<td>'.$in["confirmed"].'</td>
							<td>'.$in["active"].'</td>
							<td>'.$in["recovered"].'</td>
							<td>'.$in["deaths"].'</td>

						</tr>
						';

					}


				}
			 ?>

		</table>

</div>
<button type="button" class = "toggle india-toggle" name="button">View All</button>


	<script src= "main.js"></script>
	<footer>
		<h4>Copyright</h4>
	</footer>
</body>


</html>
