 <!doctype html>
<html class="">
    <head>
        <meta charset="utf-8">
       <?php $basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); ?>

        <title><?php if ($basename == 'index'): echo 'A Briefer History of Time'; else: echo $currentChapterTitle . ' | A Briefer History of Time'; endif; ?></title>
        <meta name="description" content=<?php if ($basename == 'index'): echo '"An online and offline version of the work of Stephen Hawking & Leonard Mlodinow for A Briefer History of Time."'; else: echo '"'. $currentChapterDescription .'"' ; endif; ?>>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/main.css?v=1.10" />

        <?php
          $urlPath = $_SERVER['HTTP_HOST'];
        ?>

        <?php
        $pagename =  basename($_SERVER['PHP_SELF']);
        $pagename = substr($pagename, 0, -4);
        $pagenumber = (int)$pagename;

        if ($pagenumber > 0 && $pagenumber < 12):
          echo '<link rel="prerender" href="//' . $urlPath . '/chapters/' . ($pagenumber + 1). '">';
        elseif($pagenumber == 12):
          echo "<link rel='prerender' href='/glossary'>";
        elseif($pagenumber == 1):
          echo "<link rel='prerender' href='/chapters/" . ($pagenumber + 1). "'>";
        elseif($basename == 'index'): echo "<link rel='prerender' href='/chapters/1'>";
        else:
          echo "";
        endif;
        ?>


<!--

I used this text because I am really interested in the Universe and most things Astrophysics.

My bookshelf has a copy of this, as does my Audio Book library however I stumbled across a
rather difficult to read PDF online available for free. This side project was to see how easy
it was to turn a previously printed book or PDF into an online resource that billions could
enjoy for free at their leisure.


-->
<style>







 .introduction {
   height: 95vh;
   background-color: black;
   color: #eee;
   display: -webkit-flex;
   display: flex;
   -webkit-align-items: center;
   align-items: center;
   -webkit-justify-content: center;
   justify-content: center;
   -webkit-flex-direction: column;
   flex-direction: column;

 }

 .veil.on {
    visibility: visible;
    opacity: 1;
}

.veil.off {
  visibility: hidden;
  opacity: 0;
}
.veil {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(40, 40, 40, 0.5);
    z-index: 15;
    transition: all 0.3s ease;

}


 .person--segment {
    width: 34%;
    float: right;
    background-color: rgba(0,0,0,0.2);
    padding: 0 1em;
    margin: 0 1.6em 1.6em;
 }

 .person--segment p{
  font-size: 0.8em;
  font-style: italic;
  line-height: 1.5em;
}

 .person--segment figure {
     margin-bottom: 0;
 }

 .person--segment h2 {
     font-size: 0.9em;
     font-style: italic;
     margin: 0.5em 0;
 }




 @media screen and (min-width: 43.750em) {
   .chapter {
     padding-left: 5%;
     padding-right: 5%;
   }
 }

 @media screen and (min-width: 50em) {

   .container {
     max-width: 40em;
   }
 }

 .header-link {
   position: absolute;
   top: -25px;
   opacity: 0;
   font-size: 0.8rem;
   -webkit-transition: opacity 0.2s ease-in-out 0.1s;
   -moz-transition: opacity 0.2s ease-in-out 0.1s;
   -ms-transition: opacity 0.2s ease-in-out 0.1s;
 }

 a.header-link {
  border-bottom: none;
  text-decoration: underline;
 }

 figure .header-link {
  right:0;
 }

 h2:hover .header-link,
 h3:hover .header-link,
 h4:hover .header-link,
 h5:hover .header-link,
 h6:hover .header-link,
 figure:hover .header-link {
   opacity: 1;
 }

 @media (min-width: 800px){
  .header-link {
    top: 0;
    left: -6.25em;
   }

figure .header-link {
    top:-28px;
    right:0;
    left:initial;
   }
 }

</style>
    <script>
      (function(d) {
        var config = {
          kitId: 'yix4onm',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
</head>

<body>
<header class="header" id="header">
  <a href="/"><h1 class="book-title">A Briefer History of Time</h1></a>
</header>
<article>