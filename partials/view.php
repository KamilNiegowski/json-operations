<?php
echo '<table><thead><tr><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Phone</th><th>Company</th><th>Actions</th></tr><tbody>';

foreach ($users as $userData) {
    $id = $userData['id'];
    $name = $userData['name'];
    $username = $userData['username'];
    $email = $userData['email'];
    $addressStreet = $userData['address']['street'];
    $addressZipCode = $userData['address']['zipcode'];
    $addressCity = $userData['address']['city'];
    $phone = $userData['phone'];
    $companyName = $userData['company']['name'];

    echo '<tr><td>' . $name . '</td><td>' . $username . '</td><td><a href="mailto:' . $email . '">' . $email . '</a></td>
            <td>' . $addressStreet . ', ' . $addressZipCode . ' ' . $addressCity . '</td><td>' . $phone . '</td><td>' . $companyName .
        '</td><td><form action="" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <input type="submit" name="removeUser" value="REMOVE" >
            </form></td>';
}

echo '</tbody></table>';

 //form add new person
 echo'<h3>Add new user</h3>
 <form method="POST" action="" class="addUser">
 <label for="id">ID:</label>
 <input type="text" id="id" name="id" value="" required><br><br>

 <label for="name">Name:</label>
 <input type="text" id="name" name="name" value="" required><br><br>

 <label for="username">Username:</label>
 <input type="text" id="username" name="username" value="" required><br><br>

 <label for="email">Email:</label>
 <input type="email" id="email" name="email" value="" required><br><br>

 <label for="addressStreet">Street:</label>
 <input type="text" id="addressStreet" name="addressStreet" value="" required><br><br>

 <label for="addressZipCode">ZIP Code:</label>
 <input type="text" id="addressZipCode" name="addressZipCode" value="" required><br><br>

 <label for="addressCity">City:</label>
 <input type="text" id="addressCity" name="addressCity" value="" required><br><br>

 <label for="phone">Phone:</label>
 <input type="text" id="phone" name="phone" value="" required><br><br>

 <label for="companyName">Company Name:</label>
 <input type="text" id="companyName" name="companyName" value="" required><br><br>

 <input type="submit" name="addNewUser" value="SUBMIT">
 </form>
';
