<?php

$sub = "ds";
$pag = "8";

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

	<title>Linked List</title>


	<link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
	<!-- -----------------Header Module--------------- -->
	<?php

	include 'modules/_header_module.php';

	?>



	<!-- ----------DS Introduction section------------ -->
	<div class="container">
		<h1>Linked List</h1>
		<div>
			<a href="/ind-learning/ds-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>
		<hr>
		If we want to store the value in a memory, we need a memory manager that manages the memory for every variable. For example, if we want to create a variable of integer type like: <br>
		<hr>
		int x; <br>
		In the above example, we have created a variable 'x' of type integer. As we know that integer variable occupies 4 bytes, so 'x' variable will occupy 4 bytes to store the value . <br>
		In the above example, we have declared an array of size 3. As we know, that all the values of an array are stored in a continuous manner, so all the three values of an array are stored in a sequential fashion. The total memory space occupied by the array would be 3*4 = 12 bytes.
		<hr>

		<h4> There are two major drawbacks of using array: </h4>

		<p> We cannot insert more than 3 elements in the above example because only 3 spaces are allocated for 3 elements. <br>
			In the case of an array, lots of wastage of memory can occur. For example, if we declare an array of 50 size but we insert only 10 elements in an array. So, in this case, the memory space for other 40 elements will get wasted and cannot be used by another variable as this whole space is occupied by an array. <br>
			In array, we are providing the fixed-size at the compile-time, due to which wastage of memory occurs. The solution to this problem is to use the linked list. <br> </p>

		<h3>What is Linked List? </h3>
		A linked list is also a collection of elements, but the elements are not stored in a consecutive location. <br>
		Suppose a programmer made a request for storing the integer value then size of 4-byte memory block is assigned to the integer value. <br>
		The programmer made another request for storing 3 more integer elements; then, three different memory blocks are assigned to these three elements but the memory blocks are available in a random location. So, how are the elements connected?. <br>
		These elements are linked to each other by providing one additional information along with an element, i.e., the address of the next element. The variable that stores the address of the next element is known as a pointer. <br>
		Therefore, we conclude that the linked list contains two parts, i.e., the first one is the data element, and the other is the pointer. The pointer variable will occupy 4 bytes which is pointing to the next element. <br>
		A linked list can also be defined as the collection of the nodes in which one node is connected to another node, and node consists of two parts, i.e., one is the data part and the second one is the address part, as shown in the below figure: <br>
		<hr>
		<img src="images/ds-linked-list.png" alt="Linked list" width="600" height="400"> </p>

		<h3>How can we declare the Linked list? </h3>
		The declaration of an array is very simple as it is of single type. But the linked list contains two parts, which are of two different types, i.e., one is a simple variable, and the second one is a pointer variable. We can declare the linked list by using the user-defined data type known as structure.<br>
		The structure of a linked list can be defined as:
		<hr>

		<pre class="jumbotron">
			struct node  
			{  
			int data;  
			struct node *next;  
			}  </pre>

		<br>
		In the above declaration, we have defined a structure named as a node consisting of two variables: an integer variable (data), and the other one is the pointer (next), which contains the address of the next node.

		<h3>Advantages of using a Linked list over Array </h3>
		<hr>
		The following are the advantages of using a linked list over an array: <br>
		<ul>
			<li>Dynamic data structure:</li>
			The size of the linked list is not fixed as it can vary according to our requirements. <br>

			<li>Insertion and Deletion:</li>
			Insertion and deletion in linked list are easier than array as the elements in an array are stored in a consecutive location. In contrast, in the case of a linked list, the elements are stored in a random location. The complexity for insertion and deletion of elements from the beginning is O(1) in the linked list, while in the case of an array, the complexity would be O(n). If we want to insert or delete the element in an array, then we need to shift the elements for creating the space. On the other hand, in the linked list, we do not have to shift the elements. In the linked list, we just need to update the address of the pointer in the node. </br>

			<li>Memory efficient</li>
			Its memory consumption is efficient as the size of the linked list can grow or shrink according to our requirements. <br>

			<li>Implementation</li>
			Both the stacks and queues can be implemented using a linked list. <br>
		</ul>

		<h3>Disadvantages of Linked list </h3> <br>
		<hr>
		The following are the disadvantages of linked list: <br>
		<ul>

			<li>Memory usage</li>
			The node in a linked list occupies more memory than array as each node occupies two types of variables, i.e., one is a simple variable, and another is a pointer variable that occupies 4 bytes in the memory. <br>

			<li>Traversal</li>
			In a linked list, the traversal is not easy. If we want to access the element in a linked list, we cannot access the element randomly, but in the case of an array, we can randomly access the element by index. For example, if we want to access the 3rd node, then we need to traverse all the nodes before it. So, the time required to access a particular node is large. <br>

			<li>Reverse traversing</li>
			In a linked list, backtracking or reverse traversing is difficult. In a doubly linked list, it is easier but requires more memory to store the back pointer. <br>
			<hr>

			<h3>Applications of Linked List</h3>
			The applications of the linked list are given below: <br>
			<ul>
				<li>With the help of a linked list, the polynomials can be represented as well as we can perform the operations on the polynomial. We know that polynomial is a collection of terms in which each term contains coefficient and power. The coefficients and power of each term are stored as node and link pointer points to the next element in a linked list, so linked list can be used to create, delete and display the polynomial. </li> <br>
				<li>A sparse matrix is used in scientific computation and numerical analysis. So, a linked list is used to represent the sparse matrix. </li> <br>
				<li>The various operations like student's details, employee's details or product details can be implemented using the linked list as the linked list uses the structure data type that can hold different data types.</li> <br>
				<li>Stack, Queue, tree and various other data structures can be implemented using a linked list.</li> <br>
				<li>The graph is a collection of edges and vertices, and the graph can be represented as an adjacency matrix and adjacency list. If we want to represent the graph as an adjacency matrix, then it can be implemented as an array. If we want to represent the graph as an adjacency list, then it can be implemented as a linked list. </li> <br>
			</ul>



			<hr>
			<div class="mb-2">
				<a href="/ind-learning/ds-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
				<a href="/ind-learning/ds-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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