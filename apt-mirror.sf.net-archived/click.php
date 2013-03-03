<?php
  function is_sourceforge($url) {
    return strncmp($url, "http://apt-mirror.sourceforge.net/", 34) == 0;
  }

  $HTTPReferer = $_SERVER["HTTP_REFERER"];
  $URLToGo = substr($_SERVER["REQUEST_URI"], 11);

  if(!is_sourceforge($HTTPReferer) && !is_sourceforge($URLToGo)) {
    $URLToGo = '/';
  }
?>
<html>
<head>
</head>
<body>
<!-- Google Code for apt-mirror: click any link Conversion Page -->
<script language="JavaScript" type="text/javascript">
<!--
var google_conversion_id = 1053623094;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "4I4iCKjZRxC2hrT2Aw";
//-->
</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<img height="1" width="1" border="0" src="http://www.googleadservices.com/pagead/conversion/1053623094/?label=4I4iCKjZRxC2hrT2Aw&amp;script=0">
</noscript>
</body>
</html>
