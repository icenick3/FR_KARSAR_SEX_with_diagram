<?php

$tiktok = $_GET['sub3'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript">
	  !function(win, doc, tag) {
          let searchParams = (new URLSearchParams(window.location.search)).get('f')
          const F = searchParams ? searchParams : 'UX-F-4okzYv';
		  window.mbp = { f: F, b: '{clickid}', k: '{subid}' }
		  let el_tag = doc.createElement(tag)
		  el_tag.async = 1;
		  el_tag.src = 'https://ev.mobstra.com/event/js?v=' + mbp.f;
		  let bd = doc.getElementsByTagName(tag)[0]
		  bd.parentNode.append(el_tag);
	  } (window, document, "script");
  </script>

    <!-- Google tag script -->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2429296810554973');
        fbq('track', 'PageView');
    </script>
<!-- End Facebook Pixel Code -->


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="icon" href="favicon.ico" />
    <title>IQ Test</title>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <?php if (!empty($tiktok)) { ?> <script>!function(t,e,n){t.TiktokAnalyticsObject=n;var o=t.ttq=t.ttq||[];o.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],o.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var a=0;a<o.methods.length;a++)o.setAndDefer(o,o.methods[a]);o.instance=function(t){for(var e=o._i[t]||[],n=0;n<o.methods.length;n++)o.setAndDefer(e,o.methods[n]);return e},o.load=function(t,e){var a="https://analytics.tiktok.com/i18n/pixel/events.js";o._i=o._i||{},o._i[t]=[],o._i[t]._u=a,o._t=o._t||{},o._t[t]=+new Date,o._o=o._o||{},o._o[t]=e||{};var i=document.createElement("script");i.type="text/javascript",i.async=!0,i.src=a+"?sdkid="+t+"&lib="+n;var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(i,s)},o.load("<?php echo $tiktok; ?>"),o.page()}(window,document,"ttq")</script> <?php } ?>
  <link href="css/app.414ae136.css" rel="preload" as="style"><link href="js/app.10356204.js" rel="preload" as="script"><link href="js/chunk-vendors.caf87120.js" rel="preload" as="script"><link href="css/app.414ae136.css" rel="stylesheet">
  </head>

<body>
  <!-- Facebook noscript code-->
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=2429296810554973&ev=PageView&noscript=1"/>
    </noscript>
<!-- END Facebook noscript code-->

<!-- Google tag iframe -->
  <div id="app"></div>
<script type="text/javascript" src="js/chunk-vendors.caf87120.js"></script><script type="text/javascript" src="js/app.10356204.js"></script></body>

</html>