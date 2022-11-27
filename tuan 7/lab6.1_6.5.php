<html>
    <head>
        <title>Table Output</title>
        
        <style>
            th {
                background-color: lightgray;
            }
        </style>
    </head>
    
    <body>
        <?php
            $host = 'localhost';
            $user = 'it4552';
            $passwd = 'it4552_2022';
            $database = 'business_service';
            $connect = mysqli_connect($host, $user, $passwd);
            $table_name = 'categories';

            mysqli_select_db($connect,$database);

            if (isset($_POST["CatID"]) && isset($_POST["Title"]) && isset($_POST["Desc"])) {
                $categoryID = $_POST["CatID"];
                $title = $_POST["Title"];
                $description = $_POST["Desc"];
                $insertquery =  "Insert into $table_name value('$categoryID','$title', '$description');";

                $connect->query($insertquery);
            }

            print ' <h1 class="page-header text-center text-primary">';
            print "Category Administration</h1><br>";

            $query = "SELECT * FROM $table_name";
            $results_id = mysqli_query($connect,$query);
            
            if ($results_id) {
                print '<form method="post">';
                print '<table border=1 style="width:100%">';
                print '<th style="width:20%">CatID<th>Title<th>Description';
                
                while ($row = mysqli_fetch_row($results_id)) {
                    print '<tr>';
                    foreach ($row as $field) {
                        print "<td>$field</td> ";
                    }
                    print '</tr>';
                }
                
                print '<tr>';
                print '<td><input type="text" style="width:100%" name="CatID"></td>';
                print '<td><input type="text" style="width:100%" name="Title"></td>';
                print '<td><input type="text" style="width:100%" name="Desc"></td>';
                print '</tr>';
                print '</table>';
                print '<input type="submit" value="Add Category">';
                print '</form>';
            } else {
                die("Query=$query failed!");
            }
            
            mysqli_close($connect);
        ?> 
    </body>
</html>