<?php 

class Result {
  public function finalResult($file) {
    $dadosCorrida = (array)$file;
    $teste = [];
    $teste2 = [];
    
    for ($i = 0; $i < count($dadosCorrida); $i++) {
      $teste[] = array_values($dadosCorrida[$i]);
    }

    for ($i = 0; $i < count($teste); $i++) {
      $teste2[] = [
        'hora' => $teste[$i][0],
        'codigo_piloto' => $teste[$i][1],
        'nome_piloto' => $teste[$i][2],
        'numero_volta' => $teste[$i][3],
        'tempo_volta' => $teste[$i][4],
        'velocidade_media_volta' => $teste[$i][5] 
      ];
    }

    // echo '<pre>';
    // print_r($teste2);

    //echo '</pre>';
    return $teste2;
  }
}
?>