<?php

	$results = array();
	$results['success'] = true;

	if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['sujet'])){
		if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['sujet'])){

			$destinataire = "bruguerollesimon@gmail.com";
			$sujet = $_POST['sujet'];
			$message = $_POST['message']."\nFrom: ".$_POST['nom']."\nReply-To: ".$_POST['email'];
			$bool = mail($destinataire, $sujet, $message);
			if(!$bool){
				$results['success'] = false;
			}

		}
		else {
			$results['success'] = false;
		}
	}
	else {
		$results['success'] = false;
		}

		echo(json_encode($results));
?>
