<?php
    $sub="cpp";
    $pag="10";
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

    <title>C++ Strings</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------C++ Strings------------ -->
    <div class="container">
        <h1>C++ Strings</h1>
        <div>
            <a href="/ind-learning/cpp-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Strings</h3>
        <p>
        C++ provides following two types of string representations −
            <br>
           <li>The C-style character string.</li>
           <li>The string class type introduced with Standard C++.</li>
        </p>
        <h3>The C-Style Character String</h3>
        <p>
        The C-style character string originated within the C language and continues to be supported within C++. This string is actually a one-dimensional array of characters which is terminated by a null character '\0'. Thus a null-terminated string contains the characters that comprise the string followed by a null.
        <br>

        The following declaration and initialization create a string consisting of the word "Hello". To hold the null character at the end of the array, the size of the character array containing the string is one more than the number of characters in the word "Hello."
        </p>
        <pre class="jombotron">
        char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
        </pre>

        <p>If you follow the rule of array initialization, then you can write the above statement as follows −
        </p>

        <pre class="jumbotron">
        char greeting[] = "Hello";
        </pre>

        <p>Actually, you do not place the null character at the end of a string constant. The C++ compiler automatically places the '\0' at the end of the string when it initializes the array. Let us try to print above-mentioned string −</p>
        <pre class="jumbotron">
        #include <iostream>

        using namespace std;

        int main () {

           char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};

           cout << "Greeting message: ";
           cout << greeting << endl;

           return 0;
        }
        </pre>

        <p>When the above code is compiled and executed, it produces the following result −</p>

        <pre class="jumbotron">
        Greeting message: Hello
        </pre>
        <p>C++ supports a wide range of functions that manipulate null-terminated strings −</p>
        <table class="table table-striped">
        <tbody>
        <tr>
        <th>Sr.No</th>
        <th>Function & Purpose</th>
        </tr>
        <tr>
        <th>1</th>
        <th> <b>strcpy(s1, s2);</b>  <br>Copies string s2 into string s1.</th>
        </tr>
        <tr>
        <th>2</th>
        <th> <b>strcat(s1, s2);</b>  <br>Concatenates string s2 onto the end of string s1.</th>
        </tr>
        <tr>
        <th>3</th>
        <th> <b>strlen(s1);</b>  <br>Returns the length of string s1.</th>
        </tr>
        <tr>
        <th>4</th>
        <th> <b>strcmp(s1, s2);</b>  <br>Returns 0 if s1 and s2 are the same; less than 0 if s1< s2; greater than 0 if s1>s2.</th>
        </tr>
        <tr>
        <th>5</th>
        <th> <b>strchr(s1, ch);</b>  <br>Returns a pointer to the first occurrence of character ch in string s1.</th>
        </tr>
        <tr>
        <th>6</th>
        <th> <b>strstr(s1, s2);</b>  <br>Returns a pointer to the first occurrence of string s2 in string s1.</th>
        </tr>    
        </tbody>
        </table>
        <br>

        <p>Following example makes use of few of the above-mentioned functions −</p> <br>
        <pre class="jumbotron">
        #include <iostream>
        #include <cstring>

        using namespace std;

        int main () {

           char str1[10] = "Hello";
           char str2[10] = "World";
           char str3[10];
           int  len ;

           // copy str1 into str3
           strcpy( str3, str1);
           cout << "strcpy( str3, str1) : " << str3 << endl;

           // concatenates str1 and str2
           strcat( str1, str2);
           cout << "strcat( str1, str2): " << str1 << endl;

           // total lenghth of str1 after concatenation
           len = strlen(str1);
           cout << "strlen(str1) : " << len << endl;

           return 0;
        }          
        </pre>
        <p>When the above code is compiled and executed, it produces result something as follows −</p>

        <pre class="jumbotron">
        strcpy( str3, str1) : Hello
        strcat( str1, str2): HelloWorld
        strlen(str1) : 10
        </pre>
        <h3>The String Class in C++</h3>
        <p>The standard C++ library provides a string class type that supports all the operations mentioned above, additionally much more functionality. Let us check the following example −</p>
        <pre class="jumbotron">
        #include <iostream>
        #include <string>

        using namespace std;

        int main () {

           string str1 = "Hello";
           string str2 = "World";
           string str3;
           int  len ;

           // copy str1 into str3
           str3 = str1;
           cout << "str3 : " << str3 << endl;

           // concatenates str1 and str2
           str3 = str1 + str2;
           cout << "str1 + str2 : " << str3 << endl;

           // total length of str3 after concatenation
           len = str3.size();
           cout << "str3.size() :  " << len << endl;

           return 0;
        }       
        </pre>
        <p>When the above code is compiled and executed, it produces result something as follows −</p>
        <pre class="jumbotron">
        str3 : Hello
        str1 + str2 : HelloWorld
        str3.size() :  10
        </pre>






        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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