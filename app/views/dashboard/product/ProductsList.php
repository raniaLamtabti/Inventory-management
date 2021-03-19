<?php
$cssLink = "../../../../public/scss/products.css";
$title = "Products";
$active= "product";
?>

<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<?php include_once '../../../callBack/readProduct.php';?>

<?php 
    require_once '../../../classes/category.php';
    $categoryVar = new Category;
?>

<?php 
    require_once '../../../classes/quantity.php';
    $quantityVar = new Quantity;
    

?>

<main>
    <section class="product">
        <div class="topBar">
            <div class="search">
                <input type="text" class="inputs searchInput">
                <button class="searchBtn btn">
                    <svg class="icon">
                        <use href="../../../../public/assets/icones/svg_icones.svg#search" />
                    </svg>
                </button>
                <button class="btn showBtn">
                    <svg class="icon">
                        <use href="../../../../public/assets/icones/svg_icones.svg#search" />
                    </svg>
                </button>
            </div>
            <div class="add">
                <a href="../product/ProductAdd.php" class="secondaryBtn">+ <span> New Product</span></a>
            </div>
        </div>
        <div class="main_bar">
            <p>Code</p>
            <p>Name</p>
            <p class="ctgries">Category</p>
            <p class="ctgries">Quantity</p>
            <p class="ctgries">Sale.P</p>
            <p class="ctgries">Our.P</p>
            <div class="actnicn">
                <svg class="icon1">
                <use href="public/assets/icones/svg_icones.svg#delete" />
              </svg>
                <a href="updateProduct.html">
                    <svg class="icon2">
                  <use href="public/assets/icones/svg_icones.svg#menu" />
                </svg>
                </a>
                <svg class="icon3">
                <use href="public/assets/icones/svg_icones.svg#arrow-down-sign-to-navigate"/>
              </svg>
            </div>
        </div>
        <?php
        foreach($products as $product){
        ?>
        <div class="bar">
            <div class="lable_container">
                <p><?php echo $product->code ?></p>
                <p><?php echo $product->name ?></p>
                <p class="ctgries"><?php $category = $categoryVar->show($product->idCategory); echo $category->name?></p>
                <p class="ctgries"><?php $quantityVar->countByProductId($product->id);?></p>
                <p class="ctgries"><?php echo $product->priceBuy ?></p>
                <p class="ctgries"><?php echo $product->priceSale ?></p>
                <div class="actnicn">
                    <a href="../../../callBack/productDelete.php?id=<?php echo $product->id ?>">
                        <svg class="icon1">
                            <use href="../../../../public/assets/icones/svg_icones.svg#delete" />
                        </svg>
                    </a>
                    <a href="../product/ProductEdit.php?id=<?php echo $product->id ?>">
                        <svg class="icon2">
                        <use href="../../../../public/assets/icones/svg_icones.svg#menu" />
                        </svg>
                    </a>
                    <svg class="icon3" onclick="collaps()">
                        <use href="../../../../public/assets/icones/svg_icones.svg#arrow-down-sign-to-navigate"/>
                    </svg>
                </div>
            </div>
            <div class="content">
                <div class="labsOne labs">
                    <div class="lables">
                        <p class="pinky">Category</p>
                        <p class="subbie">USB chargers</p>
                    </div>
                    <div class="lables">
                        <p class="pinky">Quantity</p>
                        <p class="subbie">8000</p>
                    </div>
                </div>
                <div class="labsTwo labs">
                    <div class="lables">
                        <p class="pinky">Sale price</p>
                        <p class="subbie">1.70 USD</p>
                    </div>
                    <div class="lables">
                        <p class="pinky">Our price</p>
                        <p class="subbie">3.00 USD</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </section>
    <?php include_once '../../../include/navbar.php';?>
</main>

<script>
    const icon = document.querySelector('.icon3');
    const bar = document.querySelector('.bar');

    function collaps() {
        icon.classList.toggle("iconRotation");
        bar.classList.toggle("barToggle");
    }
</script>

<?php include_once '../../../include/htmlEnd.php';?>