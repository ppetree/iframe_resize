<?php
// this file resides on domain_b.com and is where you want the iframe created
// the <script> tag will load domain_a.js from domain_a.com and that javascript
// will create the iframe for you.
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if IE]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
  <!-- START PAGE TEXT -->
  <h1>News</h1>
  <script type="text/javascript" src="http://www.domain_a.com/domain_a.js?kitid=001" id="domain_a_script"></script>
</body>
</html>
