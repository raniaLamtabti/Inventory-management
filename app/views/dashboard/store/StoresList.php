<?php
$cssLink = "../../../../public/scss/store.css";
$cssMain = "../../../../public/scss/main.css";
$title = "Stores";
$active= "store";
?>
<?php include_once '../../../include/htmlStart.php';?>
<?php include_once '../../../include/headerTwo.php';?>
<?php include_once '../../../callBack/storeRead.php';?>


<main>
    <section class="store">
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
                <a href="storeAdd.php" class="secondaryBtn">+ <span> New Store</span></a>
            </div>
        </div>
        <div class="content">
            <?php
            foreach($stores as $store){
            ?>
            <div class="store">
                <div class="image">
                    <img src="<?php echo $store->image ?>" alt="">
                </div>
                <div class="storeInfo">
                    <h1 class="text name"><?php echo $store->name ?></h1>
                    <p class="smallText"><?php echo $store->address ?></p>
                    <p class="text capacity">Capacity : <span><?php echo $store->capacity ?> Unites</span></p>
                </div>
                <div class="actions">
                    <a href="storeEdit.php?idS=<?php echo $store->id ?>">
                        <svg class="icon edit">
                            <use href="../../../../public/assets/icones/svg_icones.svg#edit" />
                        </svg>
                    </a>
                    <a>
                        <svg class="icon delete">
                            <use href="../../../../public/assets/icones/svg_icones.svg#delete" />
                        </svg>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
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