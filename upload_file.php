<html>
<head>
	<title>Submission Done</title>
</head>
<body>
hi
<?
$allowedExts = array("gif", "jpeg", "jpg", "png","zip");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (true)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    { 
	    if (file_exists("upload/" . $_FILES["file"]["name"]))		
      		{
			/*$prev_file = "upload/".$_FILES["file"]["name"];
			unlink($prev_file);*/
			echo $_FILES["file"]["name"] . " already exists. ";
	      }else
	      {
		      move_uploaded_file($_FILES["file"]["tmp_name"],
		      "upload/" . $_FILES["file"]["name"]);
	      }?>
	 <p>File uploaded:<? echo $_FILES["file"]["name"];?>. It is submitted properly.</p>
	 <p>For another submission <a href="index.php">click here.</a></p>   
    <?}

  }
else
  {?>
  <p><? echo "Something went wrong. Please contact co-ordinators.";?></p>
  <?}
?>
</body>
</html>
</body>
