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
            'id' => 'gemseries',
            'title' => 'Gem Series',
            'subtitle' => '14 x 10 x 4 inch',
            'folder' => '9001',
            'cover' => 'IMG_20211009_165909_Bokeh__01.jpg'
        ),
        array(
            'id' => 'mirrorseries',
            'title' => 'Mirror Series',
            'subtitle' => '14 x 10 x 4 inch',
            'folder' => '9002',
            'cover' => 'IMG_20211009_170258_Bokeh__01.jpg'
        ),
        array(
            'id' => 'moonseries',
            'title' => 'Moon Series',
            'subtitle' => '16 x 13 x 6 inch',
            'folder' => 'Moon series-9003',
            'cover' => 'IMG_20211009_151234_Bokeh.jpg'
        ),
        array(
            'id' => 'kingseries',
            'title' => 'King Series',
            'subtitle' => '18 x 13 x 6 inch',
            'folder' => '9009',
            'cover' => 'IMG_20211126_150316_Bokeh__01__01__01__01.jpg'
        ),
        array(
            'id' => 'aquaseries',
            'title' => 'Aqua Series',
            'subtitle' => '16 x 12 x 5 inch',
            'folder' => '9005',
            'cover' => 'IMG_20211126_133443_Bokeh__01__01.jpg'
        ),
        array(
            'id' => 'rectangle',
            'title' => 'Rectangle Series',
            'subtitle' => '20 x 15 x 5 inch',
            'folder' => '9008',
            'cover' => 'Screenshot_20211008-015542__01.jpg'
        ),
        array(
            'id' => 'eggseries',
            'title' => 'Egg Series',
            'subtitle' => '19 x 13 x 5 inch',
            'folder' => '9012 egg series',
            'cover' => 'IMG_20211126_153513_Bokeh__01__01__01.jpg'
        ),
        array(
            'id' => 'ovalseries',
            'title' => 'Oval Series',
            'subtitle' => '20 x 14 x 5 inch',
            'folder' => '9014',
            'cover' => 'IMG_20211126_154335_Bokeh__01__01__01__01__01.jpg'
        ),
        array(
            'id' => 'latestseries',
            'title' => 'Latest Designs',
            'subtitle' => '18 x 14 x 6 inch',
            'folder' => '9027',
            'cover' => '9027-1__01.jpg'
        ),
        array(
            'id' => 'flowerseries',
            'title' => 'Flower Series',
            'subtitle' => '19 x 13 x 5 inch',
            'folder' => '9088',
            'cover' => 'IMG_20211126_154335_Bokeh__01__01__01__01__01.jpg'
        ),
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
