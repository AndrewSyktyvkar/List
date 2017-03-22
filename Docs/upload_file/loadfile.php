<!DOCTYPE html>
<html>
<head>
	<meta charset="windows-1251">
	<title>Main</title>
	<link rel="stylesheet" href="Content/bootstrap.min.css">   
    <link rel="stylesheet" href="Content/fa/font-awesome.min.css">
    <link rel="stylesheet" href="Content/ionic/ionicons.min.css">
    <link rel="stylesheet" href="Content/AdminLTE.css">
    <link rel="stylesheet" href="Content/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link href="Content/font.googleapi.css" rel="stylesheet" type="text/css">
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">

	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="parent">
        <div class="col-md-6 col-md-offset-3">
            <form role="form" action="_loadfile.php" method="post" enctype="multipart/form-data">   
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="filename" id="exampleInputFile">                
              </div>              
              <button type="submit" class="btn btn-default">Загрузить</button>
            </form>
        </div>
    </div>
</body>
</html>

