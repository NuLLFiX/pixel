<?php
// setup
include 'config.php';
$mailparts = explode('@', $_CONFIG['admin_mail']);
?>
<!DOCTYPE html>
<?php echo "<!--\n\x20\x20   \x20\x20\x20\x20 \x20\x20\x20\x2e_\x5f\x20 .\x5f\x5f\x20 \x20_\x5f_\x5f_\x2e_\x5f\x20  \x20\x20\x20   \x20\x20 \x20 \x20 \x20\x20   \x20\x20  \x20\x20   \x20\n \x20____\x20 __ \x5f\x5f|  | \x7c\x20 |\x5f\x2f\x20\x5f_\x5f_\x5c_\x5f\x7c_\x5f \x20\x5f__  \x20\x5f\x5f\x5f_\x20\x20_\x5f\x5f\x5f   ___\x5f_\x20 \n\x20/    \x5c| \x20|\x20\x20\x5c \x20\x7c \x7c\x20 \x7c\\\x20  _\x5f\\\x7c  \\  \\/\x20\x20/\x20_/\x20_\x5f\x5f\x5c/\x20\x20_ \\ /\x20\x20\x20\x20 \\ \n\x7c \x20 \x7c\x20 \\  |\x20\x20\x2f\x20\x20|\x5f\x7c\x20\x20|_|\x20\x20\x7c\x20\x20|\x20 \x7c\x3e \x20\x20 <\x20 \x5c \x20\\__( \x20\x3c\x5f> \x29\x20\x20Y \x59  \x5c\n\x7c_\x5f_\x7c\x20 \x2f___\x5f/\x7c____/\x5f\x5f__\x2f__|\x20\x20\x7c__/__\x2f\x5c\x5f \x5c /\x5c__\x5f\x20\x20>\x5f_\x5f_/|_\x5f|_|\x20\x20\x2f\n\x20 \x20 \x20\\/    \x20  \x20        \x20\x20\x20\x20 \x20\x20      \x20 \\/ \x5c\x2f\x20\x20\x20\\\x2f  \x20 \x20  \x20    \x5c\x2f\x20\nCr\x65\x61ted by \x6e\x75\x6cl\x66i\x78 @\x20n\x75\x6clf\x69\x78.\x63\x6f\x6d\n-->";?>
<html>
<head>
<title>Share your images / photos / pictures / image / photo / picture - <?php echo $_CONFIG['site_name']; ?></title>
<meta content="image,images,photo,photos,picture,pictures,share,sharing,media,public,free,twitter,facebook,myspace,netlog,fast,easy" name="keywords" />
<meta content="One click sharing of images - no registration required!" name="description" />
<link href="css/pixel.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header clear">
<a href="index.php">
<img alt="pixel logo" class="logo" src="img/pix.png" />
</a>
</div>
<div class="border">
<div class="content">
<p>
We would love to hear from you! Send some hate, love or you know; valuable feedback.
Either way we'll read it.
</p>
<p>
<script type="text/javascript">
  //<![CDATA[
    var email = '<?php echo $mailparts[0]; ?>' + '\x40' + '<?php echo $mailparts[1]; ?>';
    document.write('<a href="mailto:'+email+'">'+email+'</a>');
  //]]>
</script>
</p>
</div>
</div>
<div class="footer">
<a href="faq.php" title="Frequently asked questions">FAQ</a>
|
<a href="contact.php" title="Contact us">Contact</a>
|
<a href="api.php" title="Learn how to use our API to provide easy image sharing for your service">API</a>
|
<a href="admin.php" title="Admin Page">Admin</a>
<br />
<?php echo $_SERVER['SERVER_NAME']; ?> by <a href="//nullfix.com/">nullfix.com</a>
</div>

</body>
</html>