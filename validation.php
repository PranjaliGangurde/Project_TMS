<html>
<head>
<script type="text/javascript" src="js/val.js"></script>
</head>
<body>
<table id="tab">
			<tr><td>
		<form name="form1" method="post" onsubmit="return validate();">
		
		&nbsp;First Name:</td><td><input type="text" name="fname" onkeypress="return onlyAlphabets(event,this);"></td></tr><br>	
        <tr><td>		
		&nbsp;Last Name:</td><td><input type="text" name="lname" onkeypress="return onlyAlphabets(event,this);"></td></tr><br>
		<tr><td>
		&nbsp;Email Id:</td><td><input type="text" name="email"></td></tr><br>
		<tr><td>
		&nbsp;Contact No:</td><td><input type="text" name="cntno" id="no"onkeypress="return onlyNos(event,this);"></td></tr><br>
		<tr><td>
		&nbsp;Comment :</td><td><textarea rows="1" cols="30" name="cmt"></textarea></td></tr><br>
		<tr><td>
				<br><br><br>
				</td><td><input type="submit" value="Confirm" name="Confirm">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Cancel"  onClick="location=('index.php')"><br></tr></td><br>
		
		</form>
		</table>
</body>
</html>