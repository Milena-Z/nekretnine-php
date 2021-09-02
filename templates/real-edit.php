<?php include 'inc/header.php';?>
    <h2 class="page-header">Edituj oglase za nekretnine</h2>
    <form method="POST" action="edit.php?id=<?php echo $realestate -> id; ?>"">
        <div class="form-group">
            <label>Kompanija</label>
            <input type="text" class="form-control" name="company" value="<?php echo $realestate -> company; ?>">
        </div>
        <div class="form-group">
            <label>Kategorija</label>
            <select type="text" class="form-control" name="category">
                <?php foreach($categories as $category): ?>
                    <?php if($realestate -> category_id == $category_id) :?>
                        <option value="<?php echo $category -> id ?>" selected ><?php echo $category -> name; ?></option>
                    <?php else :?>
                        <option value="<?php echo $category -> id ?>"><?php echo $category -> name; ?></option>
                    <?php endif;?>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label>Naziv nekretnine</label>
            <input type="text" class="form-control" name="realestate_title" value="<?php echo $realestate -> realestate_title; ?>">
        </div>
        <div class="form-group">
            <label>Opis</label>
            <textarea class="form-control" name="description">value="<?php echo $realestate -> description; ?>"</textarea>
        </div>
        <div class="form-group">
            <label>Lokacija</label>
            <input type="text" class="form-control" name="location" value="<?php echo $realestate -> location; ?>">
        </div>
        <div class="form-group">
            <label>Cena</label>
            <input type="text" class="form-control" name="price" value="<?php echo $realestate -> price; ?>">
        </div>
        <div class="form-group">
            <label>Kontakt agent</label>
            <input type="text" class="form-control" name="contact_agent" value="<?php echo $realestate -> contact_agent; ?>">
        </div>
        <div class="form-group">
            <label>Kontakt Email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $realestate -> contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Postavi" name="submit">
        <br><br>
    </form>
<?php include 'inc/footer.php';?>