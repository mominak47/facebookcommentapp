<?php
$min=1;
$max= 20;
$random = rand($min,$max);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>This is your Dream Car!</title>
<meta property="og:description" content="Click here for more..">
<meta property="og:title" content="This is your Dream Car">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo $_SERVER['SERVER_NAME'];?>">
<meta property="og:image" content="<?php echo $_SERVER['SERVER_NAME'];?>/images/<?php echo $random; ?>.jpg">
<!--<meta property="fb:app_id" content="294366954367693">-->
</head>
<style>
  body{ 
    font-family: verdana;
  }
  .card{
    box-shadow:0px 20px 20px #ccc;
  }
  h1{
    text-shadow:0px 5px 10px #ccc;
  }
  span{
    color:grey;
    font-size:10px;
  }
</style>
<body>
  
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=142177366331651";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <script type="text/javascript">
var uid = '164018';
var wid = '354624';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
  
<center>
  <img class="card" src="/images/<?php echo $random; ?>.jpg"/><br>
  <h1>This is your dream car</h1><br>
    <div class="fb-share-button" data-href="<?php echo $_SERVER['SERVER_NAME'];?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER['SERVER_NAME'];?>;src=sdkpreparse">Share</a></div><br>
  <span>*This is a computer generated result.</span>
</center>
</body>
</html>
