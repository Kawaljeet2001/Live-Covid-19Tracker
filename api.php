<?php

	

	$data = json_decode($corona);
	// echo '<pre>';
	// print_r($data);

	$cl = new stdClass();
	$cl->name = "LULU";
	$n = (array) $data;
	$t = (array) $n['Global'];
	$countries = (array) $n['Countries'];
	// print_r($countries);
	// print_r($n);

	$india = file_get_contents("https://api.covid19india.org/data.json");
	$data2 = json_decode($india);
	$icl = new stdclass();
	$n2 = (array) $data2;
	$t2 = (array) $n2['statewise'];
	// print_r($t2);

	$all = (array) $t2[0];

	$india_confirmed = $all['confirmed'];
	$india_active = $all['active'];
	$india_death = $all['deaths'];
	$india_recovered = $all['recovered'];





?>
