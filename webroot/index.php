<?php
echo <<<HTML_END
<!DOCTYPE html>
<html>
	<head>
    	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <style>
        	body {
            	background-color: #36393f;
                color: #ccd3c9;
            }
            a {
            	color: #ccd3c9;
            	text-decoration: none;
            	font-family: 'Open Sans', sans-serif;
            }
            a:hover {
            	text-decoration: underline;
                cursor: pointer;
                color: #ccd3c9;
            }
            a.text {
            	color: #ccd3c9;
            	text-decoration: none;
                cursor: text;
            	font-family: 'Open Sans', sans-serif;
            }
            code {
            	color: #dcddde;
            	background-color: #2f3136;
            }
            button {
            	background-color: #32353b;
                color: #20a4f4;
                cursor: pointer;
                border: none;
                border-radius: 5px;
            }
        </style>
        <script>
        	function copy_text(id) {
  				if (!id) return;
  				const code = document.getElementById(id);
  				if (!code) return;
  				if (navigator && navigator.clipboard) {
  					navigator.clipboard.writeText(code.innerHTML.replaceAll('&lt;', '<'));
  				}
			};
        </script>
        <title>NodiumFS</title>
        <meta name="title" content="NodiumFS">
		  <meta name="description" content="a File Server">
		  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		  <meta name="language" content="English">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
</html>
HTML_END;

$dir = "./files/";
$hideName = array('.','..','index.php');
$files = scandir($dir);
foreach($files as $filename) {
    if(!in_array($filename, $hideName)){
       $lines = str_replace(array("\r", "\n"), '', file($filename));
       echo '<pre>
<a href="./files/'.$filename.'" download>'.$filename.'</a>
             </pre>';
    }
}