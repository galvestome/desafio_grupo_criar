<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Corrida de Kart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<body>

  <div class="container">
    <h2>Envie abaixo o log da corrida para processar as informacoes</h2>
    <span>* Permitido apenas extensoes .txt e .log</span>
    <form method="post" enctype="multipart/form-data" action="info.php">
      <div class="input-group mb-3">
        <input type="file" class="form-control" name="logCorrida" id="logCorrida">
        <label class="input-group-text" for="logCorrida">Upload</label>
      </div>
      <button type="submit" class="btn btn-primary">Teste</button>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>