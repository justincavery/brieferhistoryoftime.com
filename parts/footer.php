<?php
$pagename =  basename($_SERVER['PHP_SELF']);
$pagename = substr($pagename, 0, -4);
$pagenumber = (int)$pagename;
?>

<?php
  $glossaryPath = $_SERVER['DOCUMENT_ROOT'];
  $glossaryPath .= "/parts/glossary.php";
?>


<?php if ($basename == 'glossary'): echo '<!-- No additional glossary on the glossary page -->';
else: echo '<div class="container"><aside id="glossary" class="glossary">';
      include_once($glossaryPath);
      echo '</aside></div>';
endif; ?>

<div id="veil" class="veil off"></div>
<aside class="footnote-content " id="footnote-content">
</aside>
</article>

<div class="pagination">
<?php
if ($pagenumber > 1 && $pagenumber < 12):
  echo "<a class='pagination--previous' href='" . ($pagenumber - 1). "'>Previous Chapter</a>";
  echo "<a class='pagination--next' href='" . ($pagenumber + 1). "'>Next : " . $nextChapterTitle ."</a>";
elseif($pagenumber == 12):
  echo "<a class='pagination--previous' href='" . ($pagenumber - 1). "'>Previous Chapter</a>";
echo "<a class='pagination--next' href='/gloassary'>Glossary</a>";
elseif($pagename == 404):
  echo "";
elseif($pagenumber == 1):
  echo "<a class='pagination--next' href='/chapters/" . ($pagenumber + 1). "'>Next : " . $nextChapterTitle ."</a>";
else:
  echo "";
endif;
?>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-685823-9', 'auto');
  ga('send', 'pageview');
</script>
<script src="/js/min/main-min.js?v0.3"></script>
</body>

</html>