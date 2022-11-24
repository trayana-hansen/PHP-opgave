<script src="./assets/js/script.js"></script>

<?php
echo
"

    <h1>User control</h1>
    <p>Please fill in this form to add your user credentials.</p>
    <hr>
	<form action='./api/user/' method='post'>
	<label for='username'><b>Username</b></label>
    <input type='text' placeholder='Enter username' name='username' required>
    <label for='firstname'><b>First name</b></label>
    <input type='text' placeholder='Enter first name' name='firstname' required>
	<label for='lastname'><b>Last name</b></label>
    <input type='text' placeholder='Enter last name' name='lastname' required>

    <label for='password'><b>Password</b></label>
    <input type='password' placeholder='Enter Password' name='password' required>

    <label for='email'><b>Email</b></label>
    <input type='email' placeholder='Enter your email' name='email' required>
    <label for='address'><b>Address</b></label>
    <input type='text' placeholder='Enter your address' name='address' required>
    <label for='zipcode'><b>Zipcode</b></label>
    <input type='number' placeholder='Enter your zipcode' name='zipcode' required>

	<button type='submit' name='submit'>Submit</button>

</form>";
