<style>
span {
	height: 1em;
	background: green;
	margin: 0 .5em;
}
.missing span {
	background: red;
}
div {
	display: flex;
}
</style>
<?php 
$timse = file_get_contents('litclock_annotated.csv');
$i = 0;

while ($i < 60) {
	if ($i < 10) {
		$i = '0'.$i;
	}
	preg_match_all('/\#[0-9]{2}:'.$i.'\|/',$timse, $matches);
	//var_dump($matches);
	echo '<div>'.$i.'<span style="width: ' . count($matches[0]) . 'px;"></span>' . count($matches[0]).'</div>';
	$i++;
}

$missing = file_get_contents('missing.md');
$i = 0;
echo '<h2>Missing</h2>';
while ($i < 60) {
	if ($i < 10) {
		$i = '0'.$i;
	}
	preg_match_all('/\n'.$i.'/',$missing, $matches);
	//var_dump($matches);
	if(count($matches[0]) > 0) {
		echo '<div class="missing">'.$i.'<span style="width: ' . count($matches[0]) . 'px;"></span>' . count($matches[0]).'</div>';
	}
	$i++;
}
?>