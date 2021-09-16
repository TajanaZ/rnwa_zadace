<h1>Brands</h1>

<?php
/** @var $data */
//print_r($data);
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
                <td><?php echo $row->brand_id ?></td>
                <td><?php echo $row->brand_name ?></td>
                <td><a href="brands_edit?brand_id=<?php echo $row->brand_id ?>" class="btn btn-primary btn-xs"> Edit</a>
                </td>
                <td>
                    <form action="brands_delete" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="brand_id" value="<?= $row->brand_id ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>



