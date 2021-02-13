<?php
$sub = "cpp";
$pag = "12";
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

    <title>C++ Math</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------C++ Math------------ -->
    <div class="container">
        <h1>C++ Math</h1>
        <div>
            <a href="/ind-learning/cpp-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>Mathematical calculations can be done in C++ programming language using the mathematical functions which are included in math or cmath library. These mathematical functions are defined to do complex mathematical calculations. Let’s learn each of them one by one −</p>
        <h3>sine</h3>
        <p>The sin method is used to calculate the sin of the angle given as an argument in degrees. This function accepts one double integer as an argument and returns a double integer which is the value of sin(x°). <br> <i>double sin(double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = sin(23.4);</pre>
        <br>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream>
        #include < math.h>
        using namespace std;
        int main(){
           double x = 45.3;
           cout << "sin ( "<< x <<" ) = " << sin(x) << endl;
        }
        </pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        sin( 45.3 ) = 0.968142
        </pre>

        <hr>
        <h3>Cosine</h3>
        <p>The Cosine or cos method is used to calculate the cos of the angle given as an argument in degrees. This function accepts one double integer as an argument and returns a double integer which is the value of cos(x°). <br><i>double cos(double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = cos(23.4)</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream >
        #include < math.h >
        using namespace std;
        int main(){
           double x = 45.3;
           cout << "cos ( "<< x <<" ) = " << cos(x) << endl;
        }</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        cos( 45.3) = 0.2504</pre>

        <hr>
        <h3>tangent</h3>
        <p>The tangent or tan method is used to calculate the tan of the angle given as an argument in degrees. This function accepts one double integer as an argument and returns a double integer which is the value of tan(xo) = sin(x°)∕cos(x°). <br>
            <i>double tan(double)</i></p>
        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = tan(23.4)</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream >
        #include < math.h >
        using namespace std;
        int main(){
           double x = 45.3;
           cout << "tan ( "<< x <<" ) = " << tan(x) << endl;
        }</pre>

        <h5>output</h5>
        <pre class="jumbotron">
        tan( 45.3) = 3.86638</pre>

        <hr>
        <h3>asin</h3>
        <p>The asin function is used to find the arc sine of the given argument. It returns the asin value for the given input set which can be any double integer within the range -1 to 1 otherwise it would give an error. The function accepts double integer between -1 and 1 and returns a double value as a result of asin().<br><i>double asin(double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double asin(double))</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream >
        #include < math.h >
        using namespace std;
        int main(){
            double x = 0.3232;
            cout << "asin ( "<< x <<" ) = " << asin(x) << endl;
        }</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        asin( 0.3232 ) = 0.3291</pre>

        <hr>
        <h3>acos</h3>
        <p>The acos function is used to find the arc cosine of the given argument. It returns the acos value for the given input set which can be any double integer within the range -1 to 1 otherwise it would give an error. The function accepts double integer between -1 and 1 and returns a double value as a result of acos().<br><i>double acos(double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double acos(double))</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream >
        #include < math.h >
        using namespace std;
        int main(){
            double x = 0.3232;
            cout << "acos ( "<< x <<" ) = " << acos(x) << endl;
        }</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        acos( 0.3232 ) = 1.24169</pre>

        <hr>
        <h3>atan</h3>
        <p>The atan function is used to calculate the value of arc tangent of the given argument. It returns a double value of atan for the double input value in the parameter.<br><i>double atan(double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = atan(0.3232));</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream >
        #include < math.h >
        using namespace std;
        int main(){
            double x = 0.3232;
            cout << "atan ( "<< x <<" ) = " << atan(x) << endl;
        }</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        atan( 0.3232 ) = 0.312603</pre>


        <hr>
        <h3>cosh</h3>
        <p>The cosh function is used to calculate the value of hyperbolic cosine of the given argument. It returns a double value of cosh for the double input value in the parameter.<br><i>double cosh(double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = cosh(0.3232));</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream >
        #include < math.h >
        using namespace std;
        int main(){
            double x = 0.3232;
            cout << "cosh ( "<< x <<" ) = " << cosh(x) << endl;
        }</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        cosh( 0.342 ) = 1.05905
        </pre>


        <hr>
        <h3>Sqrt(square root)</h3>
        <p>sqrt function in C++ returns the square root of the double integer inside the parameter list. The method accept a double integer value as input find square root and returns a double integer as output.<br><i>double sqrt( double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = sqrt(25.00)</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream>
        #include < math.h>
        using namespace std;
        int main(){
            double a =25 ;
            cout << "sqrt( "<< a<<" ) = " << sqrt(a) << endl;
}</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        sqrt( 25 ) = 5.00
        </pre>


        <hr>
        <h3>Power</h3>
        <p>The pow function is used to calculate the power of the base raised to the power of exponent. It accepts two double values as arguments which are the base and exponents numbers and it returns a single double integer which is base to the power of exponent.<br><i>double pow( double, double)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = pow(2, 4);</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include < iostream>
        #include < math.h>
        using namespace std;
        int main(){
            double base = 2 , power = 4;
            cout << "pow( "<< base<<" , "<< power<<" ) = " << pow(base, power) << endl;
}</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        pow( 2 , 4 ) = 16
        </pre>



        <hr>
        <h3>Log</h3>
        <p>The log function is used to find the natural log of the given number. this method accepts single double integer value finds logarithmic value and returns a double integer result of log().<br><i>double x = log(1.35)</i></p>

        <h5>Calling syntax</h5>
        <pre class="jumbotron">
        double x = pow(2, 4);</pre>
        <h5>Example</h5>
        <pre class="jumbotron">
        #include <iostream>
        #include <math.h>
        using namespace std;
        int main(){
            double a =1.35 ;
            cout << "sqrt( "<< a<<" ) = " << sqrt(a) << endl;
}</pre>

        <h5>Output</h5>
        <pre class="jumbotron">
        sqrt( 1.35 ) = 0.300105
        </pre>











        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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