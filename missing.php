<style>
body {
	counter-reset: hours;
	font-family: monospace;
}
ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: flex;
	grid-template-columns: repeat(61, 1fr);
}
ul + ul {
	counter-increment: hours;
}
ul::before {
	content: counter(hours);
	padding: 0 0 0 .5em;
	font-weight: bold;
}
ul:nth-last-of-type(1n + 15)::before {
	content: "0" counter(hours);
}
ul:nth-of-type(2n) {
	background: hsla(0,0%,60%,.3);
}
li {
	padding: .125em 0;
	margin: 0 .5em;
}

li.empty {
	opacity: .1;
	max-width: 5em;
	transition: .1s;
}
[id="showhide"] {
	position: absolute;
	left: -9999em;
}
label {
	display: block;
}
[id="showhide"]:checked + nav label:last-of-type {
	display: block;
}
[id="showhide"]:checked + nav label:first-of-type,
[id="showhide"] + nav label:last-of-type {
	display: none;
}
[id="showhide"]:checked ~ ul .empty {
	max-width: 0;
	padding: 0;
	margin: 0;
	overflow: hidden;
}
[id="showhide"]:not(:checked) ~ ul li:nth-of-type(2n + 1) {
	background: hsla(0,0%,60%,.3);
}
[id="showhide"]:not(:checked) ~ ul li:not(.empty) {
	background: hsla(0,100%,60%,.3);
}
ol {
	margin: 0 0 0 2em;
	padding: 0;
}
ol li {
	margin: 0;
}
</style>
<input type="checkbox" name="" id="showhide">
<nav>
<label for="showhide">Hide empty cells</label>
<label for="showhide">Show empty cells</label>
</nav>
<?php 
$timse = file_get_contents('litclock_annotated.csv');
$i = 0;
$k = 0;
$empty = [];

while ($i < 24) {
	if ($i < 10) {
		$i = '0'.$i;
	}
	echo '<ul>';
	$j = 0;
	while ($j < 60) {
		if ($j < 10) {
			$j = '0'.$j;
		}
		if($i == "00") {
			$empty[$j] = 0;
		}
		$nnum = substr_count($timse,'#'.$i.':'.$j.'|');
		
		if($nnum == 0){
			echo '<li><span>'.$i.'</span><span>:</span><span>'.$j.'</span></li>';
			$empty[$j]++;
			$k++;
		}
		else {
			echo '<li class="empty"><span>--</span><span>:</span><span>'.$j.'</span></li>';
		}
		$j++;
	}
	echo '</ul>';
	$i++;
}
$prct = (100/1440)*$k;
$prctTotal = (100 - $prct);
echo '<p>Total timestamps missing: '. $k . ' (So we’re ' . round($prctTotal,2) . '% complete)</p>';

$m = 0;
$em = 0;
echo '<ol>';
while($m < 60) {
	if ($m < 10) {
		$m = '0'.$m;
	}
	$s = $o = $empty[$m] * 4;
	if($o < 10) {
		$o = "0.".$o;
	}
	if($empty[$m] > 0) {
		echo '<li value="'.$m . '" style="width:'.$s.'vw;background: hsla(0,'.$s.'%,80%,.'.round($o * 1.4).')">' . $empty[$m] . '</li>';
		$em++;
	}
	$m++;
}
echo '</ol>';

$prct = (100/60) * $em;
$prctTotal = (100 - $prct);

echo '<p>Total incomplete minutes: '. $em . '. (So we’re ' . round($prctTotal,2) . '% complete)</p>';



?>