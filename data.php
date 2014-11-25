<?php
	require('config/connect.php');
	require('templates/header.php');

	$query = 'SELECT * FROM Kurser';

	$result = mysql_query($query);

	echo '<div id="content">';
	echo '<table>';
	echo '<tr><th>Namn</th><th>U</th><th>3</th><th>4</th><th>5</th></tr>';

	while($row = mysql_fetch_array($result))
	{
		echo '<tr><td>' . $row['Namn'] . '</td><td>' . $row['U'] . '</td><td>' 
				. $row['3'] . '</td><td>' . $row['4'] . '</td><td>' . $row['5'] . '</td></tr>';
	}

	echo '</table>';
	echo '</div>';
	echo '<div id="sidebar">uis aute irure dolor in reprehenderit in voluptate velit esse
			ciaecat cupidatat non anim id est laborum. </div>';

	require('templates/footer.php');