
<?php 
	 if ($_POST){
	 $name= $_POST['name']; 
	$text= $_POST['email'];  
	$comment = $_POST['comment']; 
		 $write = fopen("hitesh.html","a");
		 fwrite($write ,  "<b> NAME:" .$name. "</b>:<br/><b> EMAIL:".$text ."</b>:<br/> COMMENT:".$comment ."<br/><br/>");
		 fclose($write);
		 }	 
		 ?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>comment</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body onload="MM_preloadImages('images/slider-img3.jpg')">
<div class="sc" >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
  <div class="header">
    <div  class ="name" align="center">THE HITESHOLOGY</div>
  </div>
  <div class="navigation">
     <table width="893" border="1" cellspacing="5" cellpadding="0">
      <tr>
        <td width="181"><a href="index.html" align = center >HOME</a></td>
        <td width="181"><a href="ngo.html" align = center>NGO</a></td>
        <td width="191"><a href="newthinking.html" align = center>MY INTELLECTIONS</a></td>
        <td width="265"><a href="CONTACT.PHP" align = center>COMMENTS</a></td>
      </tr>
    </table>
  </div>
  <div class="body">
    <form id="form1" name="form1" method="post" action="">
      <label>NAME
       <br /> <input type="text" name="name" id="name" />
          </label>
          <br /><br />
      <label>EMAIL
       <BR />
        <input type="text" name="email" id="email" />
      </label>
      <BR />
      <BR />
     <label> COMMENT
     <br />
     

     <textarea name="comment" id="comment" cols="90" rows="5"></textarea>
      <br >
      <input type="submit" name="POST" id="POST" value="POST" />
        <br />
    </form>
	<?php include "hitesh.html"; ?>
      </div>
	   
  <div class="footer" style = "text-align:center  "><p style= "font-size:20px"> <b>contact me</b></p>
<p> <b> EMAIL:</b> hiteshkaurav21@gmail.com </p>
<p> <b>PHONE NO:</b> 8896702335</p></div>
</div>
  <div class ="side" >
 
 <a href="https://www.facebook.com/Hitesh21kumar" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 33px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none; align = center;" title="Hitesh Kaurav">HITESH KAURAV</a> <a href="https://www.facebook.com/Hitesh21kumar" target="_TOP" title="Hitesh Kaurav"><img src="https://badge.facebook.com/badge/100001942546633.1936.674225395.png" style="border: 0px width = "250" height = "400" /></a> 
<div class="fb-follow" data-href="https://www.facebook.com/hitesh21kumar" data-width="300" data-height="200" data-colorscheme="dark" data-layout="standard" data-show-faces="true"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</br></br><div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true">
  </div>
    </div>
</body>
</html>
