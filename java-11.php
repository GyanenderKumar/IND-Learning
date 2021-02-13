<?php

    $sub="java";
    $pag="11";

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

    <title>Java String Methods</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java String Methods------------ -->
    <div class="container">
        <h1>Java String Methods</h1>
        <div>
            <a href="java-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>All String Methods</h3>
        <p>The String class has a set of built-in methods that you can use on strings.</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Method</th>
                    <th>Description</th>
                    <th>Return Type</th>
                </tr>
                <tr>
                    <td>charAt()</a></td>
                    <td>Returns the character at the specified index (position)</td>
                    <td>char</td>
                </tr>
                <tr>
                    <td>codePointAt()</a></td>
                    <td>Returns the Unicode of the character at the specified index</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>codePointBefore()</a></td>
                    <td>Returns the Unicode of the character before the specified index</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>codePointCount()</a></td>
                    <td>Returns the Unicode in the specified text range of this String</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>compareTo()</a></td>
                    <td>Compares two strings lexicographically</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>compareToIgnoreCase()</a></td>
                    <td>Compares two strings lexicographically, ignoring case differences</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>concat()</a></td>
                    <td>Appends a string to the end of another string</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>contains()</a></td>
                    <td>Checks whether a string contains a sequence of characters</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>contentEquals()</a></td>
                    <td>Checks whether a string contains the exact same sequence of characters
                        of the specified CharSequence or StringBuffer</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>copyValueOf()</a></td>
                    <td>Returns a String that represents the characters of the character array</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>endsWith()</a></td>
                    <td>Checks whether a string ends with the specified character(s)</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>equals()</a></td>
                    <td>Compares two strings. Returns true if the strings are equal, and false
                        if not</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>equalsIgnoreCase()</a></td>
                    <td>Compares two strings, ignoring case considerations</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>format()</td>
                    <td>Returns a formatted string using the specified locale, format string, and arguments</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>getBytes()</td>
                    <td>Encodes this String into a sequence of bytes using the named charset, storing the result into a new byte array</td>
                    <td>byte[]</td>
                </tr>
                <tr>
                    <td>getChars()</td>
                    <td>Copies characters from a string to an array of chars</td>
                    <td>void</td>
                </tr>
                <tr>
                    <td>hashCode()</a></td>
                    <td>Returns the hash code of a string</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>indexOf()</a></td>
                    <td>Returns the position of the first found occurrence of specified characters in a string</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>intern()</td>
                    <td>Returns the index within this string of the first occurrence of the specified character, starting the search at the specified index</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>isEmpty()</a></td>
                    <td>Checks whether a string is empty or not</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>lastIndexOf()</a></td>
                    <td>Returns the position of the last found occurrence of specified characters in a string</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>length()</a></td>
                    <td>Returns the length of a specified string</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>matches()</td>
                    <td>Searches a string for a match against a regular expression, and returns the matches</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>offsetByCodePoints()</td>
                    <td>Returns the index within this String that is offset from the given index by codePointOffset code points</td>
                    <td>int</td>
                </tr>
                <tr>
                    <td>regionMatches()</td>
                    <td>Tests if two string regions are equal</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>replace()</a></td>
                    <td>Searches a string for a specified value, and returns a new string where the specified values are replaced</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>replaceFirst()</td>
                    <td>Replaces the first occurrence of a substring that matches the given regular expression with the given replacement</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>replaceAll()</td>
                    <td>Replaces each substring of this string that matches the given regular expression with the given replacement</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>split()</td>
                    <td>Splits a string into an array of substrings</td>
                    <td>String[]</td>
                </tr>
                <tr>
                    <td>startsWith()</a></td>
                    <td>Checks whether a string starts with specified characters</td>
                    <td>boolean</td>
                </tr>
                <tr>
                    <td>subSequence()</td>
                    <td>Returns a new character sequence that is a subsequence of this sequence</td>
                    <td>CharSequence</td>
                </tr>
                <tr>
                    <td>substring()</td>
                    <td>Extracts the characters from a string, beginning at a specified start position, and through the specified number of character</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>toCharArray()</td>
                    <td>Converts this string to a new character array</td>
                    <td>char[]</td>
                </tr>
                <tr>
                    <td>toLowerCase()</a></td>
                    <td>Converts a string to lower case letters</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>toString()</td>
                    <td>Returns the value of a String object</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>toUpperCase()</a></td>
                    <td>Converts a string to upper case letters</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>trim()</a></td>
                    <td>Removes whitespace from both ends of a string</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>valueOf()</td>
                    <td>Returns the primitive value of a String object</td>
                    <td>String</td>
                </tr>
            </tbody>
        </table>



        <hr>
        <div class="mb-2">
            <a href="java-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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