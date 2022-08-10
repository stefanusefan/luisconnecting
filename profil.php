<?php 

$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'info@luisconnecting.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> Pesan Dari Website</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan anda sudah terkirim !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Pesan anda gagal dikirim';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Silahkan melengkapi semua data';
        $msgClass = 'errordiv';
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta name="keywords" content="jasa penagihan piutang, Outsourcing tenaga penagihan, jasa pengamanan, bodyguard" />
<meta name="description" content="jasa penagihan piutang perusahaan terhadap perusahaan lain, jasa penagihan piutang perusahaan terhadap perorangan,Outsourcing tenaga penagihan dan jasa penagihan hutang perorangan terhadap orang lain" />
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>luis connecting</title>
<link href="css/Style.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script><script type="text/javascript">var search_input= $('.search input[type=text]');var search_input_size = 120; var search_large_size = 180; var padding = 7; var shrinked = "";$(document).ready(function(){search_input.click(function(){shrink();}).focus(function(){shrink();});search_input.blur(function(){ if(shrinked=="YES")normal();});$('.button a').hover(function(){if(shrinked=="YES")normal();}); });function shrink(){if(search_input_size < search_large_size ){$('.button a').each(function(){$(this).animate({'padding-left': padding+'px','padding-right': padding+'px'},'fast');});search_input.animate({'width': search_large_size+'px'},'fast'); shrinked="YES";}return false;}function normal(){search_input.animate({'width':search_input_size+'px'},'fast'); $('.button a').animate({'padding-left':'10px','padding-right':'10px'},'fast');shrinked="";search_input.blur();return false;}</script>
 
</head>

<body>
<div  id="header"></div>
<div id="navbar">
  <ul id="menu_wrap" class="Vista_Black"><li class="button"><a href="index.php">Home</a></li><li class="button"><a href="profil.php">Profil</a></li><li class="button"><a href="contact.php">Hubungi Kami</a></li><li class="button"><a href="#">Informasi</a></li> <li class="search"><a href="#"></a><input type="text" placeHolder="Search"  /></li></ul>
</div>
<div id="profil">
<h2> Profile</h2>
<div id="profile-kiri"><img src="images/logo.jpg" width="400" height="138" /><br />
  <p> <b> Luis Connecting</b> merupakan sebuah usaha sewasta yang bergerak dibidang jasa penagihan utang, piutang dan keamanan yang didirika pada tahun 2004. <b>Luis Connecting</b> selalu menjunjung tinggi komitmen dalam memuaskan client dan selalu menjaga norma-norma yang beralaku dan mematuhi semua aturan yang diberikan oleh BII dalam menjalankan tugas, sehingga images dari dept Collector tidak menjadi buruk dimata masyarakat. Dalam menjalankan tugas kami tidak selalu menggunakan kekerasan apalagi yang sifatnya merugikan Client kami.</p>
Kami akan berusaha semaksimal mungkin untuk mendapatkan hasil yang terbaik dan meraih keuntungan Bersama.
Mari kita   bekerjasama untuk mendapatkan hasil yang terbaik </div> 

<div id="profil-kanan">
<h3>Kator Pusat</h3>
   <p>
   	 Jl. Mitiara Taman Palem Blok A18 No.33<br />
	 Tlp : 0813 8146 9828<br />
       WA :0812 9032 6699 <br />
Email : <a href="mailto:info@luisconnecting.com">info@luisconnecting.com</a><br />
website :<a href="http://www.luisconnecting.com" target="_blank">www.luisconnecting.com</a><br />
    </p>
       <p align="center"><img src="images/luisconnecting.png" width="200" height="200" /></p>
    <h3>Media</h3>
    <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png" width="50" height="50" /></a><a href="https://twitter.com/login?lang=id" target="_blank"><img src="images/twitter logo.png" width="50" height="50" /></a><a href="https://www.youtube.com/" target="_blank"><img src="images/yt.png" width="80" height="50" /></a><br />
    <br />
    <br />
</div>
</div>
<div id="sahdow1"></div>
    <div id="footer">
    
</div>
</body>
</html>