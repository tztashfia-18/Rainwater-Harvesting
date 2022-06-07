

<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

if($result->status=='success'){
	
	if(isset($result->lat) && isset($result->lon)){
		
	}

	
}

    
    

    $ip_val = curl_init('http://ipwhois.app/json/'.$result->query);
    curl_setopt($ip_val, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ip_val);
    curl_close($ip_val);

    
    $ip_result = json_decode($json, true);
    echo "<pre>";
    
?>
     
<!DOCTYPE html> 
<html>     
    <head>         
        <title>Creative btn</title>     
    </head>     
    <body>         
        <table>
            <tr>
                <th>IP Address  </th>
                <th>Country</th>
                <th>City</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>
            <tr>
                <td><?php echo $ip_result['ip'] ?></td>
                <td><?php echo $ip_result['country'] ?></td>
                <td><?php echo $ip_result['city'] ?></td>
                <td><?php echo $ip_result['latitude'] ?></td>
                <td><?php echo $ip_result['longitude'] ?></td>
            </tr>
        </table>
    </body> 
<html>  
                 