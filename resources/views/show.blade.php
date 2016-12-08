<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>show section</title>
	<link rel="stylesheet" type="text/css" href="/css/show.css">
	<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

	<div id="body" class="container">
		<h1><span>section registrations</span></h1>
		<table>
<tr>
<th>Student Name</th>
<th>ID</th>
<th>email</th>
<th>section_ID</th>

</tr>
		 @foreach ($students as $student)
		<div>
			<tr>
			<td>{{$student->sname}}</td>
			<td>{{$student->sid}}</td>
				<td>{{$student->email}}</td>
				<td>{{$student->section_ID}}</td>
			</tr>

		</div>
		 @endforeach
		 </table>
	</div>
	<div id="footer">

	</div>


</body></html>
