<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="./public/logo1.jpg">
    <link rel="stylesheet" href="./public/style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" id="header">
    <img id="logo" src="./public/logo1.jpg">
    <a href="?controller=login&action=logout" class="btn btn-info">
		<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
			<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
		</svg>
	</a>
  </div>
</nav>
<div id="sidebar-collapse" class="box1 col-md-6 col-lg-2">
    <div class="list-group" >
        <a href="?controller=user" class="list-group-item list-group-item-action" style="color:black">Dashboard</a>
        <a href="?controller=user&redirect=admin" class="list-group-item list-group-item-action"style="color:black">Admin Management</a>
        <a href="?controller=user&redirect=customer" class="list-group-item list-group-item-action" style="color:black">Customer Management</a>
        <a href="?controller=user&redirect=category" class="list-group-item list-group-item-action" style="color:black">Category Management</a>
        <a href="?controller=user&redirect=product" class="list-group-item list-group-item-action"  style="color:black">Product Management</a>
        <a href="?controller=user&redirect=order" class="list-group-item list-group-item-action" id="maincolor">Order Management</a>
        <a href="?controller=user&redirect=revenue_statistics" class="list-group-item list-group-item-action" style="color:black">Revenue Statistics</a>
    </div>
</div>
<div class="box1 col-md-6 col-lg-10 col-lg-offset-2 main">
    <div class="row" >
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                    </svg>
                </li>
                <li class="breadcrumb-item"><a href="?controller=user">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Order management</li>
            </ol>
            </nav>
    </div>
</div>
<div class="row">
        <div class="container">
            <h1 style="text-align:center">HÓA ĐƠN THANH TOÁN </h1> 
            
                <table class="table">
                    <thead style="background-color:rgb(240, 222, 103)">
                        <tr>
                        <th scope="row">Order</th>   
                        <th scope="col">Customer id</th>
                        <th scope="col">Admin id</th>
                        <th scope="col">Create date</th>
                        <th scope="col">Total price order</th>
                        <th scope="col">Receiver first name</th>
                        <th scope="col">Receiver last name</th>
                        <th scope="col">Receiver address</th>
                        <th scope="col">Receiver phone</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    <?php
                    $stt = 1;
                    foreach($record as $item){
                    ?>
                    <tr>
                        <th scope="row"><?= $stt?></th>
                        <td><?= $item['cus_id']?></td>
                        <td><?= $item['adm_id']?></td>
                        <td><?= $item['create_date']?></td>
                        <td><?= $item['total_price_order']?></td>
                        <td><?= $item['receiver_first_name']?></td>
                        <td><?= $item['receiver_last_name']?></td>
                        <td><?= $item['receiver_address']?></td>
                        <td><?= $item['receiver_phone']?></td>
                        <td><?= $item['status']?></td>
                        
                    </tr>
                    
                    <?php
                    $stt++;}
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>
</html>