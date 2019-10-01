<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quá Trình Học Tập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/qtcss.css">
</head>

<body>
<?php	 

     include_once("header.php");
     include_once("nav.php"); 
     include_once("../model/enity/learninghistory.php")
    $rsMockData = Learninghistory::getLish("102T1011010");
    $rsFromFile = Learninghistory::getLishFromFile("101");
    var_dump("$lines");
    ?>
    <div class="container" id="content">
    	<div class="row">
    		<div class="col-md-2">
    			
    		</div>
    		<div class="col-md-8">
    			  <h1 style="text-align: center;">Quá Trình Học Tập</h1>
    			  <br>
    			  <hr>
    			<div class="containerButton">
    				
    				<button><span><i class="fa fa-plus"></i>Thêm</button>
    			</div>
    			<table class="table">
    				<thead>
    				<tr>
    					<td>STT</td>
    					<td>Từ Năm</td>
    					<td>Đến Năm</td>
    					<td>Lớp</td>
    					<td>Nội Dung</td>
    					<td>Thao Tác</td>
                        <td class='d-flex'>";
                        <button class='btn btn-outline-sucess mr 3'><i class='fas fa-shopping-cart' />";
                        <button class='btn btn-outline-sucess mr 3'><i class='fas fa-shopping-cart' />";
                        </td>    
    				</tr>
    			</thead>
                <tbody>
                    <?php
                       foreach ($rsFromFile  as $key => $value) {
                        $stt = $key +1;
                        echo "<tr>";
                        echo "<th scope='row'>$stt</th>";
                        echo "<td>$value->yearFrom</td>";
                        echo "<td>$value->yearTo</td>";
                        echo "<td>$value->schoolName</td>";
                        echo "<td>$value->schoolAddress";
                        echo "<td>Lớp</td>";
                        echo "<td class='d-flex'>";
                        echo "<button class='btn btn-outline-sucess mr 3'><i class='fas fa-shopping-cart' />";
                        echo "<button class='btn btn-outline-sucess mr 3'><i class='fas fa-shopping-cart' />";
                        echo "</td>";
                        echo "</tr>";
    				</tr>
                }
                    ?>	
    				
                </tbody>    		
    			</table>
    			<!-- Nút thêm -->
    		</div>
    		 <!-- table  -->
    		<div class="col-md-2">
    			
    		</div>
    	</div>
    	 <!--  End row -->
    </div>
   <!--   End Container -->
    <?php include_once("footer.php"); ?>
</body>

</html>