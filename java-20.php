<?php

    $sub="java";
    $pag="20";

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

    <title>Java Arrays</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Arrays------------ -->
    <div class="container">
        <h1>Java Arrays</h1>
        <div>
            <a href="java-19.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-21.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Arrays</h3>
        <p>
            Arrays are used to store multiple values in a single variable, instead of declaring
            separate variables for each value.
            <br>
            To declare an array, define the variable type with <b>square brackets:</b>
        </p>
        <pre class="jumbotron">
            String[] cars;</pre>
        <p>
            We have now declared a variable that holds an array of strings. To insert values to it,
            we can use an array literal - place the values in a comma-separated list, inside curly
            braces:
        </p>
        <pre class="jumbotron">
            String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};</pre>
        <p>To create an array of integers, you could write:</p>
        <pre class="jumbotron">
            int[] myNum = {10, 20, 30, 40};</pre>

        <hr>
        <h3>Access the Elements of an Array</h3>
        <p>
            You access an array element by referring to the index number.
            <br>
            This statement accesses the value of the first element in cars:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
            System.out.println(cars[0]);
            // Outputs Volvo</pre>
        <p>
            <b>Note:</b> Array indexes start with 0: [0] is the first element. [1] is the second element,
            etc.
        </p>

        <hr>
        <h3>Change an Array Element</h3>
        <p>
            To change the value of a specific element, refer to the index number:
        </p>
        <pre class="jumbotron">
            cars[0] = "Opel";</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
            String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
            cars[0] = "Opel";
            System.out.println(cars[0]);
            // Now outputs Opel instead of Volvo</pre>

        <hr>
        <h3>Array Length</h3>
        <p>
            To find out how many elements an array has, use the <spam class="text-danger">length</spam> property:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
            System.out.println(cars.length);
            // Outputs 4</pre>

        <hr>
        <h3>Loop Through an Array</h3>
        <p>
            You can loop through the array elements with the <spam class="text-danger">for</spam> loop, and use the <spam class="text-danger">length</spam>
            property to specify how many times the loop should run.
            <br>
            The following example outputs all elements in the cars array:
        </p>
        <pre class="jumbotron">
            String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
            for (int i = 0; i < cars.length; i++) {
                System.out.println(cars[i]);
            }</pre>

        <hr>
        <h3>Loop Through an Array with For-Each</h3>
        <p>
            There is also a <b>for-each</b> loop, which is used exclusively to loop through elements in
            arrays:
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            for (type variable : arrayname) {
                ...
            }</pre>

        <p>
            The following example outputs all elements in the cars array, using a "for-each"
            loop:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
        String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
        for (String i : cars) {
            System.out.println(i);
        }</pre>
        <p>
            The example above can be read like this: for each <spam class="text-danger">String</spam> element (called i - as in
            index) in cars, print out the value of i.
            <br>
            If you compare the for loop and for-each loop, you will see that the for-each
            method is easier to write, it does not require a counter (using the length property),
            and it is more readable.
        </p>

        <hr>
        <h3>Multidimensional Arrays</h3>
        <p>
            A multidimensional array is an array containing one or more arrays.
            <br>
            To create a two-dimensional array, add each array within its own set of curly braces:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };</pre>
        <p>
            <b>myNumbers</b> is now an array with two arrays as its elements.
            <br>
            To access the elements of the <b>myNumbers</b> array, specify two indexes: one for the
            array, and one for the element inside that array. This example accesses the third
            element (2) in the second array (1) of <b>myNumbers</b>:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };
            int x = myNumbers[1][2];
            System.out.println(x); // Outputs 7</pre>
        <p>
            We can also use a <spam class="text-danger">for loop</spam> inside another <spam class="text-danger">for loop</spam> to get the elements of a twodimensional array (we still have to point to the two indexes):
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };
                    for (int i = 0; i < myNumbers.length; ++i) {
                        for(int j = 0; j < myNumbers[i].length; ++j) {
                            System.out.println(myNumbers[i][j]);
                        }
                    }
                }
            }</pre>
        


        <hr>
        <div class="mb-2">
            <a href="java-19.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-21.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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