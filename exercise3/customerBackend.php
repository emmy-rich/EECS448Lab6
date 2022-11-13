<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Order Processed</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h1>The Extremely Useful Store Thanks You For Your Purchase!</h1>
    <h2 class='center'>Your order was sucessful!</h2>
    <?php
        $pineapples = $_POST["pinkPineapples"];
        $pineappleCost = 11;
        $totalPineappleCost = $pineappleCost * $pineapples;
        $chargers = $_POST["chargers"];
        $chargerCost = 80;
        $totalchargerCost = $chargerCost * $chargers;
        $trucks = $_POST["trucks"];
        $truckCost = 33;
        $totalTruckCost = $truckCost * $trucks;
        $shipping = $_POST["shipping"];

        if($shipping == "sevenDay"){
            $shipping = "Free 7 day";
            $shippingCost = 0;
        }
        else if($shipping == "threeDay"){
            $shipping = "3 Day";
            $shippingCost = 5;
        }
        else{
            $shipping = "Over night";
            $shippingCost = 50;
        }

        $total = $totalPineappleCost + $totalchargerCost + $totalTruckCost + $shippingCost;


        
        echo("<p>"."The password you entered in was: ".$_POST["password"]."</p>"."<br>");
        echo("<h2 class='center'>"."Receipt"."</h3>"."<br>");
        echo("<table class='backend'>");

        echo("<tr>");
            echo("<th>".""."</th>");
            echo("<th>"."Quantity"."</th>");
            echo("<th>"."Cost Per Item"."</th>");
            echo("<th>"."Sub Total"."</th>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Pink Pineapples"."</th>");
            echo("<td>".$pineapples."</td>");
            echo("<td>"."$".$pineappleCost."</td>");
            echo("<td>"."$".$pineappleCost*$pineapples."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Broken iPhone Chargers"."</th>");
            echo("<td>".$chargers."</td>");
            echo("<td>"."$".$chargerCost."</td>");
            echo("<td>"."$".$chargerCost*$chargers."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Toy Trucks"."</th>");
            echo("<td>".$trucks."</td>");
            echo("<td>"."$".$truckCost."</td>");
            echo("<td>"."$".$truckCost*$trucks."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th>"."Shipping"."</th>");
            echo("<td colspan='2'>".$shipping."</td>");
            echo("<td>"."$".$shippingCost."</td>");
        echo("</tr>");

        echo("<tr>");
            echo("<th colspan='3'>"."Total Cost"."</th>");
            echo("<td>"."$".$total."</th>");
        echo("</tr>");

        echo("</table>");
    ?>
  </body>
</html>