<doctype html>
<html>
<head>
<title>File</title>
<style>
body{
background:url(worldmap3.png);
	background-size:cover;
	margin:0px;
}
.header{
background:rgba(191, 64, 26, 0.31);
	margin-top:0px;
	padding:10px;
	color:#336;
	height:40px;
}
.logimg{
	float:right;
}
.for{
margin-left:450px;
margin-top:150px;
}
</style>
</head>
<div class="header">
<img src="logo.png" />
<div class=logimg>       
<a href="logout1.php"><img src="logout.png" alt="" ></a>  
</div>
</div>
<div class="for">
<form action="upload1.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
<input type="file" name="profile_photo"/>
</td>
</tr>
<tr>
<td>
<input type="submit" name="upload" value="Upload your Img"/>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>