<?php
	$project = "doc_parsley";
	$page = "v_3.0_api";

	include("../../../../inc/standard_error.inc");
	include("../../../../inc/mysql.inc");
	include("../../../../inc/counter.php");
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"><!-- saved from url=(0014)about:internet --><html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Parsley + Spicelib API</title><link rel="stylesheet" href="style.css" type="text/css" media="screen"><link rel="stylesheet" href="print.css" type="text/css" media="print"><link rel="stylesheet" href="override.css" type="text/css">
    <script language="javascript" type="text/javascript">
    	<!--
        window.onload=function(){
            var d=document.location.search;
			var args=d.substring(d.lastIndexOf('?')+1,d.length);
			var classFrameContent=args;
			var classListFrameContent='';
			if (args.indexOf('&') != -1) {
				classFrameContent = args.substring(0,args.indexOf('&'));
				classListFrameContent = args.substring(args.indexOf('&')+1,args.length);
			}
            if(classFrameContent!='')
            	top.frames['classFrame'].document.location.href=classFrameContent;
			if(classListFrameContent!='')
				top.frames['packageFrame'].frames['classListFrame'].document.location.href=classListFrameContent;
        }
        -->
    </script>
</head>
<frameset cols="320,*" border="2" bordercolor="#AAAAAA" framespacing="1">
       <frame src="package-frame.html" name="packageFrame" scrolling="no">
       <frameset rows="80,*" border="0" bordercolor="#AAAAAA">
       		<frame src="title-bar.html" name="titlebar" scrolling="no" frameborder="0">
       		<frame src="package-summary.html" name="classFrame" frameborder="0">
    	</frameset>
    <noframes>
	<body>
        <h2>Frame Alert</h2>
        <p>
        This document is designed to be viewed using the frames feature. If you see this message, you are using a non-frame-capable web client.
        <br>
        Link to <a href="package-summary.html">Non-frame version.</a>
        </p>
        </body>
    </noframes>
</frameset>
<!--<br/>Mon Feb 6 2012, 01:04 AM +01:00  --></html>
