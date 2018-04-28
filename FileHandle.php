<html>
    <head>
        <meta charset="UTF-8">
        <title>File Reading</title>
    </head>
    <body>
        <?php
        $fname="abc1.txt";
        $file=fopen($fname,"w+");
        if($file==FALSE)
        {
            echo "Error in opening or creating file";
            exit();
        }
        $msg="This is file handling using php";
        fwrite($file, $msg);
        fclose($file);
        if(file_exists($fname))
        {
            $file=fopen($fname,"r");
            $filesize= filesize($fname);
            $filetext=fread($file, $filesize);
            echo ("$filesize");
            echo ("<pre>$filetext</pre>");
        }
        else
        {
            echo "error in opening file";
        }
        fclose($file);
        unlink($fname);
        ?>
    </body>
