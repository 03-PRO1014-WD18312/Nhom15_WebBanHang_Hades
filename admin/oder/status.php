<div class="row form-role d-grid gap-2 container">
<?php
    if(isset($check)&&$check!= ""){
    ?>
    <div class="alert alert-success d-flex align-items-center col-12" role="alert">
        <?=$check?>
    </div>
    <?php }
?>
        <!-- Your success message goes here -->
    </div>
    <form action="index.php?act=editStatus" method="POST" class="form-role row">
        <select name="status" id="my_select" class="btn btn-outline-primary btn-lg btn-block col-9">
           <?php foreach($loadOrder as  $load):?>
            <?php if($load['deli_status'] == "Processing"):?>
            <option value="Delivering" selected>Delivering</option>
            <option value="Delivered">Delivered</option>
            <?php else:?>
            <option value="Delivering">Delivering</option>
            <option value="Delivered" selected>Delivered</option>
            <?php endif;?>
            <input type="hidden" value="<?=$load['order_id']?>" name="id">
           <?php endforeach;?>
        </select>
        <button type="submit" name="btnStatus" class="ml-1 col-2 btn btn-primary btn-lg">Update</button>
    </form>
</div>
