<html>
<head>
	<title>Index</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/val.js"></script>
</head>
<body id="b1">
	<div id="Container">
		<center>
		 	<div id="Banner">
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div id="Navigation">
			<ul style="align:center">
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Index.php">HOME</a></li>
				<li><a href="About.php">ABOUT TEMPLE</a></li>
				<li><a href="Photo.php">PHOTO GALLERY</a></li>
				<li><a href="#">REGISTRATION</a>
				    <ul>
				      <li><a href="member.php">LIFE MEMBERSHIP</a></li>
				      <li><a href="viplogin.php">VIP PASS BOOKING</a></li>
				    </ul>
				</li>
				<li><a href="book.php">BOOKS COLLECTION</a>
				<li><a href="#">DONATION</a>
					<ul>
						<li><a href="fundlogin.php">FUND DONATION</a></li>
				      <li><a href="bhojan.php">PRASAD & BHOJAN DONATION</a></li>
					</ul>
				</li>
				
				<li><a href="Booking.php">BOOKING CONTACT</a></li>
				<li><a href="Location.php">LOCATION</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
			</ul>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</center>
		
	<center>
	 <div id="Middle">
		
		<div id="Leftcol">
			<div style="font-family:Lucida Handwriting;font-size:13px">Opinion</div>
			<div id="Image1"><img src="Images/donation.png"  style="border-radius:20px;"></img></div>
			<div style="font-family:Lucida Handwriting;font-size:13px">Sai Raj</div>
			<div id="Image2"><img src="Images/new.gif"></img>
			<Marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" scrollamount="4" style="margin:0 15px 0 15px;">
			News And Events<a href="#"> click Here..<hr><img src="Images/scrl.jpg" style="border-radius:20px;"></img>
			<hr><img src="Images/scrl2.jpg" style="border-radius:20px;"></img><hr><img src="Images/scrl0.jpg" style="border-radius:20px;"></img></a></marquee><hr>Keep in Touch:All New Events And Updated Information..</div>
		</div>

		<div id="Content">		
			<h1>Fund Donation</h1><hr>
			<h3>*Donation Is Accepted Only In Indain Rupees.</h3>
			<table id="tab">
			<tr><td>
		<form name="frm" method="post">
		
		&nbsp;Fund Category:</td><td><select name="category">
			 <option value="">Select Here</option>
			 <option value="Any">--Any--</option>
			 <option value="Donation For Charitable Devlopment Purpose">Donation For Charitable Devlopment Purpose</option>
			 <option value="Donation For Relious Purpose">Donation For Relious Purpose</option></select></td></tr><br>
			 <tr><td>
		Fund Type:</td><td><select name="type">
		<option value="0">Select Here</option>
			 <option value="">Any</option>
			 <option value="Sai Satyavrat">Sai Satyavrat</option>
			 <option value="Dhoop Deep Fund">Dhoop Deep Fund</option>
			 <option value="Festival Fund">Festival Fund</option>
			 <option value="Naivedya Fund">Naivedya Fund</option>
			 <option value="Abhishek Fund">Abhishek Fund</option></select></td></tr><br>
			 <tr><td>
		&nbsp; Amount:</td><td><input type="text" name="amt" value="--"  required onkeypress="return onlyNos(event,this);"></td></tr><br>
		<tr><td>
		&nbsp; Remark Here:</td><td><input type="text" name="remark" value="--"></td></tr><br>
		<tr><td>
				<br><br><br>
				</td><td><input type="submit" value="Confirm" name="Submit" onClick="confirm('Are You Sure You Want To Confirm....??')">
				
				
				
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Reset" value="Cancel" onClick="location=('index.php')"><br></tr></td><br>
		
			   
			
				
		</form>
		</table>
		</div>

		<div id="Rightcol">
			<div style="font-family:Lucida Handwriting;font-size:13px">Feedback</div>
			<div id="Image3"><img src="Images/donation.jpg"  style="border-radius:20px;"></img></div>
						<div style="font-family:Lucida Handwriting;font-size:13px">Programmes</div>
			<div id="Image4"><div style="font-family:Lucida Handwriting;font-size:13px">Daily Programmes</div>
			<Marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" scrollamount="3" style="margin:0 15px 			0 15px;">	<p align="center"></p><a href="#"><hr>
				<table name="table1" border="1" border="1" width="100%" height="100%">
					<tr>
					  <th>Time</th>
					  <th>Programme</th>
					</tr>
					<tr>
						<td>4:00 AM</td><td>Temple Open</td>
					</tr>
					<tr>
						<td>4:15 AM</td><td>Bhupali</td>
					</tr>
					<tr>
						<td>4:30-5:00 AM</td><td>Kakad Arti</td>
					</tr>
					<tr>
						<td>5:00 AM</td><td>Bhajan</td>
					</tr>
					<tr>
						<td>5:05 AM</td><td>Mangal Snan</td>
					</tr>
					<tr>
						<td>5:35 AM</td><td>Arti("Shirdi Pandharpur")</td>
					</tr>
					<tr>
						<td>5:40 AM</td><td>Darshan Begins</td>
					</tr>
					<tr>
						<td>11:30 AM</td><td>Dhuni Pooja(With Rice & Ghee)</td>
					</tr>
				
					<tr>
						<td>12:00-12:30 PM</td><td>MidDay Arti</td>
					</tr>
					<tr>
						<td>4:00 PM</td><td>Pothi</td>
					</tr>
					<tr>
						<td>At SunSet(20Min)</td><td>Dhoop Arti</td>
					</tr>
					<tr>
						<td>8:30-9:00 PM</td><td>Devotional Songs</td>
					</tr>
					<tr>
						<td>9:00 PM</td><td>Chavdi & Gurusthan Closes</td>
					</tr>
					<tr>
						<td>9:30 PM</td><td>Water Offered To Sai</td>
					</tr>
					<tr>
						<td>9:45 PM</td><td>Dwarkamai Closes</td>
					</tr>
					<tr>
						<td>10:30-10:45 PM</td><td>Shej Arti</td>
					</tr>
					<tr>
						<td>11:15 PM</td><td>Samadhi Mandir Closes</td>
					</tr>
				</table><hr></a></marquee><hr>Keep in Touch:With All Daily Events And Programmes
			</div>
		</div>
		
	</div>
                  </center>
	
		<center>
		<div id="Footer1">
		  <marquee direction="left"  onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" scrollamount="4" style="margin:0 15px 0 15px;">||Shri Sai Devotees are requested to note that Camera, Video Camera, Handicams, Mobiles, Ladies Purse, Handbags are not allowed in  Temple and Temple Premises|| </marquee>		
		</div>		
		
		<div id="Footer">
			<a href="Index.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="About.php">ABOUT TEMPLE</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">PHOTO GALLERY</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">REGISTRATION</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">BOOK COLLECTION</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">DONATION</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">FEEDBACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<br><font color="blue">CopyRight@kunal All Rights Resereved</font>	
		</div>
		</center>
	</div>
</body>
</html>



<?php


	if(isset($_POST['Submit']))
	{
		
		
		$conn=mysqli_connect('localhost','root','','localhost');
		$select1=$_POST['category'];
		$select2=$_POST['type'];
		$amt=$_POST['amt'];
		$remark=$_POST['remark'];
		
		
		
		
		$query_insert="INSERT INTO `fund`(`fund category`, `fund type`, `amt`, `remark`)values('$select1','$select2',$amt,'$remark')";
		$query=mysqli_query($conn,$query_insert);
		if($query)
		{	
			$message = "Thank You For Your Donation...";

			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$message = "Sorry...Please check  the data...";
			echo "<script type='text/javascript'>alert('$message');</script>";
		
				
				
				
		}
	}
	
?>