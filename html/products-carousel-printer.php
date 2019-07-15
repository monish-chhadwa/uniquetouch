<?php

/**
 * Created by PhpStorm.
 * User: monish.c
 * Date: 07/07/19
 * Time: 3:43 PM
 */
class Products
{
    private static $productsConfig = array(
        array(
            'id' => 'basins',
            'title' => 'Shell Series',
            'subtitle' => '22 X 14 X 6 inch',
            'folder' => '22-14-6',
            'cover' => 'img31.jpg'
        ),
        array(
            'id' => 'roundbasins',
            'title' => 'Alive Series',
            'subtitle' => '18 x 15 x 7 inch',
            'folder' => '18-15-7-round',
            'cover' => 'img38.jpg'
        ),
        array(
            'id' => 'triangularbasins',
            'title' => 'Mad Angle Series',
            'subtitle' => '18 x 15 x 7 inch',
            'folder' => '18-15-7-triangle',
            'cover' => 'img51.jpg'
        ),
        array(
            'id' => 'bestseller',
            'title' => 'Axe Series',
            'subtitle' => '17 x 13 x 5 inch',
            'folder' => '17-13-4.5',
            'cover' => 'img66.jpg'
        ),
        array(
            'id' => 'specialdesign',
            'title' => 'Handmade and Marble Series',
            'subtitle' => '16 x 13 x 6 inch',
            'folder' => '16-13-5.7',
            'cover' => 'img82.jpg'
        ),
        array(
            'id' => 'elegantwhite',
            'title' => 'Elegant White',
            'subtitle' => 'Multiple sizes available',
            'folder' => 'elegant-white',
            'cover' => 'img122.jpg'
        ),
        array(
            'id' => 'rmarble',
            'title' => 'Round Marble Series',
            'subtitle' => '13 x 13 x 5 inch',
            'folder' => 'round-marble',
            'cover' => 'cover.jpg'
        ),
        array(
            'id' => 'hnmarble',
            'title' => 'Handmade and Marble Series',
            'subtitle' => '18 x 13 x 6 inch',
            'folder' => 'hm-n-marble',
            'cover' => 'cover.jpg'
        ),
        array(
            'id' => 'bprint',
            'title' => 'Black Print',
            'subtitle' => '20 x 15 x 6 inch',
            'folder' => 'black-print',
            'cover' => 'cover.jpg'
        )
    );

    private static function printProductCarousel($config)
    {
        $wrapper = <<<EOL
<div class="row justify-content-center mb-5 pb-5" id="{$config['id']}">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">{$config['title']}</h2>
                <span class="subheading">{$config['subtitle']}</span>
            </div>
EOL;
        echo $wrapper;
        include 'html/products-carousel.php';
        echo '</div>';

    }

    private static function printProductLink($config)
    {
        $prodLink = <<<EOL
<div class="col-md-4 ftco-animate">
    <div class="work-entry">
        <a href="products.php#{$config['id']}" class="img ud-bgsize" style="background-image: url(images/ut/products/{$config['folder']}/{$config['cover']});">
            <div class="text d-flex justify-content-center align-items-center">
                <div class="p-3">
                    <h3>{$config['title']}</h3>
                    <span>{$config['subtitle']}</span>
                </div>
            </div>
        </a>
    </div>
</div>
EOL;
        echo $prodLink;
    }

    public static function printProductLinks()
    {
        foreach (self::$productsConfig as $config) {
            self::printProductLink($config);
        }
    }

    public static function printProductCarousels()
    {
        foreach (self::$productsConfig as $config) {
            self::printProductCarousel($config);
        }
    }
}