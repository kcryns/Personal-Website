
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="./css/main.css">
    <script
      src="https://kit.fontawesome.com/b2cb6cdadd.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
<style>

    .single__page{
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        height: 100vh;
        display: grid;
        place-items: center;
    }

    .single__page__wrapper{
        height: 40rem;
        width: 70rem;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        padding:1.5rem;
        position: relative; 
    }

    .single__page__wrapper .single__page__content{
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 5rem;
        gap:5rem;
    }

    .single__page__wrapper h1{
        color:#0EA2A6;
        font-size: 2.3rem;
        font-weight: 700;
    }

    .single__page__wrapper p{
        text-align: justify;
        font-size: 1rem;
    }

    .single__page__content .img{
        height: 25rem;
        width: 25rem;
        background-color: #0EA2A6;
        
    }

    .single__page__content .img img{
        height: 25rem;
        width: 25rem;
        object-fit: cover;
    }

    .single__page .home{
        position: absolute;
        left: 3rem;
        
    }

    .single__page .home a i{
        color: #0EA2A6;
        font-size: 2rem;    
    }

    .single__page .home a:hover i{
       color: black;
    }

</style>

<section class="single__page" >
    <div class="single__page__wrapper" >
    <div class="home"><a href="<?php echo home_url(); ?>"><i class="fa-solid fa-left-long"></i></a></div>
    <div style="display: flex; justify-content: center; align-items: center; height: 100%; ">
    <div class="single__page__content">
        <div class="single__page__text">
         <h1><?php the_title(); ?></h1>
         <p><?php echo get_field('service_card_paragraph'); ?> </p>
        </div>
        <div class="img">
            <?php echo get_the_post_thumbnail();?>
        </div>
        </div>
    </div>
    </div>
</section>
</body>

<script>
ScrollReveal().reveal(".single__page__text",{ delay: 300, origin: "left" });

ScrollReveal().reveal(".img", {delay: 300,origin: "right"});
</script>
</html>
