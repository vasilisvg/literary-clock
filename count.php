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
	//background: hsla(0,0%,60%,.3);
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
[data-howmany] {
	background: hsla(90,100%,60%,1) !important;
}
[data-howmany="00"] {
	background: hsla(90,0%,60%,.0) !important;
}
[data-howmany="01"] {
	background: hsla(90,10%,60%,.1) !important;
}
[data-howmany="02"] {
	background: hsla(90,20%,60%,.2) !important;
}
[data-howmany="03"] {
	background: hsla(90,30%,60%,.3) !important;
}
[data-howmany="04"] {
	background: hsla(90,40%,60%,.4) !important;
}
[data-howmany="05"] {
	background: hsla(90,50%,60%,.5) !important;
}
[data-howmany="06"] {
	background: hsla(90,60%,60%,.6) !important;
}
[data-howmany="07"] {
	background: hsla(90,70%,60%,.7) !important;
}
[data-howmany="08"] {
	background: hsla(90,80%,60%,.8) !important;
}
[data-howmany="09"] {
	background: hsla(90,90%,60%,.9) !important;
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
$filled = [];
$total = [];

preg_match_all('/\#[0-9]{2}:01\|/',$timse, $matches);
echo count($matches[0]);

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
		if($i == '00') {
			$total[$j] = 0;
		}
		if($i == "00") {
			$filled[$j] = 0;
		}
		preg_match_all('/\#'.$i.':'.$j.'\|/',$timse, $matches);
		//echo $matches[0];
		$howMany = floor(count($matches[0])/2);
		if($howMany < 10) {
			$howMany = "0" . $howMany;
		}
		if(count($matches[0]) == 0){
			echo '<li class="empty"><span>'.$i.'</span><span>:</span><span>'.$j.'</span></li>'."\n";
		}
		else {
			echo '<li data-howmany="'.$howMany.'"><span>'.$i.'</span><span>:</span><span>'.$j.'</span></li>'."\n";
			$filled[$j]++;
			$total[$j] += count($matches[0]);
			$k++;
		}
		$j++;
	}
	echo '</ul>';
	$i++;
}
echo '<p>Total unique timestamps: '. $k . '</p>'."\n";
$m = 0;
$em = 0;
echo '<ol>';
while($m < 60) {
	if ($m < 10) {
		$m = '0'.$m;
	}
	$s = $o = $filled[$m] * 4;
	$s = $o = $total[$m]/$total['00']*100;
	$sat = round($o*2);
	if($sat < 10) {
		$sat = "0".$sat;
	}
	if($o > 99) {
		$sat = 100;
	}
	echo '<li value="'.$m . '" style="width:'.($s*2).'vw;background: hsla(90,'.$sat.'%,80%,1)">' . $total[$m] . '</li>';
	
	if($filled[$m] == 24) {
			$em++;
	}
	$m++;
}
echo '</ol>'."\n";
//echo '<p>Minutes in every hour: '. $em . '</p>'."\n";

$listQuotes = file_get_contents('README.md');
$listQuotes = explode('## Books I added',$listQuotes);
$listQuotes = explode('## Licence',$listQuotes[1]);
$listQuotes = explode('- ',$listQuotes[0]);
$i = 0;
$byVasilis = 0;

while($i < (count($listQuotes)-1)) {
	//echo $listQuotes[$i];
	$i++;
	preg_match_all('/'.trim(str_replace('|','\|',$listQuotes[$i])).'/',$timse, $matches);
	$byVasilis += count($matches[0]);
}
$totalTimes = (count(file('litclock_annotated.csv'))-3);
$prct = round($byVasilis/$totalTimes*100,2);
//echo($totalTimes);
echo "$byVasilis of $totalTimes quotes were added by Vasilis (which is about $prct%)";


?>