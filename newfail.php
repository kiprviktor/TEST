<?php

  mkdir("upload");
  $file1 ="upload.csv";
   $fh = fopen($file1, "r");
  $data = [];
  //парсим файл CSV
while (($row = fgetcsv($fh, 0, ';')) !== false) {
    list($name, $text) = $row;
    $data[] = [
        'name' => $name,
        'text' => $text,
          ];
    }
 // в цикле создаем новые файлы
 foreach ($data as $row) {
	 	  $fp = fopen('./upload/'.$row['name'], "w");
          fwrite($fp, $row['text']);
        fclose($fp);
    }
?>