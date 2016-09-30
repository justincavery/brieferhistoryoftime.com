<?php
// PHP Variables & metadata
$currentChapterTitle = 'Glossary';
$currentChapterDescription = 'A glossary of terms for A Briefer History of Time';
$nextChapterTitle = Null;
$nextChapterURL = Null;
?>

<?php include 'parts/header.php';?>

<div class="one book">
  <div class="container">
       <section class="chapter">
          <?php include 'parts/glossary.php';?>
       </section>
   </div>
 </div>

<?php include 'chapters/toc.php';?>
<?php include 'parts/footer.php';?>