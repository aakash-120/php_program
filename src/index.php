<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

<?php

echo "<table>";
for($row =1 ; $row < 9 ; $row++)
{
    echo "<tr>";
    for($col = 1 ; $col < 9 ; $col++)
    {
       if($row%2==0)
       {
           if($col%2 != 0)
           {
           echo "<td class = 'black'></td>";
           }else{
            echo "<td class = 'white'></td>";
           }
       }
       else
       {
            if($col%2 == 0)
            {
            echo "<td class = 'black'></td>";
            }else{
            echo "<td class = 'white'></td>";
            }
       
       }

    }

    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>