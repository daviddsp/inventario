<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <!-- blueprint CSS framework -->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">-->
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">-->
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">-->

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <?php
            $this->widget(
                    'bootstrap.widgets.TbNavbar', array(
                'type' => 'inverse',
                'brand' => CHtml::image(Yii::app()->getBaseUrl() . '/images/logo.png', 'Inventario'),
                'brandUrl' => Yii::app()->baseUrl . '/images/inventory.png',
                'collapse' => true, // requires bootstrap-responsive.css
                'fixed' => false,
                'items' => array(
                    array(
                        'class' => 'bootstrap.widgets.TbMenu',
                        'items' => array(
                            array('label' => 'Inicio', 'icon' => 'home', 'url' => array('/site/index'), 'active' => true),
                            array('label' => 'Enlaces', 'icon' => 'icon-signal icon-white', 'url' => '#'),
                            array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Contact', 'url' => array('/site/contact')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                            array(
                                'label' => 'Dropdown',
                                'url' => '#',
                                'items' => array(
                                    array('label' => 'Action', 'url' => '#'),
                                    array('label' => 'Another action', 'url' => '#'),
                                    array(
                                        'label' => 'Something else here',
                                        'url' => '#'
                                    ),
                                    '---',
                                    array('label' => 'NAV HEADER'),
                                    array('label' => 'Separated link', 'url' => '#'),
                                    array(
                                        'label' => 'One more separated link',
                                        'url' => '#'
                                    ),
                                )
                            ),
                        ),
                    ),
                    '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
                    array(
                        'class' => 'bootstrap.widgets.TbMenu',
                        'htmlOptions' => array('class' => 'pull-right'),
                        'items' => array(
                            array('label' => 'Link', 'url' => '#'),
                            '---',
                            array(
                                'label' => 'Dropdown',
                                'url' => '#',
                                'items' => array(
                                    array('label' => 'Action', 'url' => '#'),
                                    array('label' => 'Another action', 'url' => '#'),
                                    array(
                                        'label' => 'Something else here',
                                        'url' => '#'
                                    ),
                                    '---',
                                    array('label' => 'Separated link', 'url' => '#'),
                                )
                            ),
                        ),
                    ),
                ),
                    )
            );
            ?>
        </nav>

        <div class="container-fluid" id="">
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
//                $this->widget('zii.widgets.CBreadcrumbs', array(
//                    'links' => $this->breadcrumbs,
//                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <footer>
                <div class="subnav navbar navbar-fixed-bottom navbar-inverse">
                    <div class="navbar-inner">
                        <div class="container">
                            <?php echo date('Y'); ?> Lincencia Creative Commons <a href="http://www.webapplicationthemes.com" target="_new">webapplicationthemes.com</a>. All Rights Reserved.<br /><small>Powered by <a href="http://www.yiiframework.com" title="Yii Framework" target="_new">Yii Framework</a> and <a href="http://twitter.github.com/bootstrap/" title="Twitter Bootstrap" target="_new">Twitter Bootstrap</a></small>
                        </div>
                    </div>
                </div>      
            </footer>


<!--            <div id="footer" class="container">
                <nav class="navbar navbar-inverse navbar-fixed-bottom">
                    <div class="navbar-inner navbar-content-center">
                        <p class="text-muted credit" style="color: white">&copy;<?php echo date('Y'); ?> by My Company.<br/>
                            All Rights Reserved.
                            <?php echo Yii::powered(); ?> </p>
                    </div>
                </nav>
            </div>-->
        </div><!-- page -->
    </body>
</html>
