<?php
    
    $decodeDataJSON = json_decode( file_get_contents( 'dataset/users.json' ), true );
    echo '<table>';
    echo '<thead><tr><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Phone</th><th>Company</th><th>Actions</th></tr>';
    echo '<tbody>';
    
    foreach ( $decodeDataJSON as $usersDataJSON ) {
        
        $id = $usersDataJSON[ 'id' ];
        $name = $usersDataJSON[ 'name' ];
        $username = $usersDataJSON[ 'username' ];
        $email = $usersDataJSON[ 'email' ];
        $addressStreet = $usersDataJSON[ 'address' ][ 'street' ];
        $addressZipCode = $usersDataJSON[ 'address' ][ 'zipcode' ];
        $addressCity = $usersDataJSON[ 'address' ][ 'city' ];
        $phone = $usersDataJSON[ 'phone' ];
        $companyName = $usersDataJSON[ 'company' ][ 'name' ];
        
        echo '<tr><td>' . $name . '</td><td>' . $username . '</td><td><a href="mailto:' . $email . '">' . $email . '</a></td>
            <td>' . $addressStreet . ', ' . $addressZipCode . ' ' . $addressCity . '</td><td>' . $phone . '</td><td>' . $companyName .
            '</td><td><form action="" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <input type="submit" name="removeUser" value="REMOVE" >
            </form></td>';
    }
    
    echo '</tbody>';
    echo '</table>';
    
    
    if ( isset( $_POST[ 'removeUser' ] ) && isset( $_POST[ 'id' ] ) ) {
        removeUser();
        header( 'Location: ' . $_SERVER[ 'REQUEST_URI' ] );
        exit();
    }
    
    function removeUser()
    {
        global $decodeDataJSON;
        $idDoUsuniecia = $_POST[ 'id' ];
        
        foreach ( $decodeDataJSON as $klucz => $rekord ) {
            if ( $rekord[ 'id' ] == $idDoUsuniecia ) {
                unset( $decodeDataJSON[ $klucz ] );
                break;
            }
        }
        file_put_contents( 'dataset/users.json', json_encode( $decodeDataJSON ) );
    }
