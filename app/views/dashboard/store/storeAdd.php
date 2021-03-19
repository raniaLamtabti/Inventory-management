<?php
$cssLink = "../../../../public/scss/add.css";
$title = "Stores";
$active= "store";
?>

<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>


<main>
    <section class="addSection">
        <div class="addForm">
            <h1 class="bigTitle">Add Store</h1>
            <form action="../../../callBack/storeCreate.php" method="POST" enctype="multimedia">
                <div class="form-input">
                    <label for="" class="text">Store Name</label>
                    <input type="text" class="inputs" name="name">
                </div>
                <div class="form-input">
                    <label for="" class="text">Store Address</label>
                    <textarea type="text" class="inputs textArea" rows="13" name="address"></textarea>
                </div>
                <div class="form-input">
                    <label for="" class="text">Store Capacity</label>
                    <input type="number" min="1" class="inputs" name="capacity">
                </div>
                <div class="form-input">
                    <label for="upl" class="text upload">
                        <svg class="icon">
                            <use href="../../../../public/assets/icones/svg_icones.svg#upload" />
                        </svg>
                        Upload Image
                    </label>
                    <input type="file" id="upl" min="1" class="uploadBtn" name="image">
                </div>
                <button class="primaryBtn" type="submit">Add Store</button>
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