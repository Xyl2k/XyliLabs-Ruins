<?php
if (!defined('AUTHED') || !AUTHED)
	die('No direct script access allowed');

	define('HTACCESS_PATH', './.htaccess');

	require_once('ressources/geoip.inc');

	$geoip   = geoip_open('ressources/GeoIP.dat', GEOIP_STANDARD);
	$ips     = array();
	$handle  = @fopen(HTACCESS_PATH, 'r');
	$regions = array();
	
	function array_sort_by_column(&$arr, $col) {
		$sort_col = array();
		
		foreach ($arr as $key=> $row) {
			$sort_col[$key] = $row[$col];
		}

		array_multisort($sort_col, SORT_ASC, $arr);
	}
	
	if ($handle) {
		while (($line = fgets($handle)) !== false) {
			$line = trim($line);

			if (strpos($line, 'Deny from ') === 0) {
				if (strstr($line, '#') !== false) {
					$line = explode(' #', $line);
					$line = $line[0];
				}
				
				$line = substr($line, 10);
				
				if (filter_var($line, FILTER_VALIDATE_IP, array('flags' => FILTER_FLAG_IPV4))) {
					$country = strtolower(geoip_country_code_by_addr($geoip, $line));
					
					if (($country == '') || ($country == 'a1')) {
						$country = '?';
					}
					else {
						if (isset($regions[$country])) {
							$regions[$country]++;
						}
						else {
							$regions[$country] = 1;
						}
					}
					
					array_push($ips, array(
						'ip'      => $line,
						'country' => $country
					));
				}
			}
		}
		
		array_sort_by_column($ips, 'country');
		
		fclose($handle);
	}
?>
		<script type='text/javascript' src='https://www.google.com/jsapi'></script>
		<script type='text/javascript'>
			google.load('visualization', '1', {'packages': ['geochart']});
			google.setOnLoadCallback(drawRegionsMap);

			function drawRegionsMap() {
				var data = google.visualization.arrayToDataTable([
					['Country', 'Attacks'],
<?php
	foreach ($regions as $region => $value) {
		echo("['" . strtoupper($region) . "', " . $value . "],");
	}
?>
				]);

				var options = {
					backgroundColor: 'none',
					legend:          'none'
				};

				var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
				chart.draw(data, options);
			};
		</script>
			   		<div class="dead pulse1">Greetings to elites fuckings to lamers!</div><br />
				
				<div id="chart_div" style="width: 760px; height: 500px; margin:0 auto;"></div>
				<center>
				<table class='note' width='722'>
					<thead>
						<tr>
							<td width="65px">FLAG</td>
							<td>IP</td>
							<td width="30px">VT</td>
						</tr>
					</thead>
					<tbody>
<?php
	foreach ($ips as $ip) {
		$flag = '?';
		
		if ($ip['country'] != '?') {
			$flag = '<img src="ressources/flags/' . strtolower($ip['country']) . '.png" title="' . strtoupper($ip['country']) .'"/>';
		}
?>
						<tr>
							<td style="text-align: center;"><?php echo($flag) ?></td>
							<td><a href="http://www.spamhaus.org/query/ip/<?php echo($ip['ip']); ?>" title="<?php echo($ip['ip']); ?>" target="_blank"><?php echo($ip['ip']); ?></a> - [<a href="http://whois.domaintools.com/<?php echo($ip['ip']); ?>" title="<?php echo($ip['ip']); ?>" target="_blank">whois</a>] [<a href="http://www.geoiptool.com/fr/?IP=<?php echo($ip['ip']); ?>" title="<?php echo($ip['ip']); ?>" target="_blank">geo</a>] [<a href="http://www.robtex.com/dns/<?php echo($ip['ip']); ?>.html" title="<?php echo($ip['ip']); ?>" target="_blank">ip</a>] [<a href="http://robtex.com/rbl/x?q=<?php echo($ip['ip']); ?>" title="<?php echo($ip['ip']); ?>" target="_blank">rbl</a>] [<a href="http://robtex.com/cnet/x?q=<?php echo($ip['ip']); ?>" title="<?php echo($ip['ip']); ?>" target="_blank">cnet</a>] [<a href="http://www.bfk.de/bfk_dnslogger.html?query=<?php echo($ip['ip']); ?>#result" title="<?php echo($ip['ip']); ?>" target="_blank">pipr</a>] [<a href="http://web.archive.org/web/*/<?php echo($ip['ip']); ?>" title="<?php echo($ip['ip']); ?>" target="_blank">back</a>]
</td>
							<td style="text-align: center;">
								<a href="https://www.virustotal.com/en-gb/ip-address/<?php echo($ip['ip']) ?>/information/" target="_blank">
									<img src='ressources/vt.png' alt='IP address information from VirusTotal' width='13' height='12' border='0' longdesc='IP address information from VirusTotal' />
								</a>
							</td>
						</tr>
<?php
	}
?>
					</tbody>
				</table>
				</center>
				<br />