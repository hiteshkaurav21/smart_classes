<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <form id="form1" name="form1" method="post" action="new.php">
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
    <?php $_POST["name"]; 
	$text= $_POST["email"];  
	$comment $_POST["comment"]; 
	$post= $_POST["post"]; 
	 if ($post){
		 $write = fopen("hitesh.txt","a+");
		 fwrite($write,"<u><b> $name</br></u><u><br>$text</br></u> <br>$comment</br>");
		 fclose($write);
		 
		 $read = fopen("hitesh.txt","r+t");
		 echo "all comments:</br>";
		 while(!feof($read)){
			 echo fread($read, 1024);
		 }
		 fclose($read);}
		 else{
		 $read = fopen("hitesh.txt","r+t");
		 echo "all comments:</br>";
		 while(!feof($read)){
			 echo fread($read, 1024);
		 }
		 fclose($read);}	 
		 ?> 

</body>
</html>
