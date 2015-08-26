<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>test</title>
	<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="templates/test2/style.css">
</head>
<body>
	<div id="wrapper">
		<div id="top"><jdoc:include type="modules" name="top" />
			<img src="templates/test2/images/anh.jpg" alt="anh" width="100%">
		</div>
		<div id="left"><jdoc:include type="modules" name="left" />
			
		</div>
		<div id="content"><jdoc:include type="component" />
			<img src="templates/test2/images/anh.jpg" alt="anh" width="100%">
			<img src="templates/test2/images/anh.jpg" alt="anh" width="100%">
		</div>
		<div id="bottom"><jdoc:include type="modules" name="bottom" />
			<p>Day la bai du thi cua Trangphph03116</p>
		</div>
	</div>
</body>
</html>