<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Enterprise</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
            <li class="active"><a href="index.php">Home</a></li>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"></a></li>
					
					
					
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<center>

<div class="container bg-dark text-white">
    <?php
    $HP=null;
    $NR=null;
    $UE=null;
    if (isset($_GET['HP'])) {
        $HP=$_GET['HP'];
        $NR=$_GET['NR'];
        $UE=$_GET['UE'];
        $XX=$UE/100;
        $hasil=($HP-$NR)*$XX;
    }
    ?>
    <div class="rows">
        <form action="2.php" method="get">
            <h2><b><center> Reducing Balance Depreciation </center></b></h2>
            <div class="form-group">
                <label>net book value  :</label>
                <input type="text" name="HP" class="form-control" value="<?php echo $HP; ?>" required>
            </div>
            <div class="form-group">
                <label>residual value :</label>
                <input type="text" name="NR" class="form-control" value="<?php echo $NR; ?>"  required>
            </div>
            <div class="form-group">
                <label>rate% :</label>
                <input type="text" name="UE" class="form-control" value="<?php echo $UE; ?>"  required>
            </div>
    <!--         <div class="form-group">
                <select class="form-control" name="operasi">
                    <option value="straight">Garis Lurus</option>
                    <option value="declining">Saldo Menurun Ganda</option>
                </select>
            </div> -->
            <br>
            <button type="button" class="btn btn-danger" onclick="location.href='?'">Clear</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
            </br>
        </form>
        <br>
        <?php
        if (isset($_GET['HP'])) {
            $hasil = "$" .($hasil);
            echo "<h1>$hasil</h1>" ;
        }
        ?>
    </div>

</html>