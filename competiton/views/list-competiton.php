<table id="myTable">
        <tr>
                <th onclick="sortTable(0)">Nom</th>
                <th onclick="sortTable(1)">Nom_c_s</th>
                <th onclick="sortTable(2)">Heure</th>
                <th onclick="sortTable(3)">Date</th>
                <th onclick="sortTable(4)">Cout</th>
                <th onclick="sortTable(5)">Type</th>
                                    
        </tr>
        <?php
        foreach ($listeCompetiton as $row ) {
        ?>                                    
        <tr>
            <td><?php echo $row['nom']; ?> </td>
            <td><?php echo $row['nom_c_s']; ?> </td>
            <td><?php echo $row['heure']; ?> </td>
            <td><?php echo $row['date']; ?> </td>
            <td><?php echo $row['cout']; ?> </td>
            <td><?php echo $row['type']; ?> </td>