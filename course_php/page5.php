<!DOCTYPE html>
<html lang="en">
<head>
<title> page5</title>
<meta charset="utf-8">
</head>
<style>
td,th{
	padding: 8px;
	border-left: 1px solid #dddddd;
	line-height: 20px;
}
table {
	border-spacing: 0;
	width: 100%;
	border: 1px solid #dddddd;
	border-collapse: separate;
	border-left: 0;
	border-radius: 4px;
}
td {
	border-top: 1px solid #dddddd;
}
tbody:last-child tr:last-child>td:first-child {
	border-bottom-left-radius: 4px;
}

tbody:last-child tr:last-child>td:last-child {
	border-bottom-right-radius: 4px;
}
nav ul {
	padding: 8px 15px;
	margin: 0 0 20px;
	list-style: none;
	border-radius: 4px;
}

nav li {
	display: inline-block;
	text-shadow: 0 1px 0 #ffffff;
}
input {
	margin-bottom: 10px;
}

input[type=range] {
	width: 225px;
}
label {
	display: block;
}
label > span {
	display: inline-block;
	width: 250px;
	line-height: 35px;
	vertical-align: top;
}

input {
	width: 250px;
	height: 20px;
	padding: 4px 6px;
	font-size: 14px;
	line-height: 20px;
	vertical-align: middle;
	border-radius: 4px;
}

fieldset {
	border-radius: 4px;
}
</style>
<body>
	<header>
		<h1>Contact manger</h1>
	</header>
		<nav>
			<ul>
				<li>
					<a href="" color="blue"> Welcome </a>
				</li>
				<li>/</li>
				<li>
					<a href=""> Contacts </a>
				</li>
				</ul>
			</nav>
		
		<article>
			<header>
			<h1>Add / Modify acontact </h1>
			</header>
			<details>
				<summary>
					Click to show the form.
				</summary>
				<form>
					<fieldset>
						<legend>New contact</legend>
						<label>
							<span> First name:</span>
							<input type="text" maxlength="32" required>
						</label>
						<label>
							<span>Last name:</span>
							<input type="text" maxlength="32" required>
						</label>
						<label>
							<span>Telphone: </span>
							<input type="tel" pattern="^(?:0|\(?\+33\)?\s?|0033\s?[1-79](?:[\.\-\]?\d\d){4}$" required>
						</label>
						<label>
							<span>Email:</span>
							<input type="email" maxlength="128">
		                </label>
		                <label>
		                	<span>Birthdate:</span>
		                	<input type="date">
		                </label>
		                <label>
		                	<span>Children</span>0
		                	<input type="range" min="0" max="5" required> 5
		                </label>
					</fieldset>
					<button id="modify-client" type="submit">OK</button>
				</form>
			</details>
		</article>
			<article>
			<header>
			<h1> Contact list</h1>
			</header>
			<table>
				<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>phone</th>
				<th>Email</th>
				<th>Birthdate</th>
				<th>children</th>
			</tr>
		</thead>
			<tbody>
					<tr>
						<td>Jean</td>
						<td>Marais</td>
						<td>0613243443</td>
						<td>jeanmarais@acteur.fr</td><td>17/08/1945</td>
						<td>2</td>
					</tr>
					<tr>
						<td>Johnny</td>
						<td>Halliday</td>
						<td>0656453434</td>
						<td>johnny.halliday@rocker.fr</td>
                        <td>17/08/1952</td>
						<td>3</td>
					</tr>
					<tr>
						<td>Eddy</td>
						<td>Mitchell</td>
						<td>0656453423</td>
						<td>eddy.mitchell@rocker.fr</td>
                        <td>17/08/1956</td>
						<td>2</td>
					</tr>
				</tbody>
				<button id="create contact"> new contact</button>
			</table>
		</article>
	
</body>
</html>