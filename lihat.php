<?php 

echo "<head><title></title></head>";
$fp = fopen("booking.txt", "r");
    echo "<center><h1><a href='tampilan.php'>Data Pemesanan</a></h1>";
echo "<table border='1' align='center'>";
    echo "<tr><td>Nama </td><td> Alamat</td><td> Email </td><td> Phone </td><td> Layanan </td></tr>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>$pisah[4]</td><td>$pisah[5]</td><td>$pisah[6]</td><td>$pisah[7]</td><td>$pisah[8]</td></tr>";
}
fclose($fp);
echo "</table><br><br>";
echo "</center><br>";

//buka file counter mode baca
$filecounter="data.txt";
$fl=fopen($filecounter,"r+");
//ambil nilai hit dan simpan dalam variabel $hit.
$hit=fread($fl,filesize($filecounter));
//tampilkan
    echo("<table width=250 height=140 align=center cellspacing=0 cellpadding=0><tr>");
    echo("<td width=250 valign=middle align=center>");
    echo("<font face=verdana size=2 color=black><b>");
    echo("Jumlah Pengunjung : ");
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");
//tutup file counter.txt
fclose($fl);
//buka file counter.txt mode tulis
$fl=fopen($filecounter,"w+");
//tambahkan nilai hit dengan 1
$hit=$hit+1;
//simpan
fwrite($fl,$hit,strlen($hit));
//tutup
fclose($fl);

?>


    
    
    
    
    



