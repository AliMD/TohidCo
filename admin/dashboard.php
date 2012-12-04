<?php 
session_start();
if( !isset($_SESSION['login']) || isset($_SESSION['login']) !== TRUE) {
	header('Location: login.php');
	exit;
}
include_once 'preheader.php';
include_once 'ajaxCRUD.class.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard</title>
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen" /> -->
<link href="css/ajaxcrud.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../js/jquery.1.3.2.min.js"></script>
</head> 

<body>
<div class="wrapper">
	<div class="admin_header">
        <div class="admin_title">
            <h3>Welcome to your admin panel.</h3>
            You can edit your products, or add new producs in below table.<br />
        </div>
        <div class="logout"><a href='login.php?logout' >Logout</a>&nbsp;&nbsp;<?php echo $_SESSION['user']; ?></div>
        <div><a href='../share/' target="_blank" >Upload</a></div>
    </div>
    <div class="product_table_wrapper">
    <?php 
		$prodtbl = new ajaxCRUD("Product", "products", "product_id", "");
		$prodtbl->omitPrimaryKey();
		$prodtbl->setLimit(15);
		
		$prodtbl->setTextareaHeight('description', 150);
		$prodtbl->setTextareaHeight('description_fa', 150);
		
		$prodtbl->displayAs("name",           "English Name");
		$prodtbl->displayAs("sku",            "SKU");
		$prodtbl->displayAs("iran_code",      "Iran Code");
		$prodtbl->displayAs("description",    "English Description");
		$prodtbl->displayAs("weight",         "Weight");
		$prodtbl->displayAs("category",       "English Category"); 
		$prodtbl->displayAs("category_id",    "Category ID");
		$prodtbl->displayAs("image",          "Image Name");
		$prodtbl->displayAs("name_fa",        "Persiona Name");
		$prodtbl->displayAs("description_fa", "Persiona Description");
		$prodtbl->displayAs("category_fa",    "Persian Category");
		$prodtbl->displayAs("sort_order",     "Sort Order");
		
		$prodtbl->showTable();
	?>
    </div>
</div>
</body>
</html>