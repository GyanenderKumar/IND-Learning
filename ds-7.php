<?php

$sub = "ds";
$pag = "7";

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

    <title>2D Array</title>


    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------DS Introduction section------------ -->
    <div class="container">
        <h1>2D Array</h1>
        <div>
            <a href="/ind-learning/ds-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>2D Array</h3>
        <p>2D array can be defined as an array of arrays. The 2D array is organized as matrices which can be represented as the collection of rows and columns. <br>
            However, 2D arrays are created to implement a relational database look alike data structure. It provides ease of holding bulk of data at once which can be passed to any number of functions wherever required. <br></p>

        <h3> How to declare 2D Array </h3>
        The syntax of declaring two dimensional array is very much similar to that of a one dimensional array, given as follows.
        <pre class="jumbotron">
        int arr[max_rows][max_columns];   </pre>


        <img src="images/2d array.png" alt="2d array" width="500" height="400"> </p>

        <h3> How do we access data in a 2D array </h3>
        <p>Due to the fact that the elements of 2D arrays can be random accessed. Similar to one dimensional arrays, we can access the individual cells in a 2D array by using the indices of the cells. There are two indices attached to a particular cell, one is its row number while the other is its column number.
            However, we can store the value stored in any particular cell of a 2D array to some variable x by using the following syntax. </p>

        <pre class="jumbotron">
            int x = a[i][j];   
            where i and j is the row and column number of the cell respectively.

            We can assign each cell of a 2D array to 0 by using the following code:

            for ( int i=0; i&lt;n ;i++)  
            {  
                for (int j=0; j&lt;n; j++)   
                {  
                    a[i][j] = 0;   
                }  
            } </pre>


        <h3>Initializing 2D Arrays</h3>
        <p>
            We know that, when we declare and initialize one dimensional array in C programming simultaneously, we don't need to specify the size of the array. However this will not work with 2D arrays. We will have to define at least the second dimension of the array. <br>
            The syntax to declare and initialize the 2D array is given as follows. </p>

        <pre class="jumbotron">
            int arr[2][2] = {0,1,2,3};   </pre>
        The number of elements that can be present in a 2D array will always be equal to (number of rows * number of columns).

        Example : Storing User's data into a 2D array and printing it.
        <hr>

        <h5>C Example : </h5>
        <br>

        <pre class="jumbotron">
            #include <stdio.h>  
            void main ()  
            {  
                int arr[3][3],i,j;   
                for (i=0;i&lt;3;i++)  
                {  
                    for (j=0;&lt;3;j++)  
                    {  
                        printf("Enter a[%d][%d]: ",i,j);              
                        scanf("%d",&arr[i][j]);  
                    }  
                }  
                printf("\n printing the elements ....\n");   
                for(i=0;&lt;3;i++)  
                {  
                    printf("\n");  
                    for (j=0;&lt;3;j++)  
                    {  
                        printf("%d\t",arr[i][j]);  
                    }  
                }  
            } </pre>



        <h5>Java Example </h5>

        <pre class="jumbotron">

            import java.util.Scanner;  
            publicclass TwoDArray {  
            publicstaticvoid main(String[] args) {  
                int[][] arr = newint[3][3];  
                Scanner sc = new Scanner(System.in);  
                for (inti =0;i&lt;3;i++)  
                {  
                    for(intj=0;j&lt;3;j++)  
                    {  
                        System.out.print("Enter Element");  
                        arr[i][j]=sc.nextInt();  
                        System.out.println();  
                    }  
                }  
                System.out.println("Printing Elements...");  
                for(inti=0;i&lt;3;i++)  
                {   
                    System.out.println();  
                    for(intj=0;j&lt;3;j++)  
                    {  
                        System.out.print(arr[i][j]+"\t");  
                    }  
                }  
            }  
            } </pre>
            
        however, It produces the data structure which looks like following.


        <h3> Mapping 2D array to 1D array</h3> <br>
        <p>When it comes to map a 2 dimensional array, most of us might think that why this mapping is required. However, 2 D arrays exists from the user point of view. 2D arrays are created to implement a relational database table lookalike data structure, in computer memory, the storage technique for 2D array is similar to that of an one dimensional array.
            The size of a two dimensional array is equal to the multiplication of number of rows and the number of columns present in the array. We do need to map two dimensional array to the one dimensional array in order to store them in the memory.
            A 3 X 3 two dimensional array is shown in the following image. However, this array needs to be mapped to a one dimensional array in order to store it into the memory.</p>

        <img src="images/s-2d-array2.png" alt="s-2d-array2" width="500" height="400"> </p>
        <h3>Row Major ordering </h3>
        <p>In row major ordering, all the rows of the 2D array are stored into the memory contiguously. Considering the array shown in the above image, its memory allocation according to row major order is shown as follows. <br>
            first, the 1st row of the array is stored into the memory completely, then the 2nd row of the array is stored into the memory completely and so on till the last row. </p>



        <img src="images/ds-2d-array-row-major-ordering2.png" alt="2d arrays" width="500" height="400"> </p>

        <h3>Column Major ordering</h3>
        <p>According to the column major ordering, all the columns of the 2D array are stored into the memory contiguously. The memory allocation of the array which is shown in in the above image is given as follows.
            first, the 1st column of the array is stored into the memory completely, then the 2nd row of the array is stored into the memory completely and so on till the last column of the array. </p>

        <img src="images/ds-2d-array-column-major-ordering2.png" alt="2d arrays ordereing" width="500" height="400"> </p>

        <hr>
        <div class="mb-2">
            <a href="/ind-learning/ds-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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