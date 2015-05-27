<?php
if (!defined('AUTHED') || !AUTHED)
	die('No direct script access allowed'); 
?>
      <table class="msg2" align="center" border="0" cellpadding="6" cellspacing="1" width="100%">
        <tr>
          <td class="info">
            &#x2605; Malware - Demande de compléments d'informations
            <hr />
          </td>
        </tr>
        <tr>
          <td class="info" valign="top">
      <p>Chers internautes,</p><br />
      <p>Vous avez la possibilité d'attirer l'attention de nos spécialistes sur un fichier SI les détections sur <a href="http://www.virustotal.com/latest-report.html?resource=d41d8cd98f00b204e9800998ecf8427e">VirusTotal</a> sont inférieures à 20% ET que les rapports des outils automatisés <a href="http://www.threatexpert.com/submit.aspx">ThreatExpert</a> &amp; <a href="https://anubis.iseclab.org/">Anubis</a> ne sont pas satisfaisants.<br /><br />
        A ce stade, voulez-vous retourner sur <a href="index.php">l'index</a> ?<br />
  Nous vous informons que votre message sera lisible par toutes les communautés interconnectées à nos structures - merci d'épurer toutes données sensibles.</p><br />
      <p>Votre message:</p>
<center>
<form action="index.php?p=contact" method="post">
      <textarea name="data" cols=80 rows=20></textarea>
        <br>
        De quelle couleur est la tomate ? <input type="text" name="q"></input><input type="submit" name="cmd" value="Envoyer">
    </form>
 <?php
// Code php bidon, je ne cherche pas à avoir des commentaires sur ma manière de coder, et surtout ne prenez pas exemple sur cette source pour apprendre :)
$couleur = "rouge";
$from = "noreply@noreply.fr";
$email = "staff@MyDomain.fr";

if(isset($_POST['data']) && isset($_POST['q'])){
	if(!empty($_POST['q']) && !empty($_POST['data'])){
		 $tomate=$_POST['q'];
		 $message=$_POST['data'];
			if($tomate == 'rouge') {
				
				//send the email
				$subject="[WWW] Demande de renseignements";
				$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    
				$body = "Un internaute [$ip] demande une analyse\r\n".
				"Message:\r\n".
				"$message\r\n\r\n-------------\r\n".
				 
				$headers = "From: $from\r\n";
				$headers .= "Reply-To: $from\r\n";
    
				mail($email, $subject, $body, $headers);
				echo '<font color="green">&#9745; Demande transmise, merci de votre coopération</font>'; 
			}
			else
			echo '<font color="red">&#8594; Mauvaise couleur</font>'; 
		}
		else
		echo '<font color="red">&#9899; Veuillez remplire tous les champs</font>'; 
	}
?> 
  </center>
          </td>
        </tr>
      </table>