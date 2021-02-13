<?php

$sub = "ds";
$pag = "4";

?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- ---Font Awesome CDN-- -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<title>Pointer</title>


	<link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
	<!-- -----------------Header Module--------------- -->
	<?php

	include 'modules/_header_module.php';

	?>



	<!-- ----------DS Introduction section------------ -->
	<div class="container">
		<h1>Pointer</h1>
		<div>
			<a href="/ind-learning/ds-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>


		<hr>
		<h3>Pointer In Data Structure</h3>
		<p>Pointer is used to points the address of the value stored anywhere in the computer memory. To obtain the value stored at the location is known as dereferencing the pointer. Pointer improves the performance for repetitive process such as:
			<ul>
				<li>Traversing String </li>
				<li>Lookup Tables </li>
				<li>Control Tables </li>
				<li>Tree Structures </li>
			</ul>
			<img src="images/data-structure-pointer-performance.jpg" alt="Pointer" width="600" height="400"> </p>
		<hr>

		<h3> Pointer Details </h3>
		<b>Pointer arithmetic</b>: There are four arithmetic operators that can be used in pointers: ++, --, +, - <br>
		<b>Array of pointers</b>: You can define arrays to hold a number of pointers.<br>
		<b>Pointer to pointer</b>: C allows you to have pointer on a pointer and so on. <br>
		<b>Passing pointers to functions in C</b>: Passing an argument by reference or by address enable the passed argument to be changed in the calling function by the called function.<br>
		<b>Return pointer from functions in C</b>: C allows a function to return a pointer to the local variable, static variable and dynamically allocated memory as well. <br>

		</p>

		<img src="images/pointer.png" alt="Pointers" width="600" height="400"> </p>

		<h3>Program</h3>

		<pre class="jumbotron">
            #include <stdio.h>  
            int main( )  
          {  
        int a = 5;  
         int *b;  
         b = &a;  
  
        printf ("value of a = %d\n", a);  
        printf ("value of a = %d\n", *(&a));  
        printf ("value of a = %d\n", *b);  
        printf ("address of a = %u\n", &a);  
        printf ("address of a = %d\n", b);  
        printf ("address of b = %u\n", &b);  
        printf ("value of b = address of a = %u", b);  
        return 0;  
        }  
        </pre>

		<h3>Output</h3>

		<pre class="jumbotron">
        value of a = 5                                                                                                                   
        value of a = 5                                                                                                                   
        address of a = 3010494292                                                                                                        
        address of a = -1284473004                                                                                                       
        address of b = 3010494296                                                                                                        
        value of b = address of a = 3010494292
        </pre>

		<hr>
		<div class="mb-2">
			<a href="/ind-learning/ds-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>

		<hr>
		<div class="mb-2">
			<?php

			include 'modules/_query_module.php';

			?>
		</div>

	</div>




	<!-- ------Footer Module----- -->
	<?php

	include 'modules/_footer_module.php';

	?>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>