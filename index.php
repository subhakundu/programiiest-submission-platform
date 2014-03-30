<html>
<head>
	<title>Submission Portal</title>
</head>
<style>
	html, body{
		width: 100%;
		margin: 0px;
	}
	div#guide_line{
		margin-top: 50px;
		text-align: center;
		background: #E55451;
		border: 1px solid #E55451;
		border-radius: 50px 50px 50px 50px;
		width: 900px;
		margin-left: 14%;
	}
	div#guide_line p{
		font-size: 14px;
		font-weight: bolder;
	}
	div#submission_form{
		position: relative;
		margin-top: 70px;
		text-align: left;
		border: 1px solid #E55451;
		height: 300px;
		width: 300px;
		margin-left: 35%;
		padding: 20px 20px 20px 20px;
		font-size: 14px;
		font-weight: bolder;
		color: #E55451;
		font-stretch: extra-condensed;
	}
	div#submission_form input.button{
		position: absolute;
		background-color: blue;
		bottom: 20px;
		float: right;
		margin-left: 60%;
		color: #fff;
		border: 1px solid blue;
		border-radius: 20px 20px 20px 20px;
	}
	div#submission_form #file{
		margin-top: 50px;
		color: blue;

	}
	div#college_header{
		width: 100%;
		top: 0px;
		left: 0px;
		height: 100px;
		background: #3C2FDC;
	}
	h1#name{
		/*font-size: 20px;*/
		color: #fff;
		font-stretch: extra-condensed;
		margin-left: 20px;
	}
	h3{
		color: #fff;
		font-stretch: extra-condensed;
		margin-right: 0px;
	}
	div#footer{
		width: 100%;
		bottom: 0;
		height: auto;
		text-align: center;
		background: #3C2FDC;
		font-size: 18px;
		color: #fff;
		font-stretch: extra-condensed;
		padding-top: 2px;
		padding-bottom: 20px;
		margin-top: 20px;
	}
</style>
<body>
<div id="college_header">
	<div style="float: left; width: auto; height: 100%;">
		<div style="width: 100%; float: left; height: 100%;">
			<h1 id="name">SUBMISSION PORTAL	</h1>
		</div>
	</div>

	<div style="float: right; width: auto; height: 100%;">
		<div style="width: 100%; float: left; height: 50px;">
			<h3>Department of Computer Science and Technology</h3>
		</div>
		<div style="width: 100%; float: left; height: 50px;">
			<h3>IIEST Shibpur</h3>
		</div>
	</div>
</div>
<div style="text-align:center;"><img height="126px" width="600px" src="programiiest.png"/></div>
<div id="guide_line">
	<p>Please submit your zipped file below. You will be updated about your result at the end of the contest.</p>
</div>

<div id="submission_form">
	<form action="upload_file.php" method="post" enctype="multipart/form-data">
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file"><br>
	<p>Please check the format of the file name. Submission will be disqualified if the format (specified) is not maintained properly.</p>
	<input type="submit" name="submit" value="Submit" class="button">
	</form>
</div>

<div id="footer">
	<p>Developed by Department of Computer Science and Technology</p>
</div>

</body>
</html> 
