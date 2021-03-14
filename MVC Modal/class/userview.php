<?php

class Userview extends Usermodal{

    public function viewuser(){
        $result = $this->getuser();
        echo"<table class='table'>";
        echo "<tr><th>Id</th><th>first_nam </th> <th>last_name</th><th>country</th></tr>";
        echo '<tr>';
        foreach( $result as $row){

           echo "<tr>

            <td> ".$row['id']."</td>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['country']."</td>
          </tr>";

           
        
        }
     

        echo"</table>";



    }

    




}



