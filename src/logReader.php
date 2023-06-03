<?php 

class logReader {
    
  public array $data = [];

  public function reading(string $file) {
    $openFile = fopen($file, 'r');
  
    if ($openFile) {
      while(($readingFile = fgets($openFile))){
        if(preg_match('/Hora/', $readingFile)) {
          continue;
        }

        $row = array_filter(explode(' ', $readingFile), function($val) {
            return $val !== '' && $val !== '-';
        });

        $this->data[] = $row;
      }
    } else {
      echo "Nenhum log encontrado para leitura";
    }

    fclose($openFile);
    
    return $this->data;
  }
}
?>