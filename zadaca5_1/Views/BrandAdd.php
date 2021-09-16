<h1>Add new brand</h1>

<?php
/** @var $data */
//print_r($data);
?>

<div class="container">
    <form action="brands" method="post">
        <div class="row">
            <label for="brand_name">Naziv</label>
            <input type="text" class="form-control" name="brand_name">
        </div>
        <br><br>
        <div class="row">
            <br><br>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>