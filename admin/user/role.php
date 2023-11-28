<div class="row form-role d-grid gap-2 container">
    <?php
    if(isset($check)&&$check!= ""){
    ?>
    <div class="alert alert-success d-flex align-items-center col-12" role="alert">
        <?=$check?>
    </div>
    <?php }
?>
    <form action="index.php?act=role" method="POST" class="form-role row ">

        <select name="role" id="my_select" class="btn btn-outline-primary btn-lg btn-block col-9">
            <?php 
                foreach($loadUser as $user):
                    if($user['role']==0){
                        ?>
            <option value="0" selected>Người dùng</option>
            <option value="1">Admin</option>

            <?php
                    }
                    if($user['role']==1){
                        ?>
            <option value="0">Người dùng</option>
            <option value="1" selected>Admin</option>
            <?php
                    }
                ?>
            <input type="hidden" value="<?=$user['id']?>" name="id">
            <?php endforeach;?>
        </select>
        <button type="submit" name="btnRole" class="ml-1 col-2 btn btn-primary btn-lg">Phân quyền</button>


    </form>


</div>
<!-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Action</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
        </div>
    </div> -->