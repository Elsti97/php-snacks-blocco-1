<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php
$paragrafo= 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, veritatis minus voluptas maiores harum voluptate provident voluptates, quam, magnam nesciunt nobis doloribus aspernatur facere quidem illo saepe at sunt commodi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Et temporibus blanditiis, repudiandae dolor odit nemo. Recusandae modi quibusdam laboriosam sint reiciendis odio rerum qui exercitationem necessitatibus hic repellat ipsum facere. Lorem ipsum dolor sit amet consectetur adipisicing. elit. Et temporibus blanditiis, repudiandae dolor odit nemo, recusandae modi quibusdam laboriosam sint reiciendis odio rerum qui exercitationem necessitatibus hic repellat. ipsum facere.';
echo "<h1>Paragrafo Originale:</h1>$paragrafo";
$miniPar = explode( '.', $paragrafo, -1);

foreach($miniPar as $parCol){
  echo "<ul><li>{$parCol}</li></ul>";
}
?>
