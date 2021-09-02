<?php include 'inc/header.php';?>
<div class="container">
    <div class="jumbotron">
        <h1>Pronađi nekretninu</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Izaberi kategoriju</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category -> id ?>"><?php echo $category -> name; ?></option>
                <?php endforeach;?>
            </select>
            <br>
            <input type="submit" class="btn btn-success" value="TRAŽI">
        </form>
    </div>
    <h3><?php echo $title; ?></h3>
    <?php foreach($realestates as $realestate) : ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?php echo $realestate -> realestate_title ?></h4>
            <p><?php echo $realestate -> description ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-secondary" href="realestate.php?id=<?php echo $realestate ->id; ?>">Pogledaj</a>
        </div>
    </div>



    <?php endforeach;?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

            <script type="text/javascript">
            
            $(document).ready(function(){
                $('a#button').click(function(){
                    $.ajax({
                        url: this.href,
                        type: 'GET',
                        dataType: 'html',
                        success: function (data) {
                            $('#container').html(data);
                        }
                    });
                });
            });
</script>
<?php include 'inc/footer.php';?>