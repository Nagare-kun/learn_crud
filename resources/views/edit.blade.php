<h1>Ubah User</h1>
<form action="/ubah/{{$user['id']}}/update" method="POST">
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
			<input type="hidden" name="_method" value="PUT"/>
			<button type="submit">Submit</button>
		</div>
	</div>
</form>