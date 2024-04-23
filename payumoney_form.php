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
		
			
		
		
		</center>
	</div>
</body>
</html>

<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "KHBOLRFM";

// Merchant Salt as provided by Payu
$SALT = "Lg7L4UCuQT";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://sandboxsecure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <h2>PayU Form</h2>
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
	  <input type="hidden" name="hash_abc" value="<?php echo $hash_string ?>"/>
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
		<tr><td>
		Fund Category:</td><td><select name="category">
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
			 <option value="Abhishek Fund">Abhishek Fund</option></select></td></tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>

        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
          <td>State: </td>
          <td><input name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
        </tr>
               <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>
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
			<br><font color="blue">CopyRight@Kunal All Rights Resereved</font>	
		</div>
