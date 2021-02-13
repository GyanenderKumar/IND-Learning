<?php

$sub = "ds";
$pag = "6";

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

    <title>Array</title>


    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------DS Introduction section------------ -->
    <div class="container">
        <h1>Structure</h1>
        <div>
            <a href="/ind-learning/ds-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>
            <h4>Definition </h4>
            <ul>
                <li>Arrays are defined as the collection of similar type of data items stored at contiguous memory locations. <br>
                <li>Arrays are the derived data type in C programming language which can store the primitive type of data such as int, char, double, float, etc. <br>
                <li>Array is the simplest data structure where each data element can be randomly accessed by using its index number.</li> <br>
            </ul>
            For example, if we want to store the marks of a student in 6 subjects, then we don't need to define different variable for the marks in different subject. instead of that, we can define an array which can store the marks in each subject at a the contiguous memory locations.
            The array marks[10] defines the marks of the student in 10 different subjects where each subject marks are located at a particular subscript in the array i.e. marks[0] denotes the marks in first subject, marks[1] denotes the marks in 2nd subject and so on.
            <hr>

            <h3>Properties of the Array</h3>
            <ul>
                <li>Each element is of same data type and carries a same size i.e. int = 4 bytes.</li>
                <li>Elements of the array are stored at contiguous memory locations where the first element is stored at the smallest memory location.</li>
                <li>Elements of the array can be randomly accessed since we can calculate the address of each element of the array with the given base address and the size of data element. </li>
            </ul>
            <br>
            for example, in C language, the syntax of declaring an array is like following:
            <pre class="jumbotron">
                int arr[10];
                char arr[10];
                float arr[5];</pre>

            <h3>Need of using Array</h3>
            <p>In computer programming, the most of the cases requires to store the large number of data of similar type. To store such amount of data, we need to define a large number of variables.<br>
                It would be very difficult to remember names of all the variables while writing the programs. <br>
                Instead of naming all the variables with a different name, it is better to define an array and store all the elements into it.<br>
                Following example illustrates, how array can be useful in writing code for a particular problem.<br>
                In the following example, we have marks of a student in six different subjects. The problem intends to calculate the average of all the marks of the student.<br>
                In order to illustrate the importance of array, we have created two programs, one is without using array and other involves the use of array to store marks. </p>

            <hr>
            <h4>Program without array:</h4>
            <pre class="jumbotron">
                #include <stdio.h>  
                void main ()  
                {  
                    int marks_1 = 56, marks_2 = 78, marks_3 = 88, marks_4 = 76, marks_5 = 56, marks_6 = 89;   
                    float avg = (marks_1 + marks_2 + marks_3 + marks_4 + marks_5 +marks_6) / 6 ;   
                    printf(avg);   
                }  
                </pre>

            <h4>Program with array</h4>

            <pre class="jumbotron">
                #include <stdio.h>  
                void main ()  
                {  
                    int marks[6] = {56,78,88,76,56,89);  
                    int i;    
                    float avg;  
                    for (i=0; i&lt;6; i++ )   
                    {  
                        avg = avg + marks[i];   
                    }    
                    printf(avg);   
                }   </pre>

            <h3>Memory Allocation of the array</h3>
            <p> As we have mentioned, all the data elements of an array are stored at contiguous locations in the main memory. The name of the array represents the base address or the address of first element in the main memory. Each element of the array is represented by a proper indexing.
                The indexing of the array can be defined in three ways.
                <hr>

                0 (zero - based indexing) : The first element of the array will be arr[0].<br>
                1 (one - based indexing) : The first element of the array will be arr[1].<br>
                n (n - based indexing) : The first element of the array can reside at any random index number.<br>
                In the following image, we have shown the memory allocation of an array arr of size 5. The array follows 0-based indexing approach. The base address of the array is 100th byte. This will be the address of arr[0]. Here, the size of int is 4 bytes therefore each element will take 4 bytes in the memory. </p>



            <img src="images/base address.png" alt="Array base address" width="500" height="400">

            <h3>Accessing Elements of an array</h3>
            <hr>
            To access any random element of an array we need the following information:
            <hr>

            Base Address of the array. <br>
            Size of an element in bytes. <br>
            Which type of indexing, array follows. <br>
            Address of any element of a 1D array can be calculated by using the following <br>
            <hr>

            Byte address of element A[i] = base address + size * ( i - first index) <br>
            Example :break
            <hr>

            In an array, A[-10 ..... +2 ], Base address (BA) = 999, size of an element = 2 bytes,
            find the location of A[-1]. <br>
            L(A[-1]) = 999 + [(-1) - (-10)] x 2 <br>
            = 999 + 18 <br>
            = 1017 <br>
            Passing array to the function :break
            As we have mentioned earlier that, the name of the array represents the starting address or the address of the first element of the array. All the elements of the array can be traversed by using the base address.
            The following example illustrate, how the array can be passed to a function.<br>

            Example:<br>
            <hr>

            <pre class="jumbotron">
                #include <stdio.h>  
                int summation(int[]);  
                void main ()  
                {  
                    int arr[5] = {0,1,2,3,4};  
                    int sum = summation(arr);   
                    printf("%d",sum);   
                }   
                
                int summation (int arr[])   
                {  
                    int sum=0,i;   
                    for (i = 0; i&lt;5; i++)   
                    {  
                        sum = sum + arr[i];   
                    }   
                    return sum;   
                }  </pre>

            The above program defines a function named as summation which accepts an array as an argument. The function calculates the sum of all the elements of the array and returns it.




            <hr>
            <div class="mb-2">
                <a href="/ind-learning/ds-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="/ind-learning/ds-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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