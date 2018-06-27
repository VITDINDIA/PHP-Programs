<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function f1()
	{
document.abc.src='img/2.jpg';	
	}
function f2()
	{
document.abc.src='img/1.jpg';	
	}	
</script>
</head>
<body>
<img src="img/1.jpg" name="abc" onmouseover="f1()" onmouseout="f2()" />
</body>
</html>
