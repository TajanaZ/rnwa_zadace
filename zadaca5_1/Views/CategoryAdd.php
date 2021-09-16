<h1>Add new category</h1>

<?php
/** @var $data */
//print_r($data);
?>

<div class="container">
    <form action="titles" method="post">
        <div class="row">
            <label for="name">Naziv</label>
            <input type="text" class="form-control" name="category_name">
        </div>
        <br><br>
        <div class="row">
            <br><br>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>