<h1>Add User</h1>
<form action="/tambah/post" method="POST">
{{csrf_field()}}
	<div>
		<label>
			Username
		</label>
			<div>
				<input type="text" name="username">
			</div>
		<br>
		<label>
			Password
		</label>
			<div>
				<input type="text" name="password">
			</div>
		<br>
		<div>
			<button type="submit">Submit</button>
		</div>
	</div>
</form>
