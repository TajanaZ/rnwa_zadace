<h1>Edit category</h1>

<?php
/** @var $data */
//print_r($data);
?>

<div class="container">
    <form action="categories_update" method="post">
        <input type="hidden" name="category_id" value="<?= $data['category']->category_id ?>">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <label for="name">Tip</label>
            <input type="text" class="form-control" name="category_name"  value="<?= $data['category']->category_name ?>">
        </div>
        <div class="row">
            <br><br>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>