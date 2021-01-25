<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Todo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="page-content page-container " >
    <div class="d-flex justify-content-center">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card px-3">
                    <div class="card-body">
                        <h4 class="card-title"> DON NOT do it.</h4>
												<form method="GET" >
                        <div class="add-items d-flex"> 
												<input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?" name="text"> 
												<button type="submit" class="add btn btn-primary font-weight-bold todo-list-add-btn">Add</button> 
												</div>
												</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<?php

	session_start();

		if(!isset($_SESSION['list'])) {
			$_SESSION['list'] = array();
		}

		if($_SERVER['REQUEST_METHOD'] == "GET"){
			$name = $_GET['text'];
			if(empty($name))
			{
				echo '<div  class="text-warning mt-2"> Write something to add </div>';
			}
			else
			{
				array_push($_SESSION['list'], $name);
			}
		}
		if(isset($_SESSION['list']))
		{
			foreach ($_SESSION['list'] as $todoItem) {
				echo
				"<ul style='margin-left: 10rem;' class='text-primary mt-4' >".
				"<li>".
				$todoItem .
				"</li>".
				 "</ul>";
			}
		}		
	?>

</body>
</html>