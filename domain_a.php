<?php
// this file provides the iframe contents
// provide a clickable image
// provide some content
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>iframe contents from domain_a.com</title>
<!--[if IE]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type='text/JavaScript'>
function ToggleList()
{
  var szFrameName = 'domain_a_iframe_' +"<?php echo $some_number; ?>";
  var szSpanName = "cmpnt_" +"<?php echo $some_number; ?>";
  var idCmpnt = document.getElementById(szSpanName);
  
  if(idCmpnt.style.display != "none")
  {
    idCmpnt.style.display = "none";
    idCmpnt.style.visibility = "hidden";
    postSize('210px', szFrameName);
  }
  else
  {
    idCmpnt.style.display = "block";
    idCmpnt.style.visibility = "visible";
    postSize('500px', szFrameName);
  }
}

// tell parent to resize us
function postSize(height, szFrame)
{ 
  data = {'height':height,'frame':szFrame}; 

  var target = parent.postMessage ? parent : (parent.document.postMessage ? parent.document : undefined);
  if (typeof target != "undefined" && document.body.scrollHeight)
    target.postMessage(JSON.stringify(data), "*");
}
window.addEventListener("load", ToggleList, false);
</script>   
</head>
<body>
  <div class='kit-folder' onclick='ToggleList();'><img src="http://www.domain_a.com/image.jpg"></div>
  <p>Lorem ipsum dolor sit amet consectetuer nunc Nullam porttitor consectetuer Quisque. Eros Curabitur tincidunt condimentum justo risus netus orci laoreet dolor accumsan. Enim eros Nulla Aliquam turpis morbi lacus Nunc platea netus Donec. Morbi Nulla in congue Nam eleifend laoreet tellus condimentum lacinia Lorem. Malesuada non elit felis Curabitur pede fermentum Morbi orci ligula Curabitur. Proin justo eget elit wisi nibh tellus lorem Curabitur volutpat condimentum. Pharetra Maecenas Morbi neque nisl ut tempus vitae nunc nisl elit. Curabitur fringilla Vivamus Donec pulvinar nascetur Ut quis augue quam eu. Velit ac Mauris Pellentesque Donec mauris tempus In Curabitur amet.</p>
  <p>Cursus orci id cursus Sed Sed rhoncus elit Nam.</p>
  <p>Sit iaculis Curabitur odio eget Nulla condimentum pretium Phasellus Vestibulum Nam. Ut wisi orci eros mollis parturient felis ante libero tincidunt id. Sed Proin lorem Morbi et justo lorem elit eu egestas dui. At nulla Suspendisse tortor convallis Suspendisse Praesent nascetur eget Aenean vitae. Elit amet ante pretium tincidunt orci Lorem eget metus Nulla congue. Facilisi Sed semper gravida semper vitae lobortis urna wisi orci magna. Et augue sit Ut felis.</p>
</body>
</html>
