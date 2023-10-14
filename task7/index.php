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
            'type' => 'text',
            'value' => 'Green'
        ),
        'menu' => array(
            'items' => array(
                'home' => 'http://localhost/phpstart/task7',
                'about' => '/about-us.php',
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
                bottom header
            </div>
        </header>

        <footer>

        </footer>
    

    </div>


    </body>
</html>
