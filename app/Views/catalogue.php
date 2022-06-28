<?php 
     $session = session();

    $this->extend('/templates/catalogue_template');

    $this->section('content');

    
 
?>

    <!-- attempting to display data from database -->

    <!-- end of displaying from database -->

    <!-- this section is the one above the navigation -->
    <section class="top">

        <div class="row">
            <div class="top-bar">
                <?php if(isset($categories["category_name"])){ ?>
                    <p><?php echo $categories["category_name"]; ?></p>
                <?php } elseif(isset($categories["subcategory_name"])) { ?>
                    <p><?php echo $categories["subcategory_name"]; ?></p>
                <?php } else { ?>
                    <p>All vehicles</p>
                <?php } ?>
            </div>
        </div>
    </section>    

    <section class="frames">
        <div class="row">
            <div class="frame-one">
                <h2><b>Description</b></h2>
                <?php if(isset($categories["category_name"])){ ?>
                    <p><?php echo $categories["category_description"]; ?></p>
                <?php } elseif(isset($categories["subcategory_name"])) { ?>
                    <p><?php echo $categories["subcategory_description"]; ?></p>
                <?php } else { ?>
                    <p>Scroll down to see all the vehicles lingscars has to offer!</p>
                <?php } ?>

                <?php if(!(isset($categories))) { ?>
                    <img src="../../images/frame1.png" alt="car">
                <?php } ?>
            </div>
            <div class="frame-two">
                <h1><b>Vehicles</b></h1>
            </div>

            <?php if($vehicles[0] == 0){ ?>
                <div class="row">
                    <p style="text-align: center; font-size: 2em;"><b>No vehicles of this type in stock</b></p>   
                    <a href="/catalogue" style="width: 40vw; padding: 10px; margin: 0 auto; text-align: center; font-size: 2em; text-decoration: none; background: black; color: white; border-radius: 20px;">Look at some other options</a>   
                </div>
            <?php } else { ?>

            <table class="table table-hover">

                <tbody>

                    <?php foreach ($vehicles as $row): ?>

                        <form action="/vehicle" method="post">

                            <tr>

                                <td class="td-car"><img src="../../public/uploads/<?php echo $row['image']; ?>" alt="Vehicle Image" srcset=""></td>
                                
                                <td class="td-words align-items-center">
                                    <h2 class="vehicle_name"><b><?php echo $row['vehicle_model']; ?></b></h2>
                                    <p><?php echo $row['vehicle_description']; ?></p>
                                    <b>Price: €<?php echo $row['unit_price']; ?></b>
                                    <input type="text" style="display: none;" name="vehicle_id" value="<?php echo $row['vehicle_id']; ?>">
                                    <?php if(isset($_SESSION["user_details"])){ ?>
                                        <input style="margin-right: 218px;" type="submit" value="Add to Cart" class="btn btn-dark">
                                    <?php } else { ?>
                                        <a href="/auth/register" style="margin-right: 400px; width: 10vw; text-align: center;"><input type="button" value="Add to Cart" class="btn btn-dark"></a>
                                    <?php } ?>                                
                                </td>

                            </tr>
                        </form>

                    <?php endforeach; ?> 

                </tbody>

            </table>

            <?php } ?>
        </div>
    </section>
   

    <?php $this->endSection();?>
