<?php
$cssLink = "../../../../public/scss/add.css";
$cssMain = "../../../../public/scss/main.css";
$title = "Products";
$active= "product";
?>
<?php $idProduct = $_GET['id']; ?>

<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<?php include_once '../../../callBack/readProduct.php';?>
<?php include_once '../../../callBack/readCategories.php';?>
<?php include_once '../../../callBack/productShow.php';?>

<main>
    <section class="addSection">
        <div class="addForm">
            <h1 class="bigTitle">Update Product</h1>
            <form action="../../../callBack/productUpdate.php" method="POST" id="product">
                <input type="text" hidden class="inputs" name="id" value="<?php echo $product->id ?>" />
                <div class="form-input">
                    <label for="" class="text">Product Code</label>
                    <input type="text" class="inputs" name="code" value="<?php echo $product->code ?>" />
                </div>
                <div class="form-input">
                    <label for="" class="text">Product Name</label>
                    <input type="text" class="inputs" name="name" value="<?php echo $product->name ?>">
                </div>
                <div class="form-input">
                    <label for="" class="text">Product Category</label>
                    <select name="category" id="" class="inputs">
                        <?php
                        foreach($categories as $category){
                        ?>
                        <option value="<?php echo $category->id ?>" <?php if($product->idCategory == $category->id) echo "selected" ?>><?php echo $category->name?></option>
                        <?php
                        }
                        ?>              
                    </select>
                </div>
                <div class="form-input">
                    <label for="" class="text">Sale Price</label>
                    <input type="text" class="price inputs" name="priceBuy" value="<?php echo $product->priceBuy ?>">
                    <span class="errorSpan">. The sale price is incorrect</span>
                </div>
                <div class="form-input">
                    <label for="" class="text">Our Price</label>
                    <input type="text" class="price inputs" name="priceSale" value="<?php echo $product->priceSale ?>">
                    <span class="errorSpan">. Your price is incorrect</span>
                </div>
                <div class="buttons">
                    <button class="updateBtn" type="button" id="submitBtn">Update Product</button>
                    <a class="secondaryBtn" href="ProductQtyEdit.php?idP=<?php echo $product->id ?>">Update Quantity</a>
                </div>
            </form>
        </div>
        <div class="image">
            <img src="../../../../public/assets/images/Asset 1.svg" alt="">
        </div>
    </section>
    <?php include_once '../../../include/navbar.php';?>
</main>

<script>
        const pricePattern = /^\d*(\.\d+)?$/;

        var formProduct = document.querySelector("#product");
        var submitBtn = document.querySelector("#submitBtn");

        submitBtn.addEventListener('click', (e) => {
            e.preventDefault();
            input = formProduct.querySelectorAll('.form-input .price');
            var sub = 0;
            input.forEach((e) => {
                if (!pricePattern.test(e.value)) {
                    e.nextElementSibling.style.display = "inline";
                    sub += 1;
                } else {
                    e.nextElementSibling.style.display = "none";
                    
                }
            })
            if(sub == 0){
                formProduct.submit();
            }
    sub = 0;            
        })
    </script>

<?php include_once '../../../include/htmlEnd.php';?>