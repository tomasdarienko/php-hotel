<!-- Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Realizzare header ed un footer in due file separati ed includerli nella pagina
2 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
SUPER BONUS
3 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->
<?php



$hotels = [

     [
          'name' => 'Hotel Belvedere',
          'description' => 'Hotel Belvedere Descrizione',
          'parking' => true,
          'vote' => 4,
          'distance_to_center' => 10.4
     ],
     [
          'name' => 'Hotel Futuro',
          'description' => 'Hotel Futuro Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 2
     ],
     [
          'name' => 'Hotel Rivamare',
          'description' => 'Hotel Rivamare Descrizione',
          'parking' => false,
          'vote' => 1,
          'distance_to_center' => 1
     ],
     [
          'name' => 'Hotel Bellavista',
          'description' => 'Hotel Bellavista Descrizione',
          'parking' => false,
          'vote' => 5,
          'distance_to_center' => 5.5
     ],
     [
          'name' => 'Hotel Milano',
          'description' => 'Hotel Milano Descrizione',
          'parking' => true,
          'vote' => 2,
          'distance_to_center' => 50
     ],

];


?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=, initial-scale=1.0">
     <title>hotel</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


     <table class="table">
          <thead>
               <tr>
                    <th scope="col"> </th>
                    <th scope="col">Nome hotel</th>
                    <th scope="col">descrizione</th>
                    <th scope="col">parcheggio</th>
                    <th scope="col">voto</th>
                    <th scope="col">distanza dal centro</th>
               </tr>
          </thead>
          <tbody>
               <?php foreach ($hotels as $key => $value) { ?>


                    <tr>
                         <th scope="row"><?php echo ($key + 1) ?></th>
                         <td>
                              <?php echo $value['name'] ?>
                         </td>
                         <td>
                              <?php echo $value['description'] ?>
                         </td>
                         <td>
                              <?php
                              if ($value['parking'] == true) {
                                   echo " con ";
                              } else {
                                   echo " senza ";
                              }
                              ?>
                         </td>
                         <td>
                              <?php echo $value['vote'] ?>
                         </td>
                         <td>
                              <?php echo $value['distance_to_center']," km" ?>
                         </td>
                    </tr>

               </tbody>
          <?php } ?>
     </table>``

</body>

</html>