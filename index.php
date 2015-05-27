<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
define('AUTHED', true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--    
                ⟡ ◦ ◌° 
              ◦° ◌ ◯ ◦ ⟡
    
    Stop looking at my code and write some! ^_^
	Also, fuck bootstrap.
    https://twitter.com/Xylit0l
-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="ressources/public.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="shortcut icon" href="ressources/favicon.png" />
  <link rel="icon" href="ressources/favicon.ico" type="image/x-icon">
  <script src="ressources/konami.js"></script>
  <title>XYLiBOX WHQ</title>
</head>
  <body>
<script>
var easter_egg = new Konami(function() { 
    alert('Konami code!'); // ↑ ↑ ↓ ↓ ← → ← → b a
});
</script>
    <div align="center">
      <div class="corps" style="width: 90%; text-align: left;">
        <div class="msg">
          <br />
          <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
              <td valign="top" width="180">
                <table class="msg2" border="0" cellpadding="6" cellspacing="1" width="100%">
                  <tr>
                    <td class="info" width="100%">
                      &#8594; Réseau
                    </td>
                  </tr>
                  <tr>
                    <td class="info" align="left">
                      &#187; 
                      <a href="#">
                        N/A
                      </a>
                    </td>
                  </tr>
                </table>
                <br />
                <table class="msg2" border="0" cellpadding="6" cellspacing="1" width="100%">
                  <tr>
                    <td class="info" colspan="2">
                      &#8594; Rubriques
                    </td>
                  </tr>
                  <tr>
                    <td class="info">
                      &#187; 
                      <a href="index.php">
                        Accueil
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="info">
                      &#187; 
                      <a href="index.php?p=analysis">
                        Analyses
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="info">
                      &#187; 
                      <a href="index.php?p=contact">
                        Contact
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="info">
                      &#187; 
                      <a href="index.php?p=attacks">
                        Attacks
                      </a>
                    </td>
                  </tr>
                 <tr>
                    <td class="info">
                      &#187; 
                      <a href="index.php?p=ascii">
                        ASCII
                      </a>
                    </td>
                  </tr>
                </table>
                <br />
                <table class="msg2" border="0" cellpadding="6" cellspacing="1" width="100%">
                  <tr>
                    <td class="info" align="left">
                      <object type="application/x-shockwave-flash" style="outline:none;" data="ressources/fish.swf?up_fishColor10=F45540&up_backgroundImage=http://&up_foodColor=FCB347&up_fishColor5=F45540&up_backgroundColor=000000&up_fishColor6=F45540&up_fishColor7=F45540&up_fishColor4=F45540&up_fishColor8=F45540&up_fishColor1=F45540&up_fishName=Fish&up_fishColor3=F45540&up_fishColor2=F45540&up_fishColor9=F45540&up_numFish=5&" width="160" height="350"><param name="movie" value="ressources/fish.swf?up_fishColor10=F45540&up_backgroundImage=http://&up_foodColor=FCB347&up_fishColor5=F45540&up_backgroundColor=000000&up_fishColor6=F45540&up_fishColor7=F45540&up_fishColor4=F45540&up_fishColor8=F45540&up_fishColor1=F45540&up_fishName=Fish&up_fishColor3=F45540&up_fishColor2=F45540&up_fishColor9=F45540&up_numFish=5&"></param><param name="AllowScriptAccess" value="always"></param><param name="wmode" value="opaque"></param><param name="scale" value="noscale"/><param name="salign" value="tl"/></object>
          </td>
        </tr>
      </table>
                <br />
                <table class="msg2" border="0" cellpadding="6" cellspacing="1" width="100%">
                  <tr>
                    <td class="info" colspan="2">
                      &#8594; Amis
                    </td>
                  </tr>
                  <tr>
                    <td class="info" align="left">
                      <br />
                      <br />
                      <?php include('inc/ads.php');  // pub ?>
                      <br />
                      <br />
                      <center><a href="http://creativecommons.org/licenses/by-nc/4.0/"><img src="ressources/CC-BY-NC.png" alt="CC-BY-NC" width="80" height="15" border="0" /></a></center>
                      <br />
                      <center>Xylibox <?php echo date("Y"); ?></center>
                    </td>
                  </tr>
                </table>
    </td>
    
    <td style="padding: 0px 10px;" align="left" valign="top">
      <table class="info" align="center" border="0" cellpadding="6" cellspacing="1" >
        <tr>
          <td class="bannz">
          </td>
        </tr>
      </table>
      <br />
<?php
  	function CleanVar($var)
	{
	    $var = trim($var);
	    $RemoveChars  = array( "([\40])" , "([^a-zA-Z0-9-])", "(-{2,})" );
	    $ReplaceWith = array("-", "", "-");
	    return preg_replace($RemoveChars, $ReplaceWith, $var);
	}
			if(!empty($_GET['p']))
			{
				$file = CleanVar($_GET['p']);
				if( file_exists ( 'inc/' . $file . '.php' ) )
					require_once( 'inc/' . $file . '.php' );	
				else
					include_once( 'inc/news.php' );
			}
			else
				require_once('inc/news.php');	
?>
    </td>
  </tr>
</table>
<br />
<table class="msg2" align="center" border="0" cellpadding="6" cellspacing="1" width="100%">
  <tr>
    <td class="info">
      <?php include('inc/quotes.php'); ?> -
<?php
	$time = microtime();
	$time = explode(' ', $time);
	$time = $time[1] + $time[0];
	$finish = $time;
	$total_time = round(($finish - $start), 4);
	echo 'Page generated in '.$total_time.' seconds.';
?>
      <img src="ressources/firefox-optimized.png" width="80" height="15" align="right" alt="firefox" />
    </td>
  </tr>
</table>
</div>
</div>
</div>
</body>
</html>