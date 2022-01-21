
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/fullcalendar.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/select2.min.css"/>
<link rel="stylesheet" type="text/css" href="/Projet(system_management)/assets/css/tagsinput.css"/>
<body>
<center>
	<h1>STUDENT LOGIN</h1></br></br>

<div id="general">
	<table align="center">
		<tr>
	<form action="profil_student.php?" method="POST" >
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="student_email" name="student_email" class="form-control"/>
		</div>
		<div class="form-group">
			<label for="password"></br>password</label>
			<input type="password" id="student_password" name="student_password" class="form-control"/>
		</div></br>
		
        <div class="m-t-20 text-center">
			<button class="btn btn-primary submit-btn" name="login">login</button>
        </div></br>
	</form>
	<form method="post" action="index.php?">
		<input type="submit" name="entrer" value="BACK" />
	</form>
		</tr>
	</table>
</table>
</div>
</center>
</body>
</html>
