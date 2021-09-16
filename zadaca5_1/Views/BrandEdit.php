<h1>Edit brand</h1>

<?php
/** @var $data */
//print_r($data);
?>

<div class="container">
    <form action="brands_update" method="post">
        <input type="hidden" name="brand_id" value="<?= $data['brand']->brand_id ?>">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <label for="name">Naziv</label>
            <input type="text" class="form-control" name="brand_name"  value="<?= $data['brand']->brand_name ?>">
        </div>
        <div class="row">
            <br><br>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>