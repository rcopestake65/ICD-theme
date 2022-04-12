<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Poppins:wght@300;600&display=swap"
        rel="stylesheet">
    <meta property="og:title"
        content="icandance - We celebrate disabled children and young people, empowering them through dance and performance" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/wp-content/uploads/og-01.jpg" />
    <meta property="og:url" content="https://icandance.org.uk/" />
    <meta property="og:description"
        content="icandance is a creative, therapeutic community that caters for the needs of children and young people and their families with lived experience of disabilities." />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@icandanceuk" />
    <meta name="twitter:image:src" content="/wp-content/uploads/twitter-card.jpg" />
    <title>i can dance | <?php the_title();?></title>

    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <div class="container">
        <?php get_template_part('template-parts/section', 'header');?>