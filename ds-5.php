<?php

$sub = "ds";
$pag = "5";

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

    <title>Structure</title>


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
            <a href="/ind-learning/ds-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>A structure is a composite data type that defines a grouped list of variables that are to be placed under one name in a block of memory. It allows different variables to be accessed by using a single pointer to the structure.</p>
        Syntax: <br>

        <pre class="jumbotron">
        struct structure_name   
        {  
         data_type member1;  
         data_type member2;  
             .  
             .  
          data_type memeber;  
        };  
        </pre>

        <h3>Program</h3>

        <pre class="jumbotron">
        #include<stdio.h>  
        #include<conio.h>  
        void main( )  
        {  
            struct employee  
            {  
                int id ;  
                float salary ;  
                int mobile ;  
            } ;  
            struct employee e1,e2,e3 ;  
            clrscr();  
            printf ("\nEnter ids, salary & mobile no. of 3 employee\n"  
            scanf ("%d %f %d", &e1.id, &e1.salary, &e1.mobile);  
            scanf ("%d%f %d", &e2.id, &e2.salary, &e2.mobile);  
            scanf ("%d %f %d", &e3.id, &e3.salary, &e3.mobile);  
            printf ("\n Entered Result ");  
            printf ("\n%d %f %d", e1.id, e1.salary, e1.mobile);  
            printf ("\n%d%f %d", e2.id, e2.salary, e2.mobile);  
            printf ("\n%d %f %d", e3.id, e3.salary, e3.mobile);  
            getch();  
        } </pre>

        <hr>

        <h3> Advantages</h3>
        <ul>
            <li>It can hold variables of different data types.</li>
            <li>We can create objects containing different types of attributes. </li>
            <li>It allows us to re-use the data layout across programs. </li>
            <li>It is used to implement other data structures like linked lists, stacks, queues, trees, graphs etc. </li>
        </ul>




        <hr>
        <div class="mb-2">
            <a href="/ind-learning/ds-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/ds-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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