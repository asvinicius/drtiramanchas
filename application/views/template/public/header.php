<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Limpeza de Tapetes 30% desconto</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css " rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css " rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css " rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
   <style>
.barra {
    position:fixed;
	margin-right:0px;
	margin-top:0px;
	display:inline-block;
	float:both;
	 z-index: 2;
}
</style>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("wrapper").className = "barra";
    } else {
        document.getElementById("wrapper").className = "";
    }
}
</script>

</head>
<body>
    <div id="wrapper"  >
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>">Dr. TiraManchas</a> 
            </div>
            <div style="color: white;
             padding: 15px 50px 5px 50px;
             float: right;
             font-size: 16px;"> <?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
             date_default_timezone_set('America/Rio_branco');
             echo strftime('%A, %d de %B de %Y', strtotime('today'));?>
             <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>  
        </div>
           <!-- /. NAV TOP  -->