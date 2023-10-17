<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="assets/css/style.css" />
        <script src="https://kit.fontawesome.com/a803a3c4a5.js" crossorigin="anonymous"></script>
    </head>
    <body>

<?php

//php helps you make better html layout using code that can only be processed 
// as backend run through apache server, when that html is printed on browser, 
// browser treats that as frontend html langauge and css styles and displays it
// as front end UI.

$header_s = array(

    'top_header' => array(
        'email' => 'info@example.com',
        'phone' => '+1 5589 55488 55',
        'social_icons' => array(
            'facebook' => array(
                'class' => 'fa-facebook',
                'url' =>'https://facebook.com/green'
            ) ,
            'twitter'=>array(
                'class' => 'fa-twitter',
                'url' =>'https://twitter.com/green'
            ),
            'instagram' => array(
                'class' => 'fa-instagram',
                'url' =>'https://instagram.com/green'
            ),
            'linkedin' => array(
                'class' => 'fa-linkedin',
                'url' => 'https://linkedin.com/green' 
            ) 
        )
        ),
    'bottom_header'=> array(
        'logo' => array(
            'type' => 'image',
            'value' => 'data:image/jpeg;base64,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'
        ),
        'menu' => array(
            'items' => array(
                'home' => 'http://localhost/phpstart/task7',
                'about' => '/phpstart/task7/about-us.php',
                'services' => '/services.php',
                'portfolio' => '/portfolio.php',
                'team'=> 'team.php'
            )
        )
    )    
);
?>

    <div class="main">
        <header>
            <div id="topHeader">
                <div class="col-10">&nbsp;</div>
                <div class="col-30 ep">
                <?php

                    foreach($header_s['top_header'] as $key => $value){
                        $fa_className = '';
                        if($key == 'email'){
                            $fa_className = 'fa-envelope';
                        }
                        elseif($key == 'phone' ){
                            $fa_className = 'fa-mobile';
                        }
                        else{
                            continue;
                        }
                        ?>
                        <div class="item">
                            <div class="ib fa"><i class="fa-solid <?php echo $fa_className; ?>   fa-sm"></i></div>
                            <div class="ib <?php echo $key; ?>"><?php echo $value; ?></div>
                        </div>
                        <?php
                    }
                
                
                ?> 
                        
                    
                </div>
                <div class="col-30">&nbsp;</div>
                <div class="col-20">
                <?php 
                    foreach($header_s['top_header']['social_icons'] as $key => $value){
                        
                        ?>
                            <div class="ib <?php echo $key; ?>"><a href="<?php echo $value['url']; ?>"><i class="fa-brands <?php echo $value['class']; ?> fa-sm"></i></a></div>
                        <?php
                    }
                ?>
                
                   
                </div>
                <div class="col-10"></div>
            </div>
            <div id="bottomHeader">
                <div class="col-10">
                    &nbsp;
                </div>
                <div class="col-10">
                    <?php
                    
                     if(!empty($header_s['bottom_header']['logo'])){

                        if($header_s['bottom_header']['logo']['type'] == 'text'){
                            echo '<h1>'.$header_s['bottom_header']['logo']['value'].'</h1>';
                        }
                        elseif($header_s['bottom_header']['logo']['type'] == 'image'){
                            echo '<img src="'.$header_s['bottom_header']['logo']['value'].'" />';
                        }
                        else{
                            echo '<h3>'.$header_s['bottom_header']['logo']['value'].'</h3>';
                        }
                     }
                        
                    
                    ?>
                </div>
                <div class="col-30">
                    &nbsp;
                </div>
                <div class="col-40">
                    <div class="menu-wrapper">
                        <ul>
                            <?php

                                foreach($header_s['bottom_header']['menu']['items'] as $label => $url){
                                    echo '<li class="item"><a class="link" href="'.$url.'">'.$label.'</a></li>';
                                }
                            
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-10"></div>
            </div>
        </header>