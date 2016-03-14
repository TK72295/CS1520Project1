<html>

<head>
        <link href="css/mycss.css" rel="stylesheet">
</head>

<body>
        <!-- Table Creation -->
        <table border = "1" align = "left">
                
                <caption>
        		<h2>Panther Judo Members </h2>
        	</caption>
        	
                <tr>
        		<th>Name</th>
        		<th>Rank</th>
        		<th>Year Joined</th>
        		<th>Position Held</th>
        	</tr>

                <!-- Database access -->
                <?php
                        //If using password
                	//$passlist = file("password.php");
                        //$passwd = rtrim($passlist[0]);

                        $db = new mysqli('localhost', 'root', '', 'kim');

                        if($db->connect_error):
                        	die("Could not connect to db: " . $db->connect_error);
                        endif;

                        //Pull everything from database
                        $queryResult = $db->query("select members.name, members.rank, members.year_joined, members.position from members order by name ASC");
                        $numRows = $queryResult->num_rows;

                        //Loop through each section and display each as a row
                        for($x = 0; $x < $numRows; $x++)
                        {
                        	echo "<tr>";

                        	$row = $queryResult->fetch_array();

                        	echo "<td>";
                        	$name = $row['name'];
                        	echo "$name";
                        	echo "</td>";

                        	echo "<td>";
                        	$rank = $row['rank'];
                        	echo "$rank";
                        	echo "</td>";
                        	
                        	echo "<td>";
                        	$year = $row['year_joined'];
                        	echo "$year";
                        	echo "</td>";

                        	echo "<td>";
                        	if(!is_null($row['position']))
                        	{
                        		$position = $row['position'];
                        	}
                        	else
                        	{
                        		$position = 'Member';
                        	}
                        	echo "$position";
                        	echo "</td>";
                        }
                ?>

        </table>
</body> 
</html>