<?php 

class Upload {

  public function validFile($file): void {
    if ($file["error"] != 0) {
      echo $file["error"];
      die;
    }
  }

  public function saveFile($file) {
    $this->validFile($file);

    $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    $uploads_dir = './uploads';
    $tmp_name = $file['tmp_name'];
    $name = $date->format('Y-m-d-H-i-s')."_".basename($file['name']);
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

    return "$uploads_dir/$name";
  }
}
?>
