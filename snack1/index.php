<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
  $partite = [
    [
      'squadraCasa' => 'Milano',
      'squadraOspite' => 'Torino',
      'puntiCasa' => 80,
      'puntiOspite' => 70,
    ],
    [
      'squadraCasa' => 'Roma',
      'squadraOspite' => 'Napoli',
      'puntiCasa' => 100,
      'puntiOspite' => 90,
    ],
    [
      'squadraCasa' => 'Ancona',
      'squadraOspite' => 'Palermo',
      'puntiCasa' => 40,
      'puntiOspite' => 50,
    ],
    ];

    for( $i=0; $i < count($partite); $i++){
      echo $partite[$i]['squadraCasa']. ' - ' . $partite[$i]['squadraOspite'] . ' | ' . $partite[$i]['puntiCasa'] . '-' . $partite[$i]['puntiOspite'] . ' ';
    };

?>