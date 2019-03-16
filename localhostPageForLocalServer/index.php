<html>
<head>
  <title>Webpages hosted on this server</title>
  <link href="main.css" rel="stylesheet">
</head>
<body>
  <h1>This is the list of websites hosted on the local machine:</h1>
  <ul>
<?php
$dir = new DirectoryIterator("./");
foreach ($dir as $fileinfo) {
    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
        echo '<li><a href="', $fileinfo->getFilename(), '" target="_blank">', $fileinfo->getFilename(), '</a></li>';
    }
}
?>
  </ul>
</body>
