<?php
	header('Content-type: text/html; charset=UTF-8');
	/*include 'conecion/conexion.php';
	$db=new Conect_MySql();*/

	
	function clientes($sql){
		if (!defined('NETSUITE_DEPLOYMENT_URL')) {
			define("NETSUITE_DEPLOYMENT_URL", 'https://5017898.restlets.api.netsuite.com/app/site/hosting/restlet.nl?script=1034&deploy=1');
		}
		if (!defined('NETSUITE_URL')) {
			define("NETSUITE_URL", 'https://5017898.restlets.api.netsuite.com');
		}
		if (!defined('NETSUITE_REST_URL')) {
			define("NETSUITE_REST_URL", 'https://5017898.restlets.api.netsuite.com/app/site/hosting/restlet.nl');
		}
		if (!defined('NETSUITE_SCRIPT_ID')) {
			define("NETSUITE_SCRIPT_ID", '1034');
		}
		if (!defined('NETSUITE_DEPLOY_ID')) {
			define("NETSUITE_DEPLOY_ID", '1');
		}
		if (!defined('NETSUITE_ACCOUNT')) {
			define("NETSUITE_ACCOUNT", '5017898');
		}
		if (!defined('NETSUITE_CONSUMER_KEY')) {
			define("NETSUITE_CONSUMER_KEY", '7a32d839d61838063cc87fbb2b04a6df1b511bd611b55bde2c5e7b443486b5fa');
		}
		if (!defined('NETSUITE_CONSUMER_SECRET')) {
			define("NETSUITE_CONSUMER_SECRET", '8b3538a523a67911f96b250129d6d293e6b03617433fe32204a68880bbcaa728');
		}
		if (!defined('NETSUITE_TOKEN_ID')) {
			define("NETSUITE_TOKEN_ID", '4c6e59c8ba85c62ec45fbd4bcd21d177ab4e520fffa545b5e29750237f06c329');
		}
		if (!defined('NETSUITE_TOKEN_SECRET')) {
			define("NETSUITE_TOKEN_SECRET", '1ee2bef0c14feaf55cbf29292ac8a0aa36c496d7d8951710d45a0d0150d658a7');
		}
		
		$encoded = json_encode($sql);
		$data_string = $encoded;
		$oauth_nonce = md5(mt_rand());
		$oauth_timestamp = time();
		$oauth_signature_method = 'HMAC-SHA256';
		$oauth_version = "1.0";
		
		$base_string =
			"POST&".urlencode(NETSUITE_REST_URL)."&".
				urlencode(
					"deploy=".NETSUITE_DEPLOY_ID
						."&oauth_consumer_key=".NETSUITE_CONSUMER_KEY
					."&oauth_nonce=".$oauth_nonce
					."&oauth_signature_method=".$oauth_signature_method
					."&oauth_timestamp=".$oauth_timestamp
					."&oauth_token=".NETSUITE_TOKEN_ID
					."&oauth_version=".$oauth_version
					."&script=".NETSUITE_SCRIPT_ID
				);
		
		$key = rawurlencode(NETSUITE_CONSUMER_SECRET).'&'.rawurlencode(NETSUITE_TOKEN_SECRET);
		$signature = base64_encode(hash_hmac("sha256", $base_string, $key, true));
		$auth_header = 'OAuth '
			.'realm="'.rawurlencode(NETSUITE_ACCOUNT).'",'
				.'oauth_consumer_key="'.rawurlencode(NETSUITE_CONSUMER_KEY).'",'
					.'oauth_token="'.rawurlencode(NETSUITE_TOKEN_ID).'",'
						.'oauth_signature_method="'.rawurlencode($oauth_signature_method).'",'
							.'oauth_timestamp="'.rawurlencode($oauth_timestamp).'",'
								.'oauth_nonce="'.rawurlencode($oauth_nonce).'",'
									.'oauth_version="'.rawurlencode($oauth_version).'",'
										.'oauth_signature="'.rawurlencode($signature).'"';
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => NETSUITE_DEPLOYMENT_URL,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => $data_string,
			CURLOPT_HTTPHEADER => array(
				'Authorization: '.$auth_header,
				'Content-Type: application/json'
			),
		));
	
		$response = curl_exec($curl);

		curl_close($curl);
		return $response;
	}
    $c=array();
	$obj = clientes([ "consulta" => "inventario"]);
	$obj=json_decode($obj);
	
    /*for ($i=0; $i < count($obj); $i++) { 
		$clientes1=$obj[$i];
		for ($ii=0; $ii < count($clientes1); $ii++) { 
			$array = array();
			
			if(isset($clientes1[$ii]->{'companyname'})){
				$array['id']=$clientes1[$ii]->{'id'};
				$id=$clientes1[$ii]->{'id'};
				$array['nombre']=$clientes1[$ii]->{'companyname'};
				$nombre=$clientes1[$ii]->{'companyname'};
				//$nombre = $db->caracters($nombre);
				$tipo=$clientes1[$ii]->{'custentity_frp_tipocliente_lp'};
				if(isset($clientes1[$ii]->{'custentity_frp_credito_cliente'})){
					$array['credito']=$clientes1[$ii]->{'custentity_frp_credito_cliente'};
					$credito=$clientes1[$ii]->{'custentity_frp_credito_cliente'};
				}
				else{
					$array['credito']="0";
					$credito=NULL;
				}
				if(isset($clientes1[$ii]->{'creditlimit'})){
					$array['creditLimits']=$clientes1[$ii]->{'creditlimit'};
					$creditLimits=$clientes1[$ii]->{'creditlimit'};
					//$diascred=$clientes1[$ii]->{'daysuntilexpiry'};
				}
				else{
					$array['creditLimits']="0";
					$creditLimits=0;
					$diascred=0;
				}
				$usocfdi1=$clientes1[$ii]->{'custentity_uso_cfdi'};
				$regimen=$clientes1[$ii]->{'custentity_imr_fe40_regimenfiscal'};
				$terms=$clientes1[$ii]->{'terms'};
				$email=$clientes1[$ii]->{'email'};
				$tel=$clientes1[$ii]->{'phone'};
				$rfc=$clientes1[$ii]->{'rfc'};
				$nombrefiscal=$clientes1[$ii]->{'custentity_razon_social'};
				/*$nombrefiscal = $db->caracters($nombrefiscal);
                $sql = "INSERT IGNORE INTO `clientes`(`id`, `nombre`, `credito`, `limitcred`,tipo,uso_cfdi,regimen_fiscal,terminos,correo,rfc,nombrefiscal,telefono)VALUES('$id','$nombre','$credito','$creditLimits','$tipo','$usocfdi1','$regimen','$terms','$email','$rfc','$nombrefiscal','$tel')";
                $query = $db->execute($sql);
				array_push($c,$array);
			}
			
		} 
		
	}*/
    print_r($obj);
?>