<?php
$cssLink = "../../../../public/scss/updateQty.css";
$title = "Products";
$active= "product";
?>
<?php $idProduct = $_GET['idP']; ?>

<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<?php include_once '../../../callBack/storeRead.php';?>
<?php include_once '../../../callBack/quantityRead.php';?>
<?php 
    require_once '../../../classes/store.php';
    $storeVar = new Store;
    
?>

<main>
    <section class="updateSection">
        <h1 class="bigTitle">Update Quantity By Store</h1>
        <div class="content">
            <div class="updateForm">
                <form  action="../../../callBack/quantityUpdate.php" method="POST">
                    <input type="text" value="<?php echo $idProduct ?>" hidden class="inputs" name="idProduct">
                    <div class="form-input">
                        <label for="" class="text">Store</label>
                        <select name="idStore" id="" class="inputs">
                            <?php
                            foreach($stores as $store){
                            ?>
                            <option value="<?php echo $store->id ?>"><?php echo $store->name?></option>
                            <?php
                            }
                            ?>  
                        </select>
                    </div>
                    <div class="form-input">
                        <label for="" class="text">Quantity</label>
                        <input type="number" min="1" class="inputs" name="quantity">
                    </div>
                    <button class="updateBtn" type="submit">Update Quantity</button>
                </form>
                <div class="image">
                    <img src="public/assets/images/Asset 1.svg" alt="">
                </div>
            </div>
            <table class="qtyList">
                <thead>
                    <tr>
                        <th class="smallerTitle">Store</th>
                        <th class="smallerTitle">Qty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($quantities as $quantity){
                    ?> 
                    <tr>
                        <th class="smallerTitle"><?php $store = $storeVar->show($quantity->idStore); echo $store[0]->name ?></th>
                        <th class="smallerTitle"><?php echo $quantity->quantity?> Units</th>
                    </tr>
                    <?php
                    }
                    ?> 
                </tbody>
            </table>
        </div>
    </section>
    <?php include_once '../../../include/navbar.php';?>
</main>

<?php include_once '../../../include/htmlEnd.php';?>