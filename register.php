	
	<?php include_once("header.php"); ?>

		<p><strong>Welcome, please register</strong></p>
		<p>All Fields are required</p>

		<form method="POST" action="processregister.php">
			
			<p>
				<label>First Name</label><br />
				<input type="text" name="first_name" placeholder="First Name" required />
			</p>
			<p>
				<label>Last Name</label><br />
				<input type="text" name="last_name" placeholder="Last Name" required />
			</p>
			<p>
				<label>Email</label><br />
				<input type="text" name="email" placeholder="Email" required />
			</p>
			<p>
				<label>Password</label><br />
				<input type="text" name="password" placeholder="Password" required />
			</p>

			<p>
				<label>Gender</label><br />
				<select name="gender" required />
					<option value="">Select One</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</p>
			<hr />

			<p>
				<label>Designation</label><br />
				<select name="designation" required />
					<option value="">Select One</option>
					<option>Medical Team (MT)</option>
					<option>Patients</option>
				</select>
			</p>


			<p>
				<label>Department</label><br />
				<input type="" name="department" placeholder="Department" required />
			</p>

			<p>
				<button type="submit">Register</button>
			</p>
		</form>

	<?php include_once("footer.php"); ?>