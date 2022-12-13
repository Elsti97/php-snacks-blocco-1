<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$classe = [
  [
    'nome' => 'Anna',
    'cognome' => 'Rossi',
    'voti' => [
      'matematica' => 10,
      'italiano' => 9,
      'storia' => 8,
      'filosofia' => 9,
    ]
  ],
  [
    'nome' => 'Mario',
    'cognome' => 'Bianchi',
    'voti' => [
      'matematica' => 5,
      'italiano' => 6,
      'storia' => 7,
      'filosofia' => 8,
    ]
  ],
  [
    'nome' => 'Luigi',
    'cognome' => 'Verdi',
    'voti' => [
      'matematica' => 8,
      'italiano' => 7,
      'storia' => 9,
      'filosofia' => 9,
    ]
  ],
  [
    'nome' => 'Franco',
    'cognome' => 'Armani',
    'voti' => [
      'matematica' => 6,
      'italiano' => 7,
      'storia' => 7,
      'filosofia' => 7,
    ]
  ],
  [
    'nome' => 'Aldo',
    'cognome' => 'Baglio',
    'voti' => [
      'matematica' => 5,
      'italiano' => 4,
      'storia' => 2,
      'filosofia' => 10,
    ]
  ],
]
?>

<!doctype html>
<html lang="en">

<head>
  <title>Snack 7</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
  </header>
  <main>
    <div class="w-25 m-auto">
      <?php
      foreach ($classe as $studente) {
        $voti = $studente['voti'];
        $numVoti = count($voti);
        $sommaVoti = array_sum($studente['voti']);
        $mediaVoti = $sommaVoti / $numVoti;
      ?>

        <ul class="bg-success p-2 text-white">
          <li>
            <?php echo $studente['nome'] . ' ' . $studente['cognome'] . ' Media: ' . $mediaVoti ?>
          </li>
        </ul>


      <?php
      }
      ?>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>