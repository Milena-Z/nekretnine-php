<?php include 'inc/header.php';?>
<h2 class="page-header"><?php echo $realestate -> realestate_title; ?>(<?php echo $realestate -> location; ?>)</h2>
<small>Objavio <?php echo $realestate -> contact_agent;?> on <?php echo $realestate-> post_date;?></small>
<hr>
<p class="lead"><?php echo $realestate -> description; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Kompanija:</strong> <?php echo $realestate -> company; ?></li>
    <li class="list-group-item"><strong>Cena:</strong> <?php echo $realestate -> price; ?></li>
    <li class="list-group-item"><strong>Kontakt Email:</strong> <?php echo $realestate -> contact_email; ?></li>
</ul>
<br><br>
<a href="index.php">Idi nazad</a>
<br><br>
<div class="well">
    <a href="edit.php?id=<?php echo $realestate -> id ?>" class="btn btn-success">Edit</a>

    <form style="display: inline;" method="POST" action="realestate.php">
        <input type="hidden" name="del_id" value="<?php echo $realestate -> id; ?>">
        <input type="submit" class="btn btn-danger" value="Obriši">
    </form>
</div>
<br>
<?php include 'inc/footer.php';?>