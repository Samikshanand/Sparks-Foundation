<?php
  include 'nav.php';
?>

	<div class="container">
    <br>
        <br>
        <br>
        <h1>Transaction History</h1>
        <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
           
                
        <?php
            }

        ?>
        </tbody>
    </table>
    
    
    </div>
</div>
<div class="footer" width=100%>
            <center> Designed and Developed by <b>Samiksha Nand </b>for the project of <b>The Sparks Foundation</b> </center>
    </div>

</body>
</html>