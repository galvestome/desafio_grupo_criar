<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  spl_autoload_register(function($className){
    include 'src/'.$className.'.php';
  });

  //print_r($_FILES['logCorrida']);

  $upload = new upload();
  $logReader = new logReader();
  $result = new result();

  $file = $upload->saveFile($_FILES['logCorrida']);
  $data = $logReader->reading($file);
  print_r($data);
  
} else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informacoes da Corrida</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/info.css">
</head>
<body>
  <div class="container">
    <h1>Informacoes Finais da Corrida</h1>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Posicao de Chegada</th>  
          <th scope="col">Codigo do Piloto</th>
          <th scope="col">Nome do Piloto</th>
          <th scope="col">Qntd. de Voltas Completadas</th>
          <th scope="col">Tempo Total de Prova</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <th scope="row">1</th>
          <td>038</td>
          <td>F.MASSA</td>
          <td>4</td>
          <td>5:43.234</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>038</td>
          <td>F.ALONSO</td>
          <td>4</td>
          <td>5:43.234</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>038</td>
          <td>S.VETTEL</td>
          <td>4</td>
          <td>5:43.234</td>
        </tr>
      </tbody>
    </table>
  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>