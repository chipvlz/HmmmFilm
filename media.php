<?php
 $ID = $_GET['id'];
 $Based64ID = base64_encode($ID.$ID.$ID.$ID.$ID.$ID.$ID.$ID.$ID.$ID.$ID); 
 $URLCheck = 'http://'.$_SERVER['SERVER_NAME'].'/check.php?id='.$Based64ID;
?>
<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8" />
  	<meta name="robots" content="noindex"/>
	<meta name="googlebot" content="noindex"/>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
    <meta property='og:description' content="Streaming Embed"/>
	<title>Streaming...</title>
	<style type="text/css">
	*{margin:0;padding:0}
	#hmmmfilm{position:absolute;width:100%!important;height:100%!important}
	#hmmmfilmr{position:fixed;top:0;bottom:0;left:0; width:auto;height: auto;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="//jwpsrv.com/library/AqFhtu2PEeOMGiIACyaB8g.js"></script>
</head>
<body onload="get_video()">

<div id="hmmmfilm"></div>
<script type="text/javascript">
var set = {
'name': 'Developed by Hypnguyen',
'link': 'https://www.facebook.com/t/hypnguyen1209',
};
function get_video(){$.get('<?php echo $URLCheck;  ?>',function(a){loadVid(a)},'json')}function loadVid(a){var b=jwplayer('hmmmfilm').setup({sources:[{type:'video/mp4',label:'HD',file:a.file}],tracks:[{file:a.subtitle,label:'Subtitle',kind:'captions','default':!0}],image:a.poster,flashplayer:'https://ssl.p.jwpcdn.com/player/v/8.1.1/jwplayer.flash.swf',logo:{file:a.logo,logoBar:a.logo,link:set.link},title:'YAM Movies',abouttext:set.name,aboutlink:set.link,controls:!0,autostart:!1,allowfullscreen:!0,fullscreen:!1,preload:!0,primary:'html5',width:'100%',height:'100%',aspectratio:'16:9',displaytitle:!0,playbackRateControls:[0.5,0.75,1,1.25,1.5,2],sharing:{link:'https://www.facebook.com/groups/sharengay.yam/?ref=bookmarks'}});
	b.addButton('//icons.jwplayer.com/icons/white/download.svg','Download Video',function(){window.location.href=b.getPlaylistItem()['file']},'download') }
</script>
</body>
</html>

    
