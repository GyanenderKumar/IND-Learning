<?php

$sub = "ds";
$pag = "1";

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

	<title>Introduction to Data Structure</title>


	<link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
	<!-- -----------------Header Module--------------- -->
	<?php

	include 'modules/_header_module.php';

	?>



	<!-- ----------DS Introduction section------------ -->
	<div class="container">
		<h1>Introduction to Data Structure</h1>
		<div>
			<a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>


		<hr>
		<h3> What is Data Structure ? </h3>
		<p>
			The data structure name indicates itself that organizing the data in memory. <br>
			There are many ways of organizing the data in the memory as we have already seen one of the data structures, i.e., array in C language. <br>
			Array is a collection of memory elements in which data is stored sequentially, i.e., one after another.<br>
			In other words, we can say that array stores the elements in a continuous manner. <br>
			This organization of data is done with the help of an array of data structures. <br>
			There are also other ways to organize the data in memory. Let's see the different types of data structures. <br>
			The data structure is not any programming language like C, C++, java, etc. It is a set of algorithms that we can use in any programming language to structure the data in the memory.<br>
			To structure the data in memory, 'n' number of algorithms were proposed, and all these algorithms are known as Abstract data types. These abstract data types are the set of rules.
		</p>

		<hr>
		<h3>Types of Data Structures</h3>
		<p>
			There are two types of data structures:
			<ul>
				<li style="font-weight: bold;">Primitive data structure</li>
				<li style="font-weight: bold;">Non-primitive data structure</li>
				<li style="font-weight: bold;">Primitive Data structure</li>
			</ul>
		</p>


		The primitive data structures are primitive data types. The int, char, float, double, and pointer are the primitive data structures that can hold a single value.<br>


		<hr>
		<h3>Non-Primitive Data structure</h3>
		<p>
			The non-primitive data structure is divided into two types:
			<ul>
				<li style="font-weight: bold;">Linear data structure</li>
				<li style="font-weight: bold;">Non-linear data structure</li>
			</ul>
		</p>

		<hr>
		<h3>Linear Data Structure </h3>
		<p>
			The arrangement of data in a sequential manner is known as a linear data structure.<br>
			The data structures used for this purpose are Arrays, Linked list, Stacks, and Queues.<br>
			In these data structures, one element is connected to only one another element in a linear form. <br>
			When one element is connected to the 'n' number of elements known as a non-linear data structure. <br>
			The best example is trees and graphs. In this case, the elements are arranged in a random manner.
		</p>



		<p>
			Data structures can also be classified as:
			<ul>
				<li><b>Static data structure:</b> It is a type of data structure where the size is allocated at the compile time. Therefore, the maximum size is fixed. </li>
				<li><b>Dynamic data structure:</b> It is a type of data structure where the size is allocated at the run time. Therefore, the maximum size is flexible. </li>
			</ul>
		</p>

		<hr>
		<h3>Major Operations </h3>
		<p>
			The major or the common operations that can be performed on the data structures are:<br>
			<b>Searching:</b> We can search for any element in a data structure.<br>
			<b>Sorting:</b> We can sort the elements of a data structure either in an ascending or descending order. <br>
			<b>Insertion:</b> We can also insert the new element in a data structure.<br>
			<b>Updation:</b> We can also update the element, i.e., we can replace the element with another element. <br>
			<b>Deletion:</b> We can also perform the delete operation to remove the element from the data structure.
		</p>



		<hr>
		<h3>Which Data Structure? </h3>
		<p>
			A data structure is a way of organizing the data so that it can be used efficiently. <br>
			Here, we have used the word efficiently, which in terms of both the space and time. <br>
			For example, a stack is an ADT (Abstract data type) which uses either arrays or linked list data structure for the implementation. <br>
			Therefore, we conclude that we require some data structure to implement a particular ADT. <br>
			An ADT tells what is to be done and data structure tells how it is to be done. <br>
			In other words, we can say that ADT gives us the blueprint while data structure provides the implementation part. <br>
			Now the question arises: how can one get to know which data structure to be used for a particular ADT?. <br>
			As the different data structures can be implemented in a particular ADT, but the different implementations are compared for time and space. <br>
			For example, the Stack ADT can be implemented by both Arrays and linked list. <br>
			Suppose the array is providing time efficiency while the linked list is providing space efficiency, so the one which is the best suited for the current user's requirements will be selected.<br>
		</p>

		<hr>
		<h3>Advantages of Data structures</h3>
		<p>
			The following are the advantages of a data structure:
			<ul>
				<li><b>Efficiency:</b> If the choice of a data structure for implementing a particular ADT is proper, it makes the program very efficient in terms of time and space.</li>
				<li><b>Reusability:</b> he data structures provide reusability means that multiple client programs can use the data structure.</li>
				<li><b>Abstraction:</b> The data structure specified by an ADT also provides the level of abstraction.<br>
					The client cannot see the internal working of the data structure, so it does not have to worry about the implementation part. <br>
					The client can only see the interface.
				</li>
			</ul>

		</p>


		<hr>
		<div class="mb-2">
			<a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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