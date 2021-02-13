<?php

$sub = "ds";
$pag = "2";

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
			<a href="/ind-learning/ds-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>


		<hr>
		<h3> Introduction </h3>
		<p>
			<p>
				<p>Data Structure can be defined as the group of data elements which provides an efficient way of storing and organising data in the computer so that it can be used efficiently.<br>
					Some examples of Data Structures are arrays, Linked List, Stack, Queue, etc. Data Structures are widely used in almost every aspect of Computer Science i.e. Operating System, Compiler Design, Artifical intelligence, Graphics and many more.</p>
			</p>
			<p>Data Structure can be defined as the group of data elements which provides an efficient way of storing and organising data in the computer so that it can be used efficiently. Some examples of Data Structures are arrays, Linked List, Stack, Queue, etc.<br>
				Data Structures are widely used in almost every aspect of Computer Science i.e. Operating System, Compiler Design, Artifical intelligence, Graphics and many more.</p>

			<hr>
			<h3>Basic Terminology</h3>
			<p>
				<p> Data structures are the building blocks of any program or the software. Choosing the appropriate data structure for a program is the most difficult task for a programmer. Following terminology is used as far as data structures are concerned</p>
			</p>

			<h3> Intro </h3>
			<b> Group Items</b>: Data items which have subordinate data items are called Group item, for example, name of a student can have first name and the last name. <br>

			<b> Record</b>: Record can be defined as the collection of various data items, for example, if we talk about the student entity, then its name, address, course and marks can be grouped together to form the record for the student. <br>

			<b> File</b>: A File is a collection of various records of one type of entity, for example, if there are 60 employees in the class, then there will be 20 records in the related file where each record contains the data about each employee. <br>

			<b> Attribute and Entity</b>: An entity represents the class of certain objects. it contains various attributes. Each attribute represents the particular property of that entity. <br>

			<b>Field</b>: Field is a single elementary unit of information representing the attribute of an entity.


			<hr>
			<h3>Need for data structure </h3>
			<p> As applications are getting complexed and amount of data is increasing day by day, there may arrise the following problems:

				<b>Processor speed</b>: To handle very large amout of data, high speed processing is required, but as the data is growing day by day to the billions of files per entity, processor may fail to deal with that much amount of data. <br>

				<b> Data Search</b>: Consider an inventory size of 106 items in a store, If our application needs to search for a particular item, it needs to traverse 106 items every time, results in slowing down the search process. <br>

				<b> Multiple requests</b>: If thousands of users are searching the data simultaneously on a web server, then there are the chances that a very large server can be failed during that process <br>
				in order to solve the above problems, data structures are used. Data is organized to form a data structure in such a way that all items are not required to be searched and required data can be searched instantly.

			</p>

			<h3>Advantages of Data Structures</h3>
			<p><b>Efficiency</b>: Efficiency of a program depends upon the choice of data structures. For example: suppose, we have some data and we need to perform the search for a perticular record. In that case, if we organize our data in an array, we will have to search sequentially element by element. hence, using array may not be very efficient here. There are better data structures which can make the search process efficient like ordered array, binary search tree or hash tables.
				<hr>

				<b>Reusability</b>: Data structures are reusable, i.e. once we have implemented a particular data structure, we can use it at any other place. Implementation of data structures can be compiled into libraries which can be used by different clients.
				<hr>

				<b>Abstraction</b>: Data structure is specified by the ADT which provides a level of abstraction. The client program uses the data structure through interface only, without getting into the implementation details.</p>
			<hr>

			<h3>Data Structure Classification</h3>
			<img src="/ind-learning/images/ds-introduction.png" alt="Ds introduction" width="800" height="500">
		</p>

		Linear Data Structures: A data structure is called linear if all of its elements are arranged in the linear order. In linear data structures, the elements are stored in non-hierarchical way where each element has the successors and predecessors except the first and last element.

		<h3>Types of Linear Data Structures are given below: </h3> <br>

		<b>Arrays</b>: An array is a collection of similar type of data items and each data item is called an element of the array. The data type of the element may be any valid data type like char, int, float or double.
		The elements of array share the same variable name but each one carries a different index number known as subscript. The array can be one dimensional, two dimensional or multidimensional.

		The individual elements of the array age are: <br>

		age[0], age[1], age[2], age[3],......... age[98], age[99]. <br>

		<b>Linked List</b>: Linked list is a linear data structure which is used to maintain a list in the memory. It can be seen as the collection of nodes stored at non-contiguous memory locations. Each node of the list contains a pointer to its adjacent node. <br>

		<b>Stack</b>: Stack is a linear list in which insertion and deletions are allowed only at one end, called top.
		A stack is an abstract data type (ADT), can be implemented in most of the programming languages. It is named as stack because it behaves like a real-world stack, for example: - piles of plates or deck of cards etc. <br>

		<b>Queue</b>: Queue is a linear list in which elements can be inserted only at one end called rear and deleted only at the other end called front.
		It is an abstract data structure, similar to stack. Queue is opened at both end therefore it follows First-In-First-Out (FIFO) methodology for storing the data items. <br>

		<b>Non Linear Data Structures</b>: This data structure does not form a sequence i.e. each item or element is connected with two or more other items in a non-linear arrangement. The data elements are not arranged in sequential structure.
		<hr>

		<h3>Types of Non Linear Data Structures are given below: </h3>

		<b>Trees</b>: Trees are multilevel data structures with a hierarchical relationship among its elements known as nodes. The bottommost nodes in the herierchy are called leaf node while the topmost node is called root node. Each node contains pointers to point adjacent nodes.

		Tree data structure is based on the parent-child relationship among the nodes. Each node in the tree can have more than one children except the leaf nodes whereas each node can have atmost one parent except the root node. Trees can be classfied into many categories which will be discussed later in this tutorial. <br>

		<b>Graphs</b>: Graphs can be defined as the pictorial representation of the set of elements (represented by vertices) connected by the links known as edges. A graph is different from tree in the sense that a graph can have cycle while the tree can not have the one. <br>
		<hr>

		<h3>Operations on data structure </h3>

		<b>1) Traversing</b>: Every data structure contains the set of data elements. Traversing the data structure means visiting each element of the data structure in order to perform some specific operation like searching or sorting.
		Example: If we need to calculate the average of the marks obtained by a student in 6 different subject, we need to traverse the complete array of marks and calculate the total sum, then we will devide that sum by the number of subjects i.e. 6, in order to find the average. <br>

		<b>2) Insertion</b>: Insertion can be defined as the process of adding the elements to the data structure at any location. <br>
		If the size of data structure is n then we can only insert n-1 data elements into it. <br>

		<b>3) Deletion</b>:The process of removing an element from the data structure is called Deletion. We can delete an element from the data structure at any random location.
		If we try to delete an element from an empty data structure then underflow occurs. <br>

		<b>4) Searching</b>: The process of finding the location of an element within the data structure is called Searching. There are two algorithms to perform searching, Linear Search and Binary Search. <br>

		<b>5) Sorting</b>: The process of arranging the data structure in a specific order is known as Sorting. There are many algorithms that can be used to perform sorting, for example, insertion sort, selection sort, bubble sort, etc. <br>

		<b>6) Merging</b>: When two lists List A and List B of size M and N respectively, of similar type of elements, clubbed or joined to produce the third list, List C of size (M+N), then this process is called merging. <br>





		<hr>
		<div class="mb-2">
			<a href="/ind-learning/ds-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/ds-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

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