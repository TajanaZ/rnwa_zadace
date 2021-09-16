<h1>Categories</h1>

<?php
/** @var $data */
?>

<div style="overflow-x:auto;">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Naziv</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($data['brands'] as $row): ?>
            <tr>
                <td><?php echo $row->category_id ?></td>
                <td><?php echo $row->category_name ?></td>
                <td><a href="categories_edit?category_id=<?php echo $row->category_id ?>" class="btn btn-primary btn-xs"> Edit</a>
                </td>
                <td>
                    <form action="categories_delete" method="post">
                        <input name="hidden" name="_method" value="DELETE">
                        <input name="hidden" name="category_id" value="<?= $row->category_id ?>">
                        <input name="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>



