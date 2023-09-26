<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $cliente->nome; ?></title>
</head>
<body>

    
</body>
</html>

<div class='div-all'>
    <div class='div-head'>
        <H1><?php echo $cliente->nome; ?></H1>
    </div>
    <div class='div-body'>
    
        <?php 
            if($vendas){
                echo 'sim';
            }else{
                echo 'nao';
            }
            //if($vendas){
            //    echo '<table>
            //            <tr>
            //                <td>id</td>
            //                <td>Total</td>
            //                <td>Status</td>
            //                <td></td>
            //            </tr>';
            //    foreach($vendas as $venda){
            //        if($venda->status == 0) {
            //            $status = 'Em Aberto';
            //        }
            //        else {
            //            $status = 'Concluída';
            //        };
            //        echo '<tr>
            //                <td>'.$venda->id.'</td>
            //                <td>R$'.$venda->total.'</td>
            //                <td>'.$status.'</td>
            //                <td><a href="/venda/'.$venda->id.'">detalhe</a></td>
            //            </tr>';
            //    }
            //    echo '</table>';
            //}
            //else{
            //    echo '<p>Este Cliente não fez nenhuma compra ou orçamento na loja</p>';
            //    echo '</table>';
            //};

        ?>
    </div>
</div>


<?php
//echo '<h1>'.$cliente->nome.'</h1><br><table>
//        <tr>
//            <td>Id</td>
//            <td>Nome</td>
//            <td>Email</td>
//            <td></td>
//        </tr>';
//foreach($clientes as $cliente){
//    echo '<tr>';
//    echo '<td>'.$cliente->id.'</td>';
//    echo '<td>'.$cliente->nome.'</td>';
//    echo '<td>'.$cliente->email.'</td>';
//    echo '<td><a href=http://127.0.0.1:8000/cliente/'.$cliente->id.'>detalhe</a></td></tr>';
//}
//echo '</table>';
//
?>