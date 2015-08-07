<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">
<title>contact</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
	background-color: #975F2C;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 14px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
	background-color: #FFF;
}

/* ~~ This fixed width container surrounds all other divs ~~ */
.container {
	width: 960px;
	background: #FFFFFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ The header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo. ~~ */
.header {
	display: block;
	height: 100px;
	background-color: #FFF;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 200px;
	background: #EADCAE;
}
.content {
	width: 600px;
	float: left;
	margin-left: 170px;
	padding-top: 10px;
	padding-right: 0;
	padding-bottom: 10px;
	padding-left: 0;
}
.sidebar2 {
	float: none;
	width: 200px;
	display: block;
	padding-top: 10px;
	padding-right: 0;
	padding-bottom: 10px;
	padding-left: 0;
	background-color: #FFF;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
	float: left;
	width: 90%;
}
ul.nav li {
	border-bottom: 1px solid #666;
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the anchor block properties so it fills out the whole LI that contains it so that the entire area reacts to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #ADB96E;
	color: #FFF;
}

/* ~~ The footer styles ~~ */
.footer {
	padding: 10px 0;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
	background-color: #FFF;
}

/* ~~ Miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the .container) if the .footer is removed or taken out of the .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
  <div class="header"><a href="index.html"><img src="images/logo2_1.png" alt="Logo" name="Insert_logo" width="115" height="60" id="Insert_logo" style="background: white; display:block;float:left;" /></a>
     <p>&nbsp;</p>
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#">ABOUT</a>
        <ul>
          <li><a href="about_moelleux.html">About Moelleux</a></li>
          <li><a href="moelleuxs promise.html">Moelleux'S Promise</a></li>
         
        </ul>
      </li>
      <li> <a href="index.html">HOME</a></li>
     <li> <a class="MenuBarItemSubmenu" href="#">ITEM</a>
        <ul>
          <li><a class="MenuBarItemSubmenu" href="#">Type</a>
            <ul>
             <li><a href="Praline.html">Praline</a></li>
              <li><a href="Carre.html">Carre</a></li>
               <li><a href="Ganache.html">Ganache</a></li>
               <li><a href="Caramel.html">Caramel</a></li>
               <li><a href="Truffe.html">Truffe</a></li>
            </ul>
          </li>
           <li><a href="time to eat.html">Time to eat</a></li>
        </ul>
      </li>
      <li><a href="origin.html">ORIGIN</a></li>
      <li><a href="contact.php">CONTACT</a></li>
    </ul>
  </div>
  

  <div class="content">
    <h1><img src="images/contact-us.png" width="600" height="300" alt="contact us"></h1>
    <p>Email: <a href="mailto: rkghtkfkd@naver.com"> rkghtkfkd@naver.com</a></p>
<br>
    <form name="f1" method="post" action="welcome.php">
      <h3 lang="en">First name:
        <label for="firstname"></label>
        <span id="sprytextfield3">
        <input type="text" name="firstname" id="firstname">
        <span class="textfieldRequiredMsg">값을 반드시 입력해야 합니다.</span><span class="textfieldMaxCharsMsg">최대 문자 수를 초과했습니다.</span></span></h3>
    
   
    <h3 lang="en">Last name:
      <label for="lastname"></label>
      <span id="sprytextfield4">
      <input type="text" name="lastname" id="lastname">
      <span class="textfieldRequiredMsg">값을 반드시 입력해야 합니다.</span><span class="textfieldMaxCharsMsg">최대 문자 수를 초과했습니다.</span></span></h3>
    </p>
    <h3 lang="en">Email:
      <label for="email"></label>
      <span id="sprytextfield5">
      <input type="text" name="email" id="email">
      <span class="textfieldRequiredMsg">값을 반드시 입력해야 합니다.</span><span class="textfieldInvalidFormatMsg">형식이 잘못되었습니다.</span><span class="textfieldMaxCharsMsg">최대 문자 수를 초과했습니다.</span></span></h3>
    
    <h3 lang="en">Comment:
   
      <label for="question"></label>
      <span id="sprytextarea2">
      <textarea name="comment" id="question" cols="45" rows="5"></textarea>
      <span class="textareaRequiredMsg">값을 반드시 입력해야 합니다.</span><span class="textareaMaxCharsMsg">최대 문자 수를 초과했습니다.</span></span></h3>
    
   
      <p>
        <input type="submit" name="mailto" id="mailto" value="submit">
      </p>
    
    </form>
   


    <h2>&nbsp;</h2>
<h3>&nbsp;</h3>
    <!-- end .content --></div>
  <div class="sidebar2">
    <h4>&nbsp;</h4>
    <!-- end .sidebar2 --></div>
  <div class="footer">
    <p>MOELLEUX | OWNER : CHOI GA HEE</p>
    <p><span title="1010 290 Queen St Auckland, 1010 NEWZEALAND"><a href="https://www.google.com/url?sa=D&oi=plus&q=https://www.google.com/maps/place/Tasman%2BInternational%2BAcademies/data%3D!4m2!3m1!1s0x6d0d47e53acb30f9:0x2f5726e841e9896b?gl%3DKR%26hl%3Dko" target="_blank" tabindex="0">1010</a> 290 Queen St Auckland, 1010 NEWZEALAND</span></p>
  </div>
  <!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"Name", maxChars:30, validateOn:["blur", "change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {hint:"Email", maxChars:30, validateOn:["blur", "change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {hint:"Your Message", maxChars:150});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {hint:"First name", maxChars:20});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {hint:"Last name", maxChars:20});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "email", {hint:"Email", maxChars:50});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {maxChars:200, hint:"No more 200 words"});
</script>
</body>
</html>

<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="test1234";
$dbname="test";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
//Create connections
$conn=mysql_connect($servername,$username,$password);
mysql_select_db($dbname) or die (mysql_error());
//Check connection
if(!$conn){
	die("Connection failed:".mysql.error());
	}
//insert data into a table
$sql=mysql_query("INSERT INTO choco (SN,firstname,lastname,email,comment) VALUES (NULL,'$firstname','$lastname','$email','$comment')");
if(!$sql){
	
		echo "Error".$sql."<br>".mysql_error($conn);
		
		}
	mysql_close($conn);

?>
