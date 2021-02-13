<?php
$sub = "cpp";
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

    <title>C++ Data Types</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------Java Data Types------------ -->
    <div class="container">
        <h1>C++ Data Types</h1>
        <div>
            <a href="/ind-learning/cpp-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Data Types</h3>
        <p>
            While writing program in any language, you need to use various variables to store various information. Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.
            <br>
            You may like to store information of various data types like character, wide character, integer, floating point, double floating point, boolean etc. Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory.
        </p>

        <p>
            Data types are divided into two groups:
            <ul>
                <li><b>Fundamental data types</b> - includes bool , char , int , float , double , char wchar_t , void.
                </li>
                <li> <b>Derived data types</b> - such as arrays, pointer, function types, structure,etc.
                </li>
                <li> <b>Abstract data type</b> - Such as Class, structure, union, enumeration, etc </li>
            </ul>
        </p>

        <hr>
        <h3>Fundamental Data Types</h3>
        <p>
            Now let us discuss fundamental data types in more details.
            <br>
            Some of the fundamental data types in c++:
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th style="width:20%">Data Type </th>
                        <th>Size(in bytes)</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>int</td>
                        <td>2 or 4</td>
                        <td>Stores whole numbers from -2147483648 to 2147483647.</td>
                    </tr>
                    <tr>
                        <td>float</td>
                        <td>4</td>
                        <td>Stores whole numbers in decimal and exponentials</td>
                    </tr>
                    <tr>
                        <td>double</td>
                        <td>8</td>
                        <td>Stores whole numbers in expontial form and has two times the precision of float</td>
                    </tr>
                    <tr>
                        <td>char</td>
                        <td>1</td>
                        <td>Stores characters enclosed inside single quotes</td>
                    </tr>
                    <tr>
                        <td>wchar_t</td>
                        <td>2</td>
                        <td>wide character is similer to the char data type, except its size is 2 bytes instead of 1.</td>
                    </tr>
                    <tr>
                        <td>bool</td>
                        <td>1</td>
                        <td>Stores one of two possible values true or false.</td>
                    </tr>
                    <tr>
                        <td>void</td>
                        <td>Empty</td>
                        <td>It indicates an absence of data</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <b>Note</b> - We cannot declare variable of the void type.
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
        // C++ program to sizes of data types
                #include<iostream>
                using namespace std;

                int main()
                {
                	cout << "Size of char : " << sizeof(char) 
                	<< " byte" << endl;
                	cout << "Size of int : " << sizeof(int)
                	<< " bytes" << endl;
                	cout << "Size of short int : " << sizeof(short int) 
                	<< " bytes" << endl;
                	cout << "Size of long int : " << sizeof(long int) 
                	<< " bytes" << endl;
                	cout << "Size of signed long int : " << sizeof(signed long int)
                	<< " bytes" << endl;
                	cout << "Size of unsigned long int : " << sizeof(unsigned long int) 
                	<< " bytes" << endl;
                	cout << "Size of float : " << sizeof(float) 
                	<< " bytes" << endl;
                
                	return 0 ;
                }
</pre>

        <h3>C++ Type Modifiers</h3>
        <p>We can further modify some of the fundamental data types by using type modifiers. There are 4 type modifiers in C++. They are:
            <ol>
                <li>signed</li>
                <li>unsigned</li>
                <li>short</li>
                <li>long</li>
            </ol>
            <br>
            We can modify the following data types with the above modifiers:
            <ul>
                <li>int</li>
                <li>double</li>
                <li>char</li>
            </ul>
        </p>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="width:20%">Data Type </th>
                    <th>Size(in bytes)</th>
                    <th>Meaning</th>
                </tr>
                <tr>
                    <td>signed int</td>
                    <td>4</td>
                    <td>used for integers (equivalent to int)</td>
                </tr>
                <tr>
                    <td>unsigned int</td>
                    <td>4</td>
                    <td>can only store positive integers</td>
                </tr>
                <tr>
                    <td>short</td>
                    <td>2</td>
                    <td>used for small integers (range -32768 to 32767)</td>
                </tr>
                <tr>
                    <td>long</td>
                    <td>at least 4</td>
                    <td>used for large integers (equivalent to long int)</td>
                </tr>
                <tr>
                    <td>unsigned long</td>
                    <td>4</td>
                    <td>used for large positive integers or 0 (equivalent to unsigned long int)</td>
                </tr>
                <tr>
                    <td>long long</td>
                    <td>8</td>
                    <td>used for very large integers (equivalent to long long int).</td>
                </tr>
                <tr>
                    <td>unsigned long long</td>
                    <td>8</td>
                    <td>used for very large positive integers or 0 (equivalent to unsigned long long int)</td>
                </tr>
                <tr>
                    <td>long double</td>
                    <td>8</td>
                    <td>used for large floating-point numbers</td>
                </tr>
                <tr>
                    <td>signed char</td>
                    <td>1</td>
                    <td>used for characters (guaranteed range -127 to 127)</td>
                </tr>
                <tr>
                    <td>unsigned char</td>
                    <td>1</td>
                    <td>used for characters(range 0 to 255)</td>
                </tr>
            </tbody>
        </table>

        <p>Let's see a few examples.
            <pre class="jumbotron">
    long b = 4523232;
    long int c = 2345342;
    long double d = 233434.56343;
    short d = 3434233; // Error! out of range
    unsigned int a = -5;    // Error! can only store positive numbers or 0
</pre>
        </p>

        <h3>Derived Data Types</h3>
        <p>
            The data dypes that are derived from the fundamental or built in data types are refered as Derived Data Types. These can be of four types namely:
            <ul>
                <li>Function</li>
                <li>Array</li>
                <li>Pointer</li>
                <li>Reference</li>
            </ul>
        </p>
        <h3>Abstract or User-Defined Data Types</h3>
        <p>These data types are definesby user itself. Like,defining a class in c++ or a strucure. C++ provides the following user-defined datatypes:
            <ul>
                <li>Class</li>
                <li>Structure</li>
                <li>Union</li>
                <li>Enumeration</li>
                <li>Typedef defined Data Type</li>
            </ul>
        </p>

        <b>We will look derived and abstract datatype in the later sections.</b>



        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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