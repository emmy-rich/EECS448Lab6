<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Multiplication Table</title>
  </head>
  <body>
    <h1>EECS 448 Lab 6 Exercise 1: Multiplication Table</h1>
    <?php
      echo('<table>');
      //start at 1 because we want the table to start at 1
      for ($row = 1; $row <= 100;$row++)
      {
        echo('<tr>');
        for($col =1; $col <=100; $col++)
        {
          echo('<td>'.$row*$col.'<td>');
        }
        echo('</tr>');
      }
      echo('</table>')
      ?>
  </body>
</html>
