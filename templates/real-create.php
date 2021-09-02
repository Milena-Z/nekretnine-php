<?php include 'inc/header.php';?>
    <h2 class="page-header">Kreiraj oglas</h2>
    <form method="POST" action="create.php">
        <div class="form-group">
            <label>Kompanija</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group">
            <label>Kategorija</label>
            <select type="text" class="form-control" name="category">
                <option value="0">Izaberi kategoriju</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category -> id ?>"><?php echo $category -> name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label>Naziv nekretnine</label>
            <input type="text" class="form-control" name="realestate_title">
        </div>
        <div class="form-group">
            <label>Opis</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Lokacija</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label>Cena</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label>Kontakt agenta</label>
            <input type="text" class="form-control" name="contact_agent">
        </div>
        <div class="form-group">
            <label>Kontakt Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type="submit" class="btn btn-success" value="Postavi" name="submit">
        <br><br>
    </form>
<?php include 'inc/footer.php';?>