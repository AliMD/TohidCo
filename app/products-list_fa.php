<?php 



function dieFunc() {

	die( "Error " . mysql_errno() . ": " .mysql_error() . "." );

}



	require_once 'dbinfo.php';

	$tableName = "products";

	

	$dbCon = @mysql_connect( $server, $dbUserName, $dbPassword ) or dieFunc();

	

	@mysql_set_charset('utf8');

	

	@mysql_select_db( $dbDataBase, $dbCon ) or dieFunc();

	

	$query = " SELECT * FROM `$tableName` ORDER BY `sort_order`, `name` ";

	$result = @mysql_query( $query, $dbCon ) or dieFunc();

	

	if ( @mysql_num_rows( $result ) != 0 ) {

		

		while ( $product = @mysql_fetch_array( $result, MYSQL_ASSOC ) ) {

?>



<div class="product_wrapper">

	<a href='media/products-images/<?php echo $product['image'] ?>' 

    	desc='	<div class="left_col">

					<span><strong><?php echo $product['name_fa'] ?></strong></span>

                    <span><?php echo $product['description_fa'] ?></span>

                    <span><?php echo $product['category_fa'] ?></span>

                </div>

                

                <div class="right_col">

					<span><strong>وزن: </strong><?php echo $product['weight'] ?> kg</span>

                    <span><strong>کد: </strong><?php echo $product['sku'] ?></span>

                    <span><strong>ایران کد: </strong><?php echo $product['iran_code'] ?></span>

                </div>'

                 

        rel="group">

    	<img src='media/products-images/thumbs/<?php echo $product['image'] ?>' />

    </a>

	<div class="product_info">

    	<p class="title"><?php echo $product['name_fa'] ?></p>

        <p class="code"><?php echo $product['sku'] ?></p>

    </div>

</div>



<?php 

		}

	} else  echo "No Product Found!"; 

?>