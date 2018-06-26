<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
var age=parseInt(window.prompt('Enter Your Age'));

if(age > 20 && age<30)
	{
window.location.href='pageone.php';
	}
else if(age > 30 && age <50)
	{
window.location.href='pagetwo.php';
	}
else {
document.write(age);	
}
</script>
</head>
<body>
</body>
</html>