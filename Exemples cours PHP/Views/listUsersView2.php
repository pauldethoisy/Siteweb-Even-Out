<?php
$title="Liste des utilisateurs";
ob_start();
?>
<table>
    <?php
    while($user = mysqli_fetch_assoc($result)) {
        ?>
    <tr>
        <td>
                <?php echo $user['nom']; ?>
        </td>
        <td>
                <?php echo $user['prenom']; ?>
        </td>
        <td>
                <?php echo '<a href="index4.php?action=modifier&id='.$user['id'].'">modifier</a>'; ?>
        </td>
    </tr>
        <?php }
    mysqli_free_result($result); ?>

</table>
<a href="index4.php?action=ajouter">ajouter</a>
<?php
$contenu = ob_get_clean();
include 'gabarit.php';
?>