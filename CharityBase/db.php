
<?php
$con=mysqli_connect("remotemysql.com","ARogLb9NbR","i7WZRAwOBc","ARogLb9NbR");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



function display_data($data) {
    $output = "<table>";
    foreach($data as $key => $var) {
        if($key===0) {
            $output .= '<tr>';
            foreach($var as $col => $val) {
                $output .= '<td>' . $col . '</td>';
            }
            $output .= '<tr>';
			foreach($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            
            $output .= '</tr>';
        }
        else {
            $output .= '<tr>';
            foreach($var as $col => $val) {
                $output .= '<td>' . $val . '</td>';
            }
            $output .= '</tr>';
        }
    }
    $output .= '</table>';
    echo $output;
}