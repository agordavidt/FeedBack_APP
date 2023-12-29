<?php 
/** ------------- File Handling ---------------------- */

/**
 * File hanlding is the ability to read and write files on the server.
 * PHP has built in funcitons for reading and wrting files.
 * 
 */


 $file = 'extras/use.txt';

 if(file_exists($file)) {
    //echo readfile($file);
    $handle = fopen($file,'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
 } else{
    $handle = fopen($file,'w');
    $content = 'Joy' . PHP_EOL . 'Sarah' . PHP_EOL . 'Jassy';
    fwrite($handle, $content);
    fclose($handle);
 }


?>