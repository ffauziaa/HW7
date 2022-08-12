<?php
/*
Products
- id
- name
- capacity
- quality
- colour
- price
*/


$db_connection = new mysqli('localhost:3307', 'root', 'root', 'products');

//$query = ' INSERT INTO phone (id, name, capacity, quality, colour, price  ) VALUES (3,"iPhone XS","64GB","very good","Silver",389) ';
//$query = ' UPDATE phone SET capacity="64GB" WHERE id=2';
//$query = ' DELETE FROM phone WHERE id=3 ';
//$query = ' SELECT * FROM phone WHERE name="iPhone13" ';

$query = ' SELECT * FROM phone ';
$result = $db_connection->query($query);

$data = $result->fetch_all(MYSQLI_ASSOC);
?>

<table  cellpadding="5" border="2" bordercolor=black>
	<tr bgcolor="#dddddd">
		<th>ID</th>
		<th>Name</th>
		<th>Capacity</th>
		<th>Quality</th>
		<th>Colour</th>
        <th>Price </th>
	</tr>

	<tbody>

		<?php 
			
			foreach($data as $record){

				echo 	'<tr>
							<td>'. $record['id'] .'</td>
							<td>'. $record['name'] .'</td>
							<td>'. $record['capacity'] .'</td>
                            <td>'. $record['quality'] .'</td>
							<td>'. $record['colour'] .'</td>
							<td>'. $record['price'] .'</td>
						</tr>';

			}

		?>

	</tbody>
</table>
