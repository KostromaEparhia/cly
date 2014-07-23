<?php

/* @var $this yii\web\View */
$this->title = 'Костромская епархия Русской Православной Церкви (Московский Патриархат)';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-md-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>
            <div class="col-md-8 col-md-offset-1">

                <?


                use \common\widgets\ContentList;

                echo ContentList::widget([
                    'layout' => '{items}{pager}',
                    'itemView' => function ($content, $key, $index, $widget){
                            echo '<div><a href="'.$content->url.'">'.$content->title.'</a></div>';
                        },
                ]);



                ?>



            </div>
        </div>

    </div>
</div>
