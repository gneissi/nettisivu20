
<!DOCTYPE html>
<html>
    <head></head>
    <body>
<?php
		function get_ip(){
			if(isset($_SERVER['HTTP_CLIENT_IP'])){
				//ip from share internet
				return $_SERVER['HTTP_CLIENT_IP'];
			}elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
				//ip pass from proxy
				return $_SERVER['HTTP_X_FORWARDED_FOR'];
			}else{
				return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
			}
			return $ip;
		}
		$ip = get_ip();
		echo $ip;
?> 
    </body>
</html>