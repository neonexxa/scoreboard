<?php
  include('./mysqlconnection.php');
 # require_once('../inc/db.php');
/*        if (!preg_match('/^-?[0-9]+$/m', $_GET["id"])) {
                die("ERROR INTEGER REQUIRED");
        }*/
        $sql = "SELECT * FROM users where ID=";
        $sql .= $_GET["id"];

        $result = mysql_query($sql);

        if ($result) {
?>
<!-- http://voice0fblackhat.blogspot.com/2012/01/ultimate-sql-injection-tutorial-for.html -->
<br />
                <table style="width:100%;border-collapse:collapse;border:1px solid black" class='table table-striped'>
      <tr><th>id</th><th>name</th><th>email</th></tr>
                
		<thead><th colspan="3">Database Details</th></thead>
                <?php
		while ($row = mysql_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td style='text-align:center'>".$row['ID']."</td>";
                        echo "<td style='text-align:center'>".$row['username']."</td>";
                        echo "<td style='text-align:center'>".$row['email']."</td>";
                        echo "</tr>";
                }
                echo "</table>";
        }

