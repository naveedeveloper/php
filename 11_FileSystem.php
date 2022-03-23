<?php
    $path = '/dir1/myfile.php';
    $file = 'test.txt';
    // PHP file related functions

    # return filename
    echo basename($path).'<br>';

    # return filename without extension
    echo basename($path, '.php').'<br>';

    # Return the dir name from the path
    echo dirname($path).'<br>';

    # Check for the file/folder
    echo file_exists($file).'<br>';
    echo file_exists('website').'<br>';

    #Get abs path
    echo realpath($file).'<br>';

    #check if writeable
    echo is_writeable($file).'<br>';

    #check if readable
    echo is_readable($file).'<br>';

    #Get file Size
    echo filesize($file).'<br>';

    #Create directory
    //mkdir('testing');

    #remove dir if empty
    //rmdir('testing');

    # copy file

    // echo copy('1_variables.php', 'copiedFile.php');

    # remane a file
    // rename('copiedFile.php', 'myCopiedFile.php');

    # Delete  a file
    // unlink('myCopiedFile.php');

    # write from file to string
    echo file_get_contents($file);

    # write string to file
    echo file_put_contents($file, 'Nothing');

    # Open file for reading
    $handle = fopen($file, 'r');
    $txt = fread($handle, filesize($file));
    echo $txt;
    fclose($handle);
?>
