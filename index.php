<?php
$con=mysqli_connect('localhost','root','','localhost') or die(mysqli_connect_error());
echo "connection successfully...."
?>
<html>
<head>
	<title>Index</title>
<link href="Style.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body id="b1">
	<div id="Container">
		<center>
		 	<div id="Banner">
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div id="Navigation">
			<ul>
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
		</center>
		<br></br>
	<center>
	 <div id="Middle">
		
		<div id="Leftcol">
			<div style="font-family:Lucida Handwriting;font-size:13px">Sai Baba</div>
			<div id="Image1"><img src="Images/Loc.jpg"  style="border-radius:20px;"></img></div>
			<div style="font-family:Lucida Handwriting;font-size:13px">Sai Raj</div>
			<div id="Image2"><img src="Images/new.gif"></img>
			<Marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" scrollamount="3" style="margin:0 15px 			0 15px;">	News And Events<a href="#"> click Here..<hr><img src="Images/scrl.jpg" style="border-radius:20px;"></img>
			<hr><img src="Images/scrl2.jpg" style="border-radius:20px;"></img><hr><img src="Images/scrl0.jpg" style="border-radius:20px;"></img></a></marquee><hr>Keep in Touch:All New Events And Updated Information..</div>
		</div>

		<div id="Content">
		<h1>||Om Sai Ram||</h1><hr>
			<p align="Left">&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;Sai Baba born on <b>28 september 1835 and Died on 15 October 1898</b>, Saibaba remains a very popular saint, especially in India,and is worshiped by people around the world.he had no love for perishable things and his sole concern was self-realization.he gave no distinction based on religion or caste.he taught a moral code of love,forgiveness,helping 0thers,charity,contentment,inner peace,and devotion to God and Guru.one of his well known epigrams,<b>"Sabka Malik Ek(One God Governs all)".</b>
 he also said<b>"Trust in me and your prayer shall be answered".</b>Sai baba encouraged his devotees to pray,chant God's name and read holy scriptures,he told muslims to study the <b>Quar's</b> and Hindus to study texts such as the <b>Ramayan,Bhagavad Gita and Yoga Vasistha.</b>he was impressed by the philosofy of  the Bhagavad Gita.The favourite saying of Saibaba were "Why do you fear when i m here" and "he has no beginning...he has no end" and also "If anybody wants any money from you and you are not inclined to give,do not give,but do not bark at him like a Dog"</p>
<hr>
		<table>
		<td><a href="Booking.php"><img src="Images/log6.jpg"  onmouseover="this.src='Images/log66.jpg'" onmouseout="this.src='Images/log6.jpg'"	style="border-radius:20px;float:right;margin:0 3 0 1"></img></a></td><br>
		<td><a href="Location.php"><img src="Images/log7.jpg" <img src="Images/log7.jpg"  onmouseover="this.src='Images/log77.jpg'" onmouseout="this.src='Images/log7.jpg'"style="border-radius:20px;float:right;margin:6 3 0 1"></img> </a></td><br><br>
		<td><a href="Feedback.php"><img src="Images/log8.jpg" <img src="Images/log8.jpg"  onmouseover="this.src='Images/log88.jpg'" onmouseout="this.src='Images/log8.jpg'"style="border-radius:20px;float:right;margin:6 3 0 1"></img> </a></td><br>
</table>
		</div>
		<div id="Rightcol">
			<div style="font-family:Lucida Handwriting;font-size:13px">Sai Nath</div>
			<div id="Image3"></div>
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
		  <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay="0" scrollamount="3" style="margin:5px 15px 5px 15px;">||Shri Sai Devotees are requested to note that Camera, Video Camera, Handicams, Mobiles, Ladies Purse, Handbags are not allowed in  Temple and Temple Premises||</marquee>		
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

