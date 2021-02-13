<?php
$sub = "cpp";
$pag = "3";
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

    <title>Java Keywords</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------C++ Keywords------------ -->
    <div class="container">
        <h1>C++ Keywords</h1>
        <div>
            <a href="/ind-learning/cpp-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Reserved Keywords</h3>
        <p>
            This is a list of reserved keywords in C++. Since they are used by the language, these keywords are not available for re-definition or overloading.
        </p>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="width:20%">Keyword</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><a href="#">union</a></td>
                    <td>
                        <ul>
                            <li>declaration of a union type</li>
                            <li>If a function or a variable exists in scope with the name identical to the name of a union type, union can be prepended to the name for disambiguation, resulting in an elaborated type specifier</li>
                        </ul>


                    </td>
                </tr>
                <tr>
                    <td><a href="#">float</a></td>
                    <td>as the declaration as the type</td>
                </tr>
                <tr>
                    <td><a href="#">boolean</a></td>
                    <td>A data type that can only store true and false values</td>
                </tr>
                <tr>
                    <td><a href="#">break</a></td>
                    <td>Breaks out of a loop or a switch block</td>
                </tr>
                <tr>
                    <td><a href="#">for </a></td>
                    <td>
                        <ul>
                            <li>for loop: as the declaration of the loop
                            </li>
                            <li>range-based for loop: as the declaration of the loop</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">case</a></td>
                    <td>switch statement: as the declaration of the case labels</td>
                </tr>
                <tr>
                    <td><a href="#">catch</a></td>
                    <td>Catches exceptions generated by try statements</td>
                </tr>
                <tr>
                    <td><a href="#">char</a></td>
                    <td>A data type that is used to store a single character</td>
                </tr>
                <tr>
                    <td><a href="#">class</a></td>
                    <td>
                        <ul>
                            <li>Declaration of a class</li>
                            <li>declaration of a scoped enumeration type</li>
                            <li>In a template declaration, class can be used to introduce type template parameters and template template parameters</li>
                            <li>If a function or a variable exists in scope with the name identical to the name of a class type, class can be prepended to the name for disambiguation, resulting in an elaborated type specifier</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">continue</a></td>
                    <td>Continues to the next iteration of a loop</td>
                </tr>
                <tr>
                    <td><a href="#">default</a></td>
                    <td>
                        <ul>
                            <li>switch statement: as the declaration of the default case label</li>
                            <li>explicitly-defaulted function defination: as an explicit instruction to the compiler to the generates special member function or a comparision operator of a class</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">delete</a></td>
                    <td>deallocation functions as the name of operator-like functions</td>
                </tr>
                <tr>
                    <td><a href="#">do</a></td>
                    <td>Used together with while to create a do-while loop</td>
                </tr>
                <tr>
                    <td><a href="#">double</a></td>
                    <td>A data type as double</td>
                </tr>
                <tr>
                    <td><a href="#">else</a></td>
                    <td>Used in conditional statements</td>
                </tr>
                <tr>
                    <td><a href="#">enum</a></td>
                    <td>Declares an enumerated (unchangeable) type</td>
                </tr>
                <tr>
                    <td><a href="#">export</a></td>
                    <td>
                        <ul>
                            <li>Used to mark a template definition exported, which allows the same template to be declared, but not defined, in other translation units.</li>
                            <li>The keyword is unused and reserved.</li>
                            <li>Marks a declaration, a group of declarations, or another module as exported by the current module.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">false</a></td>
                    <td>boolean literal</td>
                </tr>
                <tr>
                    <td><a href="#">for</a></td>
                    <td>Create a for loop</td>
                </tr>
                <tr>
                    <td><a href="#">goto</a></td>
                    <td><b>goto statement:</b>as the declaration of the statement</td>
                </tr>
                <tr>
                    <td><a href="#">if</a></td>
                    <td>Makes a conditional statement</td>
                </tr>
                <tr>
                    <td><a href="#">int</a></td>
                    <td>A data type that can store whole numbers from -2147483648 to 2147483647</td>
                </tr>
                <tr>
                    <td><a href="#">mutable</a></td>
                    <td><b>lambda-declarator </b> that removes const qualification from parameters captured by copy</td>
                </tr>
                <tr>
                    <td><a href="#">namespace</a></td>
                    <td>
                        <ul>
                            <li>namespace declaration</li>
                            <li>namespace alias defination</li>
                            <li>using-directives</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">new</a></td>
                    <td>allocation functions as the name of operator-like functions</td>
                </tr>
                <tr>
                    <td><a href="#">private</a></td>
                    <td>
                        the public and protected members of the base class listed after the access specifier are private members of the derived class while the private members of the base class are inaccessible to the derived class
                    </td>
                </tr>
                <tr>
                    <td><a href="#">protected</a></td>
                    <td>the public and protected members of the base class listed after the access specifier are protected members of the derived class while the private members of the base class are inaccessible to the derived class</td>
                </tr>
                <tr>
                    <td><a href="#">public</a></td>
                    <td>the public and protected members of the base class listed after the access specifier keep their member access in the derived class while the private members of the base class are inaccessible to the derived class</td>
                </tr>
                <tr>
                    <td><a href="#">requires</a></td>
                    <td>
                        <ul>
                            <li>specifies a constant expression on template parameters that evaluate a requirement</li>
                            <li>in a template declaration, specifies an associated constraint </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">return</a></td>
                    <td>terminates the current function and returns the result of the expression to the caller, after implicit conversion to the function return type. </td>
                </tr>
                <tr>
                    <td><a href="#">static</a></td>
                    <td>
                        <ul>
                            <li>declarations of namespace members with static storage duration and internal linkage</li>
                            <li>definitions of block scope variables with static storage duration and initialized once</li>
                            <li>declarations of class members not bound to specific instances</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">struct</a></td>
                    <td>
                        <ul>
                            <li>declaration of a compound type</li>
                            <li>declaration of a scoped enumeration type</li>
                            <li>If a function or a variable exists in scope with the name identical to the name of a non-union class type, struct can be prepended to the name for disambiguation, resulting in an elaborated type specifier</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">switch</a></td>
                    <td>Selects one of many code blocks to be executed</td>
                </tr>
                <tr>
                    <td><a href="#">template</a></td>
                    <td>
                        <ul>
                            <li>Declaration of a template</li>
                            <li>Inside a template definition, template can be used to declare that a dependent name is a template.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><a href="#">this</a></td>
                    <td>The keyword this is a prvalue expression whose value is the address of the implicit object parameter (object on which the non-static member function is being called).</td>
                </tr>
                <tr>
                    <td><a href="#">throw</a></td>
                    <td>Creates a custom error</td>
                </tr>
                </tr>
                <tr>
                    <td><a href="#">try</a></td>
                    <td>Creates a try...catch statement</td>
                </tr>
                <tr>
                    <td><a href="#">typedef</a></td>
                    <td>The typedef specifier, when used in a declaration, specifies that the declaration is a typedef declaration rather than a variable or function declaration.</td>
                </tr>
                <tr>
                    <td><a href="#">void</a></td>
                    <td> type with an empty set of values. It is an incomplete type that cannot be completed (consequently, objects of type void are disallowed).</td>
                </tr>
                <tr>
                    <td>volatile</td>
                    <td>Indicates that an attribute is not cached thread-locally, and is always read from the "main
                        memory"</td>
                </tr>
                <tr>
                    <td><a href="#">while</a></td>
                    <td>Creates a while loop</td>
                </tr>
            </tbody>
        </table>

        <p><b>Note:</b> true , false , and null are not keywords, but they are literals and reserved
            words that cannot be used as identifiers.</p>


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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