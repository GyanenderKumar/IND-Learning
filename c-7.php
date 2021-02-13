<?php

    $sub="c";
    $pag="7";

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

    <title> printf() and scanf() in C</title>


    <link rel="stylesheet" href="stylesheet/style.css">


</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>





    <!-- ----------C Introduction section------------ -->
    <div class="container">
        <h1>printf() and scanf() in C</h1>
        <div>
            <a href="c-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
            <a href="c-8.php" class="btn btn-outline-primary">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p><li>printf() function </li>
           The printf() function is used for output. It prints the given statement to the console.

           The syntax of printf() function is given below:<br>
           <pre class="jumbotron"> 
           printf("format string",argument_list);  
           </pre>
           The format string can be %d (integer), %c (character), %s (string), %f (float) etc.<br>
        </p>
        <p><li>scanf() function </li>
           The scanf() function is used for input. It reads the input data from the console.<br>
          <pre class="jumbotron">
          scanf("format string",argument_list);  
          </pre>

       </p>
       <p>Program to print cube of given number <br>
          Let's see a simple example of c language that gets input from the user and prints the cube of the given number. <br>
         <pre class="jumbotron">
         #include<stdio.h>    
         int main(){    
         int number;    
         printf("enter a number:");    
         scanf("%d",&number);    
         printf("cube of number is:%d ",number*number*number);    
         return 0;  
         }    
        </pre>    
        <p>
           Program to print sum of 2 numbers <br>
           Example of input and output in C language that prints addition of 2 numbers. <br>
           <pre class="jumbotron">
           #include<stdio.h>    
           int main(){    
           int x=0,y=0,result=0;  
           printf("enter first number:");  
           scanf("%d",&x);  
           printf("enter second number:");  
           scanf("%d",&y);  
           result=x+y;  
           printf("sum of 2 numbers:%d ",result);    
           return 0;  
           }     </pre> 
         <p>
        <hr>
        <div class="mb-2">
            <a href="c-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
            <a href="c-8.php" class="btn btn-outline-primary">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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