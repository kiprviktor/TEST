<?php

//php -r "require 'test6.php'; ListFolderFiles('C:\PHP\1');"


mkdir("upload");
  $file1 ="excel.csv";
 
  $fh = fopen($file1, "r");
  $data = [];
while (($row = fgetcsv($fh, 0, ';')) !== false) {
    list($name, $text) = $row;

    $data[] = [
        'name' => $name,
        'text' => $text,
          ];
}
//print_r ($data);
 foreach ($data as $row) {
	 
	  $fp = fopen('./upload/'.$row['name'], "w");
  fwrite($fp, $row['text']);
   fclose($fp);

  }
?>