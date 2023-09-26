<?php
echo '<table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td></td>
        </tr>';
foreach($clientes as $cliente){
    echo '<tr>';
    echo '<td>'.$cliente->id.'</td>';
    echo '<td>'.$cliente->nome.'</td>';
    echo '<td>'.$cliente->email.'</td>';
    echo '<td><a href=/cliente/'.$cliente->id.'>detalhe</a></td></tr>';
}
echo '</table>';

?>