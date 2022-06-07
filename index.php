<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1920px, initial-scale=1.0">
    <title>Teck | Teclados por quem sabe o que faz</title>

    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/carrossel.css">
    <link rel="stylesheet" href="public/css/list.css">
    <link rel="stylesheet" href="public/css/footer.css">

    <script src="js/carrossel.js" defer></script>
</head>
<body class="dark">
    <!-- Import Components -->
    <?php include_once("templates/header.php"); ?>
    <?php include_once("templates/footer.php"); ?>
    <!--  -->
    
    <?php echo get_header(); ?>
    <section class="carrossel">
        <img src="public/images/keyboard.webp" alt="">
        <img src="public/images/keyboard2.jpg" alt="">
        <img src="public/images/keyboard3.webp" alt="">
        <img src="public/images/keyboard4.webp" alt="">
        <h1 class="logo"></h1>
        <h1>
            Teclados <br>
            Por Quem <br>
            Entende.
        </h1>
        <div class="caption">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, ducimus earum maxime exercitationem explicabo at beatae quaerat, facilis sapiente, possimus suscipit tenetur fugiat itaque nam distinctio deserunt cum eius veniam!</p>
        </div>
    </section>
    <main>
        <h1>Compre nossos produtos e etc.</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium quae delectus harum. Nihil reiciendis quibusdam vero, sequi doloremque omnis laboriosam amet modi! Error ad assumenda impedit in nihil velit sint.
        Ut sit pariatur reprehenderit. Incidunt officiis fugit assumenda omnis dolore deleniti neque, ipsam sint a ea vitae iusto velit nisi distinctio culpa ut doloribus exercitationem provident illum facere ex? Fugit.</p>
    </main>
    
    <section class="list">
        <div>
            <img src="public/images/keyboard.webp" alt="">
            <span>
                <h1>Bunda</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita veniam non officia deserunt doloribus? Consequatur, ipsum libero quibusdam sint fuga voluptas ullam illo id provident magni molestiae, dolorum exercitationem.</p>
            </span>
        </div>
        <div>
            <img src="public/images/keyboard.webp" alt="">
            <span>
                <h1>Bunda</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita veniam non officia deserunt doloribus? Consequatur, ipsum libero quibusdam sint fuga voluptas ullam illo id provident magni molestiae, dolorum exercitationem.</p>
            </span>
        </div>
        <div>
            <img src="public/images/keyboard.webp" alt="">
            <span>
                <h1>Bunda</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita veniam non officia deserunt doloribus? Consequatur, ipsum libero quibusdam sint fuga voluptas ullam illo id provident magni molestiae, dolorum exercitationem.</p>
            </span>
        </div>
        <div>
            <img src="public/images/keyboard.webp" alt="">
            <span>
                <h1>Bunda</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, expedita veniam non officia deserunt doloribus? Consequatur, ipsum libero quibusdam sint fuga voluptas ullam illo id provident magni molestiae, dolorum exercitationem.</p>
            </span>
        </div>
    </section>
    <div class="teste">
        <h1>Ainda não sabe <br> se quer um <br> teclado bom?</h1>
        <a class="no-animation" href="teste.php">
            <span>Experimente</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24 40 21.9 37.85 34.25 25.5H8V22.5H34.25L21.9 10.15L24 8L40 24Z"/></svg>
        </a>
    </div>
    <?php echo get_footer() ?>
</body>
</html>