<?php
    
    $dataJSON=file_get_contents("dataset/users.json",true);
    $decodeDataJSON=json_decode($dataJSON,true);
    
    echo '<table>';
    echo '<thead><tr><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Phone</th><th>Company</th></tr>';
    echo '<tbody>';
    
    foreach ($decodeDataJSON as $usersDataJSON){
        
        $name=$usersDataJSON['name'];
        $username=$usersDataJSON['username'];
        $email=$usersDataJSON['email'];
        $addressStreet=$usersDataJSON['address']['street'];
        $addressZipCode=$usersDataJSON['address']['zipcode'];
        $addressCity=$usersDataJSON['address']['city'];
        $phone=$usersDataJSON['phone'];
        $companyName=$usersDataJSON['company']['name'];
        
        echo '<tr><td>'.$name.'</td><td>'.$username.'</td><td><a href="mailto:'.$email.'">'.$email.'</a></td><td>'.$addressStreet.', '.$addressZipCode.' '.$addressCity.'</td><td>'.$phone.'</td><td>'.$companyName.'</td><td>';
        
    }
    
    echo'</tbody>';
    echo '</table>';

