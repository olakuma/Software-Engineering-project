<?php
   include_once("../include/global_inc.php"); 

   Roles::minAccess(4, "../forms/denied.php");

   // gets total for all sales 
   $sql ="SELECT SUM(grand_total) AS sum FROM cart";
   $result = mysqli_query($dbconn, $sql);
   while($row = mysqli_fetch_assoc($result))
   {
       $totalSales = $row['sum'];
   }
   
   // get class totals 
   $sql ="SELECT SUM(current_capacity) AS quant FROM classes";
   $resultSum = mysqli_query($dbconn, $sql);
   while($row3 = mysqli_fetch_assoc($resultSum))
   {
    
       $classTotals = $row3['quant']*10;
   }
// get product details
$query = "SELECT PROD_ID, prod_name, prod_price FROM `prod_data`";
$result = $dbconn->query($query);
// get sales 
$query = "SELECT * FROM `cart_items`";
$result2 = $dbconn->query($query);

// get class details
$query = "SELECT CLASS_ID, class_name, current_capacity FROM `classes`";
$resultClasses = $dbconn->query($query);

// count number of basic members
$query = "SELECT COUNT(*) FROM user_table WHERE roles = '1'";
$resultCountBasic = $dbconn->query($query);
while($row = mysqli_fetch_assoc($resultCountBasic))
{
  $numBasicMembers = $row['COUNT(*)'];
}
// count number of premium members
$query = "SELECT COUNT(*) FROM user_table WHERE roles = '2'";
$resultCountPremium = $dbconn->query($query);
while($row = mysqli_fetch_assoc($resultCountPremium))
{
  $numPremium = $row['COUNT(*)'];
}
?>
<html>
    <head>
        <title>
            Z Report
        </title>
        <!-- Style for Reports -->
        <style type="text/css">
            h1 {
            padding-left: 190px;
            }
        .table {
            border: 1px solid black;
            width: 500px;
        }
        .table-header-cell {
            border-bottom: 1px solid black;
            background-color: silver;
        }
        .cell {
            border-bottom: 1px solid gray;
        }
        .description-cell {
            border-bottom: 1px solid gray;
        }
        </style>
    </head>
    <!-- code for Z-Report -->
    <body style="text-align: center">
        <h1 class="header" style="margin-left: -200px">
            Z Report
        </h1>
        <table class="table" cellspacing="0" style="margin-left: auto; margin-right: auto">
            <thead>
                <!-- Collumn Headers -->
                <tr>
                    <td class="table-header-cell">
                    Sales and Tax Summary
                    </td>
                    <td class="table-header-cell">
                        Daily Sales
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr class="values">
                    <td class="cell">
                        Total Sales:
                    </td>
                    <td class="description-cell">
                        <?php
                        // 530 is a simulated value for "daily fees" (i.e someone payong to use the gym for the day)
                          echo "$" . round(($totalSales + 530 + $classTotals )*1.08, 2);
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Tax:
                    </td>
                    <td class="description-cell">
                    <?php    
                    // +530 from simulating daily fees
                    echo "$" . round(($totalSales + 530 + $classTotals)*.08, 2); 
                    ?>              
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Total Sales:
                    </td>
                    <td class="description-cell">
                        <?php 
                         // +530 from simulating daily fees
                         echo "$" . round($totalSales + 530 + $classTotals, 2);
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Debit:
                    </td>
                    <td class="description-cell">
                        <!-- *debit total simulated* -->
                        <?php 
                         // +530 from simulating daily fees
                        echo "$" . round(($totalSales + 530 + $classTotals)*1.08*.7, 2);
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Credit:
                    </td>
                    <td class="description-cell">
                        <!-- *credit total simulated* -->
                        <?php 
                        echo "$" . round(($totalSales + 530 + $classTotals)*1.08*.3, 2);
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Discounts:
                    </td>
                    <td class="description-cell">
                        <!-- *total discounts simulated* -->
                        <?php 
                        echo "$" . round($totalSales*.10, 2); 
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Equipment:
                    </td>
                    <td class="description-cell">
                        <!-- *total from equp sales* -->
                        <?php 
                        echo "$" . round($totalSales, 2);
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Classes:
                    </td>
                    <td class="description-cell">
                        <!-- *amount from classes* -->
                        <?php 
                          echo "$" . $classTotals;
                        ?>
                    </td>
                </tr>
                <tr class="values">
                    <td class="cell">
                        Daily Gym Fee:
                    </td>
                    <td class="description-cell">
                        <!-- *simulated amount from non-members paying per day* -->
                        <?php 
                        echo "$530.00";
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- table for product detail -->
        <html>
    <head>
    </head>
    <body>

        <h1 class="header" style="margin-left: -200px">
         Equipment
        </h1>
          <!-- Collumn Headers -->
        <table class="table" cellspacing="0" style="margin-left: auto; margin-right: auto">
            <thead>
                <tr>
                    <td class="table-header-cell">
                        Item Code
                    </td>
                    <td class="table-header-cell">
                        Item Name
                    </td>
                    <td class="table-header-cell">
                        Price
                    </td>
                    <td class="table-header-cell">
                        Quantity
                    </td>
                    <td class="table-header-cell">
                        Total Amount
                    </td>
                </tr>
            </thead>
            <tbody>
            <?php
        while ($rows = $result->fetch_assoc()) {
            $rows2 = $result2->fetch_assoc();
            //var_dump($rows);
            // echo $rows['PROD_ID'];
        ?>
        <div>
          <tbody>
                <tr class="values">
                    <td class="cell">
                    <h5><?php 
                    // displaying the item code
                    $ids = array($rows['PROD_ID']);
                    $index = 0;
                    echo $ids[$index];
                    ?></h5>
                    </td>
                    <td class="description-cell">
                    <h5><?php 
                    // displaying the item name
                    echo $rows['prod_name']; ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // displaying the item price
                    echo $rows['prod_price']; ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // getting and displaying the total times each item was rented (sales)
                    $sql ="SELECT SUM(quantity) AS quant FROM cart_items WHERE PROD_ID = $ids[$index]";
                    $result3 = mysqli_query($dbconn, $sql);
                    while($row3 = mysqli_fetch_assoc($result3))
                    {
                        echo $row3['quant'];
                    }
                    ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // displays the total amount of sales from each item
                    $sql ="SELECT SUM(item_cost) AS total FROM cart_items WHERE PROD_ID = $ids[$index]";
                    $result4 = mysqli_query($dbconn, $sql);
                    while($row4 = mysqli_fetch_assoc($result4))
                    {
                        echo "$" . $row4['total'];
                    }
                    // increments to next item
                    $index++;
                    ?></h5>
                    </td>
                </tr> 
            </tbody>
                        </div>
                </form>
            <?php
        }
            ?>
            </tbody>
        </table>
<!-- Classes -->
<html>
    <head>
    </head>
    <body>
        <!-- Collumn Headers -->
        <h1 class="header" style="margin-left: -200px">
         Classes
        </h1>

        <table class="table" cellspacing="0" style="margin-left: auto; margin-right: auto">
            <thead>
                <tr>
                    <td class="table-header-cell">
                        Class Code
                    </td>
                    <td class="table-header-cell">
                        Class Name
                    </td>
                    <td class="table-header-cell">
                        Occupants
                    </td>
                    <td class="table-header-cell">
                        Cost
                    </td>
                    <td class="table-header-cell">
                        Total Amount
                    </td>
                </tr>
            </thead>
            <tbody>
            <?php
        while ($rows = $resultClasses->fetch_assoc()) {
        ?>
        <div>
          <tbody>
                <tr class="values">
                    <td class="cell">
                    <h5><?php 
                    // displays the class id 
                    $ids = array($rows['CLASS_ID']);
                    $index = 0;
                    echo $ids[$index];
                    ?></h5>
                    </td>
                    <td class="description-cell">
                    <h5><?php 
                    // displays the class name
                    echo $rows['class_name']; ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // displays the current capacity (# people signed up)
                    echo $rows['current_capacity']; ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                        // arbitrary cost for classes 
                        echo "$10";
                    ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // sales (# of people signed up * class cost)
                    echo "$" . $rows['current_capacity']*10;
                    // increments to next class
                    $index++;
                    ?></h5>
                    </td>
                </tr>
            </tbody>
                        </div>
                </form>
            <?php
        }
            ?>
            </tbody>
        </table>
        <!-- Memberships -->
<html>
    <head>
    </head>
    <body>
        <h1 class="header" style="margin-left: -200px">
         Memberships
        </h1>
        <!-- Collumn Headers -->
        <table class="table" cellspacing="0" style="margin-left: auto; margin-right: auto">
            <thead>
                <tr>
                    <td class="table-header-cell">
                        Membership Type
                    </td>
                    <td class="table-header-cell">
                        Membership cost
                    </td>
                    <td class="table-header-cell">
                        Num. Members
                    </td>
                    <td class="table-header-cell">
                        Total Amount
                    </td>
                </tr>
            </thead>
            <tbody>
        <div>
          <tbody>
                <tr class="values">
                    <td class="cell">
                    <h5><?php 
                    echo "Basic Member";
                    ?></h5>
                    <td class="cell">
                    <h5><?php 
                    // no payments for basic members 
                    echo "$0";?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                        echo $numBasicMembers;
                    ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    echo "$0";
                    ?></h5>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="values">
                    <td class="cell">
                    <h5><?php 
                    echo "Premium-Monthly";
                    ?></h5>
                    <td class="cell">
                    <h5><?php 
                    // monthly cost for premium members
                    echo "$25";?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                        echo $numPremium;
                    ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // monthly sales for premium memberships
                    echo "$". $numPremium*25 . "/month";
                    ?></h5>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr class="values">
                    <td class="cell">
                    <h5><?php 
                    echo "Premium-Yearly";
                    ?></h5>
                    <td class="cell">
                    <h5><?php echo 
                    // $270 is the yearly fee
                    "$270";?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                    // this is an arbitrary number representing the number of members who paid yearly (we currently do not have this available in the db)
                        echo "6";
                    ?></h5>
                    </td>
                    <td class="cell">
                    <h5><?php 
                     echo "$" . 6*270 . "/year";
                    ?></h5>
                    </td>
                </tr>
            </tbody>
                        </div>
                </form>
            </tbody>
        </table>
    </body>
</html>