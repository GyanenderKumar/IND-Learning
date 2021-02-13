<?php

    $sub="java";
    $pag="13";

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

    <title>Java Math Methods</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Math Methods------------ -->
    <div class="container">
        <h1>Java Math Methods</h1>
        <div>
            <a href="java-12.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-14.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <p>The Java Math class has many methods that allows you to perform
            mathematical tasks on numbers.</p>

        <hr>
        <h3>All Math Methods</h3>
        <p>A list of all Math methods can be found in the table below:</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Method</th>
                    <th>Description</th>
                    <th>Return Type</th>
                </tr>
                <tr>
                    <td>abs(x)</a></td>
                    <td>Returns the absolute value of x</td>
                    <td>double|float|int|long</td>
                </tr>
                <tr>
                    <td>acos(x)</a></td>
                    <td>Returns the arccosine of x, in radians</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>asin(x)</a></td>
                    <td>Returns the arcsine of x, in radians</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>atan(x)</td>
                    <td>Returns the arctangent of x as a numeric value between -PI/2 and PI/2 radians</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>atan2(y,x)</td>
                    <td>Returns the angle theta from the conversion of rectangular coordinates (x, y) to polar coordinates (r, theta).</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>cbrt(x)</td>
                    <td>Returns the cube root of x</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>ceil(x)</td>
                    <td>Returns the value of x rounded up to its nearest integer</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>copySign(x, y)</td>
                    <td>Returns the first floating point x with the sign of the second floating point y</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>cos(x)</td>
                    <td>Returns the cosine of x (x is in radians)</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>cosh(x)</td>
                    <td>Returns the hyperbolic cosine of a double value</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>exp(x)</td>
                    <td>Returns the value of E<sup>x</sup></td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>expm1(x)</td>
                    <td>Returns e<sup>x</sup> -1</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>floor(x)</td>
                    <td>Returns the value of x rounded down to its nearest integer</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>getExponent(x)</td>
                    <td>Returns the unbiased exponent used in x</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>hypot(x, y)</td>
                    <td>Returns sqrt(x<sup>2</sup> +y<sup>2</sup>) without intermediate overflow or underflow</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>IEEEremainder(x, y)</td>
                    <td>Computes the remainder operation on x and y as prescribed by the IEEE 754 standard</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>log(x)</td>
                    <td>Returns the natural logarithm (base E) of x</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>log10(x)</td>
                    <td>Returns the base 10 logarithm of x</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>log1p(x)</td>
                    <td>Returns the natural logarithm (base E) of the sum of x and 1</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>max(x, y)</td>
                    <td>Returns the number with the highest value</td>
                    <td>double|float|int|long</td>
                </tr>
                <tr>
                    <td>min(x, y)</td>
                    <td>Returns the number with the lowest value</td>
                    <td>double|float|int|long</td>
                </tr>
                <tr>
                    <td>nextAfter(x, y)</td>
                    <td>Returns the floating point number adjacent to x in the direction of y</td>
                    <td>double|float</td>
                </tr>
                <tr>
                    <td>nextUp(x)</td>
                    <td>Returns the floating point value adjacent to x in the direction of positive infinity</td>
                    <td>double|float</td>
                </tr>
                <tr>
                    <td>pow(x, y)</td>
                    <td>Returns the value of x to the power of y</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>random()</td>
                    <td>Returns a random number between 0 and 1</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>round(x)</td>
                    <td>Returns the value of x rounded to its nearest integer</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>rint()</td>
                    <td>Returns the double value that is closest to x and equal to a mathematical integer</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>signum(x)</td>
                    <td>Returns the sign of x</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>sin(x)</td>
                    <td>Returns the sine of x (x is in radians)</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>sinh(x)</td>
                    <td>Returns the hyperbolic sine of a double value</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>sqrt(x)</td>
                    <td>Returns the square root of x</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>tan(x)</td>
                    <td>Returns the tangent of an angle</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>tanh(x)</td>
                    <td>Returns the hyperbolic tangent of a double value</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>toDegrees(x)</td>
                    <td>Converts an angle measured in radians to an approx. equivalent angle measured in degrees</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>toRadians(x)</td>
                    <td>Converts an angle measured in degrees to an approx. angle measured in radians</td>
                    <td>double</td>
                </tr>
                <tr>
                    <td>ulp(x)</td>
                    <td>Returns the size of the unit of least precision (ulp) of x</td>
                    <td>double|float</td>
                </tr>
            </tbody>
        </table>
        <p><b>Note</b>: All Math methods are <spam class="text-danger">static</spam> .</p>




        <hr>
        <div class="mb-2">
            <a href="java-12.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-14.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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