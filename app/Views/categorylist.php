<?php 
     $session = session();

    $this->extend('/templates/main_template');

    $this->section('content');

    
 
?>

    <!-- attempting to display data from database -->

    <!-- end of displaying from database -->

    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <p>All categories</p>
            </div>
        </div>
    </section>    

    <div class="container-fluid">
        <?php if(isset($categories)) { ?>
            <div class="row justify-content-center">
                <?php foreach($categories as $category){ ?>
                    <a class="col-3 m-3" href="catalogue/categorycatalogue/<?php echo $category['category_id']?>">
                        <div class="card bg-dark text-white">
                            <img src="../../public/uploads/frame5.png" class="card-img" alt="Category image">
                            <div class="card-img-overlay">
                                <h5 class="card-title text-center my-5"><?php echo $category["category_name"] ?></h5>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="row">
                <p style="text-align: center; font-size: 2em;"><b>There are no categories</b></p>   
                <a href="/" style="width: 40vw; padding: 10px; margin: 0 auto; text-align: center; font-size: 2em; text-decoration: none; background: black; color: white; border-radius: 20px;">Return to home page</a>   
            </div>
        <?php } ?>
    </div>
    <?php $this->endSection();?>
