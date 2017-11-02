<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

class test
{
	private $name;
	
	function setName($NewName)
	{
		$this->name = $NewName;
	}
	
	function getName()
	{
		return "My name is: " . $this->name;
	}
	
}

$mytest = new test();
$mytest->setName("Bryan");
echo $mytest->getName();

?>

</body>
</html>
