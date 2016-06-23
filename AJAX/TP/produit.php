<?php
require_once('conn.php');
?>
<?php
if(isset($_GET['ID_CAT']))
    $idCat = $_GET['ID_CAT'];
else{
    $idCat= 1;
}

$req = "SELECT * FROM produits WHERE ID_CAT=$idCat";
$rs = mysqli_query($conn, $req);
?>
<table>
    <tr>
        <th>ID</th><th>DES</th><th>PRIX</th>
        <th>QUANTITE</th><th>PROMO</th>
    </tr>
    <?php
    while($q = mysqli_fetch_assoc($rs)){?>
        <tr>
            <td><?php echo ($q['ID_PROD'])?></td>
            <td><?php echo ($q['DESIGNATION'])?></td>
            <td><?php echo ($q['PRIX'])?></td>
            <td><?php echo ($q['QUANTITE'])?></td>
            <td><?php echo ($q['PROMO'])?></td>
        </tr>
    <?php }  ?>
</table>