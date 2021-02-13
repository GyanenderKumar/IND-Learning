<?php
$sub = "cpp";
$pag = "11";
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

	<title>C++ String Methods</title>

	<link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
	<!-- -----------------Header Module--------------- -->
	<?php

	include 'modules/_header_module.php';

	?>




	<!-- ----------C++ String Methods------------ -->
	<div class="container">
		<h1>C++ String Methods</h1>
		<div>
			<a href="/ind-learning/cpp-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/cpp-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		</div>


		<hr>
		<h3>All String Methods</h3>
		<p>The String class has a set of built-in methods that you can use on strings.</p>
		<table class="table table-striped">

			<tbody>
				<tr>
					<th>Function</th>
					<th>Description</th>
				</tr>
				<tr>
					<td>int compare(const string & amp; str)</td>
					<td>It is used to compare two string objects.</td>
				</tr>
				<tr>
					<td>int length()</td>
					<td>It is used to find the length of the string.</td>
				</tr>
				<tr>
					<td>void swap(string & amp; str)</td>
					<td>It is used to swap the values of two string objects.</td>
				</tr>
				<tr>
					<td>string substr(int pos,int n)</td>
					<td>It creates a new string object of n characters.</td>
				</tr>
				<tr>
					<td>int size()</td>
					<td>It returns the length of the string in terms of bytes.</td>
				</tr>
				<tr>
					<td>void resize(int n)</td>
					<td>It is used to resize the length of the string up to n characters.</td>
				</tr>
				<tr>
					<td>string & amp; replace(int pos,int len,string & amp; str)</td>
					<td>It replaces portion of the string that begins at character position pos and spans len characters.</td>
				</tr>
				<tr>
					<td>string & amp; append(const string & amp; str)</td>
					<td>It adds new characters at the end of another string object.</td>
				</tr>
				<tr>
					<td>char & amp; at(int pos)</td>
					<td>It is used to access an individual character at specified position pos.</td>
				</tr>
				<tr>
					<td>int find(string & amp; str,int pos,int n)</td>
					<td>It is used to find the string specified in the parameter.</td>
				</tr>
				<tr>
					<td>int find_first_of(string & amp; str,int pos,int n)</td>
					<td>It is used to find the first occurrence of the specified sequence.</td>
				</tr>
				<tr>
					<td>int find_first_not_of(string & amp; str,int pos,int n )</td>
					<td>It is used to search the string for the first character that does not match with any of the characters specified in the string.</td>
				</tr>
				<tr>
					<td>int find_last_of(string & amp; str,int pos,int n)</td>
					<td>It is used to search the string for the last character of specified sequence.</td>
				</tr>
				<tr>
					<td>int find_last_not_of(string & amp; str,int pos)</td>
					<td>It searches for the last character that does not match with the specified sequence.</td>
				</tr>
				<tr>
					<td>string & amp; insert()</td>
					<td>It inserts a new character before the character indicated by the position pos.</td>
				</tr>
				<tr>
					<td>int max_size()</td>
					<td>It finds the maximum length of the string.</td>
				</tr>
				<tr>
					<td>void push_back(char ch)</td>
					<td>It adds a new character ch at the end of the string.</td>
				</tr>
				<tr>
					<td>void pop_back()</td>
					<td>It removes a last character of the string.</td>
				</tr>
				<tr>
					<td>string & amp; assign()</td>
					<td>It assigns new value to the string.</td>
				</tr>
				<tr>
					<td>int copy(string & amp; str)</td>
					<td>It copies the contents of string into another.</td>
				</tr>
				<tr>
					<td>char & amp; back()</td>
					<td>It returns the reference of last character.</td>
				</tr>
				<tr>
					<td>Iterator begin()</td>
					<td>It returns the reference of first character.</td>
				</tr>
				<tr>
					<td>int capacity()</td>
					<td>It returns the allocated space for the string.</td>
				</tr>
				<tr>
					<td>const_iterator cbegin()</td>
					<td>It points to the first element of the string.</td>
				</tr>
				<tr>
					<td>const_iterator cend()</td>
					<td>It points to the last element of the string.</td>
				</tr>
				<tr>
					<td>void clear()</td>
					<td>It removes all the elements from the string.</td>
				</tr>
				<tr>
					<td>const_reverse_iterator crbegin()</td>
					<td>It points to the last character of the string.</td>
				</tr>
				<tr>
					<td>const_char* data()</td>
					<td>It copies the characters of string into an array.</td>
				</tr>
				<tr>
					<td>bool empty()</td>
					<td>It checks whether the string is empty or not.</td>
				</tr>
				<tr>
					<td>string & amp; erase()</td>
					<td>It removes the characters as specified.</td>
				</tr>
				<tr>
					<td>char & amp; front()</td>
					<td>It returns a reference of the first character.</td>
				</tr>
				<tr>
					<td>string & amp; &nbsp; operator+=()</td>
					<td>It appends a new character at the end of the string.</td>
				</tr>
				<tr>
					<td>string & amp; operator=()</td>
					<td>It assigns a new value to the string.</td>
				</tr>
				<tr>
					<td>char operator[](pos)</td>
					<td>It retrieves a character at specified position pos.</td>
				</tr>
				<tr>
					<td>int rfind()</td>
					<td>It searches for the last occurrence of the string.</td>
				</tr>
				<tr>
					<td>iterator end()</td>
					<td>It references the last character of the string.</td>
				</tr>
				<tr>
					<td>reverse_iterator rend()</td>
					<td>It points to the first character of the string.</td>
				</tr>
				<tr>
					<td>void shrink_to_fit()</td>
					<td>It reduces the capacity and makes it equal to the size of the string.</td>
				</tr>
				<tr>
					<td>char* c_str()</td>
					<td>It returns pointer to an array that contains null terminated sequence of characters.</td>
				</tr>
				<tr>
					<td>const_reverse_iterator crend()</td>
					<td>It references the first character of the string.</td>
				</tr>
				<tr>
					<td>reverse_iterator rbegin()</td>
					<td>It reference the last character of the string.</td>
				</tr>
				<tr>
					<td>void reserve(inr len)</td>
					<td>It requests a change in capacity.</td>
				</tr>
				<tr>
					<td>allocator_type get_allocator();</td>
					<td>It returns the allocated object associated with the string.</td>
				</tr>
			</tbody>
		</table>
		<hr>
		<div class="mb-2">
			<a href="/ind-learning/cpp-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
			<a href="/ind-learning/cpp-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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