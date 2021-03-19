<?php
$cssLink = "../../../../public/scss/add.css";
$title = "Stores";
$active= "store";
?>

<?php $idStore = $_GET['idS']; ?>
<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<?php include_once '../../../callBack/storeShow.php';?>

<main>
    <section class="addSection">
        <div class="addForm">
            <h1 class="bigTitle">Update Store</h1>
            <form action="../../../callBack/storeUpdate.php" method="POST" enctype="multimedia">
                <input type="text" class="inputs" hidden name="idS" value="<?php echo $store[0]->id ?>">
                <div class="form-input">
                    <label for="" class="text">Store Name</label>
                    <input type="text" class="inputs" name="name" value="<?php echo $store[0]->name ?>">
                </div>
                <div class="form-input">
                    <label for="" class="text">Store Address</label>
                    <textarea type="text" class="inputs textArea" rows="13" name="address"><?php echo $store[0]->address ?></textarea>
                </div>
                <div class="form-input">
                    <label for="" class="text">Store Capacity</label>
                    <input type="number" min="1" class="inputs" name="capacity" value="<?php echo $store[0]->capacity ?>">
                </div>
                <div class="form-input imageUpload">
                    <div class="lastImage">
                        <img src="<?php echo $store[0]->image ?>" alt="">
                    </div>
                    <div class="uploadArea">
                        <label for="upl" class="text upload">
                            <svg class="icon">
                                <use href="../../../../public/assets/icones/svg_icones.svg#upload" />
                            </svg>
                            Upload Image
                        </label>
                        <input type="file" id="upl" name="image" class="uploadBtn" value="<?php echo $store[0]->image ?>">
                    </div>
                </div>
                <button class="updateBtn" type="submit">Update Store</button>
            </form>
        </div>
        <div class="image">
            <img src="../../../../public/assets/images/Asset 1.svg" alt="">
        </div>
    </section>
    <?php include_once '../../../include/navbar.php';?>
</main>

<script>
    const search = document.querySelector('.search');
    const showBtn = document.querySelector('.showBtn');
    showBtn.addEventListener('click', () => {
        search.classList.toggle("searchStretch");
        showBtn.style.display = "none";
    });

    function reportWindowSize() {
        w = window.innerWidth;
        if (w >= 1025) {
            showBtn.style.display = "none";
            search.classList.remove("searchStretch");
        } else {
            showBtn.style.display = "inline-block";
        }
    }

    window.onresize = reportWindowSize;
</script>

<?php include_once '../../../include/htmlEnd.php';?>