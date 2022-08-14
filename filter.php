<html>
    <head>
        <style>
            table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>Filter</td>
                <td>Filter id</td>
            </tr>
        <?php 
        foreach(filter_list() as $id => $filter){
            echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter). '</td><tr>';
        }

        $text = "<h1>Hello World</h1>";

        $firstfilter = filter_var($text, FILTER_SANITIZE_STRING);

        echo $firstfilter;
        ?>
        </table>
    </body>
</html>