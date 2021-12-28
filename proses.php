<?php
if(isset($_GET ['fnama']))
{
 $mail = $_GET['mail'];
 $fnama = $_GET['fnama'];
$lalamat = $_GET['lalamat'];
$jkel = $_GET['jkel'];
$comment = $_GET['comment'];

echo "<span class='success'>Data yang <b>Masuk</b></span></br>";
echo "Email  :  ".$mail."<br/>";
echo "Nama   :  ".$fnama."<br/>";
echo "Alamat :  ".$lalamat."<br/>";
echo "Jenis Kelamin : ".$jkel."<br/>";
}
}
echo "Komentar: ".$comment."<br/>";
}
?>
