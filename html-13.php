<?php

    $sub="html";
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

    <title>HTML Table</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Table</h1>
        <div>
            <a href="html-12.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-14.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Table</h3>
        <p>
            HTML table tag is used to display data in tabular form (row * column). There can be many columns in a
            row.<br>
            <br>We can create a table to display data in tabular form, using &lt;table&gt; element, with the help of
            &lt;tr&gt; , &lt;td&gt;, and &lt;th&gt; elements.<br>
            <br>In Each table, table row is defined by &lt;tr&gt; tag, table header is defined by &lt;th&gt;, and table
            data is defined by &lt;td&gt; tags.<br><br>
            HTML tables are used to manage the layout of the page e.g. header section, navigation bar, body content,
            footer section etc. But it is recommended to use div tag over table to manage the layout of the page .
        </p>
        <hr>
        <h3>HTML Table Tag</h3>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>tag</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>&lt;Table&gt;</td>
                    <td>It defines a table.</td>
                </tr>
                <tr>
                    <td>&lt;TR&gt;</td>
                    <td>It defines a row in a table.</td>
                </tr>
                <tr>
                    <td>&lt;TH&gt;</td>
                    <td>It defines a header cell in a table.</td>
                </tr>
                <tr>
                    <td>&lt;TD&gt;</td>
                    <td>It defines a cell in a table.</td>
                </tr>
                <tr>
                    <td>&lt;CAPTION&gt;</td>
                    <td>It defines the table caption.</td>
                </tr>
                <tr>
                    <td>&lt;COLGROUP&gt;</td>
                    <td>It specifies a group of one or more columns in a table for formatting</td>
                </tr>
                <tr>
                    <td>&lt;COL&gt;</td>
                    <td>It is used with &lt;colgroup&gt; element to specify column properties for each column.</td>
                </tr>
                <tr>
                    <td>&lt;TBODY&gt;</td>
                    <td>It is used to group the body content in a table.</td>
                </tr>
                <tr>
                    <td>&lt;THEAD&gt;</td>
                    <td>It is used to group the header content in a table.</td>
                </tr>
                <tr>
                    <td>&lt;TFOOTER&gt;</td>
                    <td>It is used to group the footer content in a table.</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h5>HTML Table Example</h5>
        <p>Let's see the example of HTML table tag. It output is shown above.</p>
        <pre class="jumbotron">
            &lt;table&gt;  
                &lt;tr>&lt;th>First_Name&lt;/th>&lt;th>Last_Name&lt;/th>&lt;th>Marks&lt;/th>&lt;/tr&gt;  
                &lt;tr&gt;&lt;td&gt;Sonoo&lt;/td&gt;&lt;td&gt;Jaiswal&lt;/td&gt;&lt;td&gt;60&lt;/td&gt;&lt;/tr&gt;  
                &lt;tr>&lt;td&gt;James&lt;/td&gt;&lt;td&gt;William&lt;/td&gt;&lt;td&gt;80&lt;/td&gt;&lt;/tr&gt;  
                &lt;tr>&lt;td&gt;Swati&lt;/td&gt;&lt;td&gt;Sironi&lt;/td&gt;&lt;;td&gt;82&lt;/td&gt;&lt;/tr&gt;  
                &lt;tr&gt;&lt;td&gt;Chetna&lt;/td&gt;&lt;td&gt;Singh&lt;/td&gt;&lt;td&gt;72&lt;/td&gt;&lt;/tr&gt;  
            &lt;/table&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <table>  
                <tr><th>First_Name</th><th>Last_Name</th><th>Marks</th></tr>  
                <tr><td>Sonoo</td><td>Jaiswal</td><td>60</td></tr>  
                <tr><td>James</td><td>William</td><td>80</td></tr>  
                <tr><td>Swati</td><td>Sironi</td><td>82</td></tr>  
                <tr><td>Chetna</td><td>Singh</td><td>72</td></tr>  
            </table> </pre>
        In the above html table, there are 5 rows and 3 columns = 5 * 3 = 15 values.
        <hr>
        <h3>HTML Table with Border</h3>
        There are two ways to specify border for HTML tables.
        <ol>
            <li>
                By border attribute of table in HTML.
            </li>
            <li>
                By border property in CSS.
            </li>
        </ol>
        <hr>
        <h3>1) HTML Border attribute</h3>
        <p>You can use border attribute of table tag in HTML to specify border. But it is not recommended now.</p>
        <pre class="jumbotron">
            &lt;table border="1"&gt;  
                &lt;tr&gt;&lt;th&gt;First_Name&lt;/th&lt;&lt;th&gt;Last_Name&lt;/th&gt;&lt;th&gt;Marks&lt;/th&gt;&lt;/tr&gt;  
                &lt;tr&gt;&lt;td&gt;Sonoo&lt;/td&gt;&lt;td&gt;Jaiswal&lt;/td&gt;&lt;td&gt;60&lt;/td&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;James&lt;/td&gt;&lt;td&gt;William&lt;/td&gt;&lt;td&gt;80&lt;/td&gt;&lt;/tr&gt;  
                &lt;tr&gt;&lt;td&gt;Swati&lt;/td&gt;&lt;td&gt;Sironi&lt;/td&gt;&lt;td&gt;82&lt;/td&gt;&lt;/tr&gt;  
                &lt;tr&gt;&lt;td&gt;Chetna&lt;/td&gt;&lt;td&gt;Singh&lt;/td&gt;&lt;td&gt;72&lt;/td&gt;&lt;/tr&gt;  
            &lt;/table&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <table border="1">  
                <tr><th>First_Name</th><th>Last_Name</th><th>Marks</th></tr>  
                <tr><td>Sonoo</td><td>Jaiswal</td><td>60</td></tr>  
                <tr><td>James</td><td>William</td><td>80</td></tr>  
                <tr><td>Swati</td><td>Sironi</td><td>82</td></tr>  
                <tr><td>Chetna</td><td>Singh</td><td>72</td></tr>  
            </table> </pre>
        <hr>
        <h3>2) CSS Border property</h3>
        <p>It is now recommended to use border property of CSS to specify border in table.</p>
        <pre class="jumbotron">
            &lt;style&gt;  
                table, th, td {  
                  border: 1px solid black;  
                }  
            &lt;/style&gt; </pre>
        <p>You can collapse all the borders in one border by border-collapse property. It will collapse the border into
            one.</p>
        <pre class="jumbotron">
            &lt;style&gt;  
                table, th, td {  
                  border: 2px solid black;  
                  border-collapse: collapse;  
                }  
            &lt;/style&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
        <table style="border: 1px solid black; border-collapse: collapse;">
            <th style="border: 1px solid black; border-collapse: collapse;">Name</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Last Name</th>
            <th style="border: 1px solid black; border-collapse: collapse;">Marks</th>
            </tr>
            <tr><td style="border: 1px solid black; border-collapse: collapse;">Sonoo</td><td style="border: 1px solid black; border-collapse: collapse;">Jaiswal</td><td style="border: 1px solid black; border-collapse: collapse;">60</td></tr>
            <tr><td style="border: 1px solid black; border-collapse: collapse;">James</td><td style="border: 1px solid black; border-collapse: collapse;">William</td><td style="border: 1px solid black; border-collapse: collapse;">80</td></tr>
            <tr><td style="border: 1px solid black; border-collapse: collapse;">Swati</td><td style="border: 1px solid black; border-collapse: collapse;">Sironi</td><td style="border: 1px solid black; border-collapse: collapse;">82</td></tr>
            <tr><td style="border: 1px solid black; border-collapse: collapse;">Chetna</td><td style="border: 1px solid black; border-collapse: collapse;">Singh</td><td style="border: 1px solid black; border-collapse: collapse;">72</td></tr>
        </table> </pre>
        <hr>
        <h3>HTML Table with cell padding</h3>
        <p>You can specify padding for table header and table data by two ways:</p>
        <ol>
            <li>
                By cellpadding attribute of table in HTML.
            </li>
            <li>
                By padding property in CSS.
            </li>
        </ol>
        <p>The cellpadding attribute of HTML table tag is obselete now. It is recommended to use CSS. So let's see the
            code of CSS.</p>
        <pre class="jumbotron">
        &lt;style&gt;  
            table, th, td {  
              border: 1px solid pink;  
              border-collapse: collapse;  
            }  
            th, td {  
              padding: 10px;  
            }  
        &lt;/style&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
        <table style="border: 1px solid black; border-collapse: collapse;">
            <tr>
            <th style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Name</th>
            <th style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Last Name</th>
            <th style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Marks</th>
            </tr>
            <tr><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Sonoo</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Jaiswal</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">60</td></tr>
            <tr><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">James</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">William</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">80</td></tr>
            <tr><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Swati</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Sironi</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">82</td></tr>
            <tr><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Chetna</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">Singh</td><td style="padding: 10px;border: 1px solid black; border-collapse: collapse;">72</td></tr>
        </table> </pre>
        <hr>
        <h3>HTML Table width:</h3>
        <p>
            We can specify the HTML table width using the <b>CSS width</b> property. It can be specify in pixels or
            percentage.<br><br>
            We can adjust our table width as per our requirement. Following is the example to display table with width.
        </p>
        <pre class="jumbotron">
        table{  
            width: 100%;   
        } </pre>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
                &lt;title&gt;table&lt;/title&gt;  
                &lt;style&gt;  
                table{  
                    border-collapse: collapse;  
                    width: 100%;   
                    }  
                th,td{  
                    border: 2px solid green;   
                    padding: 15px;  
                    }  
               
                &lt;/style&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;table&gt;  
                    &lt;tr&gt;  
                        &lt;th&gt;1 header&lt;/th&gt;  
                        &lt;th&gt;1 header&lt;/th&gt;  
                        &lt;th&gt;1 header&lt;/th&gt;  
                    &lt;/tr&gt;  
                    &lt;tr&gt;  
                        &lt;td&gt;1data&lt;/td&gt;  
                        &lt;td&gt;1data&lt;/td&gt;  
                        &lt;td&gt;1data&lt;/td&gt;  
                    &lt;/tr&gt;  
                    &lt;tr&gt;  
                        &lt;td&gt;2 data&lt;/td&gt;  
                        &lt;td&gt;2 data&lt;/td&gt;  
                        &lt;td&gt;2 data&lt;/td&gt;  
                    &lt;/tr&gt;  
                    &lt;tr&gt;  
                        &lt;td&gt;3 data&lt;/td&gt;  
                        &lt;td&gt;3 data&lt;/td&gt;  
                        &lt;td&gt;3 data&lt;/td&gt;  
                    &lt;/tr&gt;  
                &lt;/body&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-table-width.png" alt="html-table-width">
        <hr>
        <h3>HTML Table with colspan</h3>
        <p>
            If you want to make a cell span more than one column, you can use the colspan attribute.<br><br>
            It will divide one cell/row into multiple columns, and the number of columns depend on the value of colspan
            attribute.<br><br>
            Let's see the example that span two columns.<br><br>
            CSS code:
        </p>
        <pre class="jumbotron">
        &lt;style&gt;  
            table, th, td {  
            border: 1px solid black;  
            border-collapse: collapse;  
            }  
            th, td {  
            padding: 5px;  
            }  
        &lt;/style&gt; </pre>
        HTML code:
        <pre class="jumbotron">
        &lt;table border="1" style="width:100%"&gt;  
            &lt;tr&gt;  
                &lt;th&gt;Name&lt;/th&gt;  
                &lt;th&gt; colspan="2"&gt;Mobile No.&lt;/th&gt;  
            &lt;/tr&gt;  
            &lt;tr&gt;  
                &lt;td&gt;Ajeet Maurya&lt;/td&gt;  
                &lt;td&gt;7503520801&lt;/td&gt;  
                &lt;td&gt;9555879135&lt;/td&gt;  
            &lt;/tr&gt;  
        &lt;/table&gt; </pre>
        <h5>Output :</h5>
        <table border="1" style="width:100%">
            <tr>
                <th>Name</th>
                <th colspan="2">Mobile No.</th>
            </tr>
            <tr>
                <td>Ajeet Maurya</td>
                <td>7503520801</td>
                <td>9555879135</td>
            </tr>
        </table>
        <hr>
        <h3>HTML Table with rowspan</h3>
        <p>
            If you want to make a cell span more than one row, you can use the rowspan attribute.<br><br>
            It will divide a cell into multiple rows. The number of divided rows will depend on rowspan values.<br><br>
            Let's see the example that span two rows.<br><br>
            CSS code :
        </p>
        <pre class="jumbotron">
        &lt;style&gt;  
            table, th, td {  
                border: 1px solid black;  
                border-collapse: collapse;  
            }  
            th, td {  
                  padding: 10px;  
            }  
        &lt;/style&gt; </pre>
        HTML Code:
        <pre class="jumbotron">
        &lt;table&gt;    
            &lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;td&gt;Ajeet Maurya&lt;/td&gt;&lt;/tr&gt;    
            &lt;tr&gt;&lt;th rowspan="2"&gt;Mobile No.&lt;/th&gt;&lt;td&gt;7503520801&lt;/td&gt;&lt;/tr&gt;    
            &lt;tr&gt;&lt;td&gt;9555879135&lt;/td&gt;&lt;/tr&gt;    
        &lt;/table&gt; </pre>
        <h5>Output :</h5>
        <table style="border: 1px solid black;border-collapse: collapse;">
            <tr>
                <th style="padding: 10px;border: 1px solid black;border-collapse: collapse;">Name</th>
                <td style="padding: 10px;border: 1px solid black;border-collapse: collapse;">Ajeet Maurya</td>
            </tr>
            <tr>
                <th rowspan="2" style="padding: 10px;border: 1px solid black;border-collapse: collapse;">Mobile No.</th>
                <td style="padding: 10px;border: 1px solid black;border-collapse: collapse;">7503520801</td>
            </tr>
            <tr>
                <td style="padding: 10px;border: 1px solid black;border-collapse: collapse;">9555879135</td>
            </tr>
        </table>
        <hr>
        <h3>HTML table with caption</h3>
        <p>
            HTML caption is diplayed above the table. It must be used after table tag only.
        </p>
        <pre class="jumbotron">
        &lt;table&gt;  
            &lt;caption&gt;Student Records&lt;/caption&gt;  
            &lt;tr&gt;&lt;th&gt;First_Name&lt;/th&gt;&lt;th&gt;Last_Name&lt;/th&gt;&lt;th&gt;Marks&lt;/th&gt;&lt;/tr&gt;  
            &lt;tr&gt;&lt;td&gt;Vimal&lt;/td&gt;&lt;td&gt;Jaiswal&lt;/td&gt;&lt;td&gt;70&lt;/td&gt;&lt;/tr&gt;  
            &lt;tr&gt;&lt;td&gt;Mike&lt;/t&gt;&lt;td&gt;Warn&lt;/td&gt;&lt;td&gt;60&lt;/td&gt;&lt;/tr&gt;  
            &lt;tr&gt;&lt;td&gt;Shane&lt;/td&gt;&lt;td&gt;Warn&lt;/td&gt;&lt;td&gt;42&lt;/td&gt;&lt;/tr&gt;  
            &lt;tr&gt;&lt;td&gt;Jai&lt;/td&gt;&lt;td&gt;Malhotra&lt;/td&gt;&lt;td&gt;62&lt;/td&gt;&lt;/tr&gt;  
        &lt;/table&gt; </pre>
        <hr>
        <h3>Styling HTML table even and odd cells</h3>
        CSS code:
        <pre class="jumbotron">
        &lt;style&gt;  
            table, th, td {  
                border: 1px solid black;  
                border-collapse: collapse;  
            }  
            th, td {  
                padding: 10px;  
            }  
            table#alter tr:nth-child(even) {  
                background-color: #eee;  
            }  
            table#alter tr:nth-child(odd) {  
                background-color: #fff;  
            }  
            table#alter th {  
                color: white;  
                background-color: gray;  
            }  
        &lt;style&gt; </pre>
        <h5>Output :</h5>
        <img src="images/tableevenodd.png" alt="tableevenodd">
        <hr>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tr style="text-align:center">
                <th>Element</th>
                <th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th>
                <th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th>
                <th><img src="images/ie_browser.png" alt="ie_browser">IE</th>
                <th><img src="images/opera_browser.png" alt="opera_browser">Opera</th>
                <th><img src="images/safari_browser.png" alt="safari_browser">safari</th>
            </tr>
            <tr style="text-align:center">
                <td>&lt;Table&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-12.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-14.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>