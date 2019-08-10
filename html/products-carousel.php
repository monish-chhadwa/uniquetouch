<div class="product-carousel owl-carousel ftco-owl">

    <?php
    $imagePathsToSearch = ['jpg', 'png'];
    $images = scandir(__DIR__ . '/../images/ut/products/'.$config['folder']);//
    //    var_dump($images);
    foreach ($images as $image) {
        $imagePath = 'images/ut/products/'.$config['folder'].'/' . $image;
        if (in_array(pathinfo($imagePath, PATHINFO_EXTENSION), $imagePathsToSearch)) {
            echo '<div class="item"><div><img src="' . $imagePath . '"/></div>'.
            '<div class="productenquiry align-items-center"><a href="contact.html" class="nav-link btn-primary" data-toggle="modal"
                                            data-target="#modalRequest" onclick="sendProductEnquiry('.$image.
            ')"><span>Send Enquiry</span></a></div>'.
            '</div>';//Close item
        }
    }
    ?>
</div>