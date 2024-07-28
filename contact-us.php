<!DOCTYPE html>

<?php 
require 'pageElements.php'; 
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kicks Kulture</title>
        <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php writeCommonStyles(); ?>
        <link rel="stylesheet" type="text/css" href="Css/contact-us.css" />
    </head>
    <body>
        <?php writeHeader("Contact Us"); ?>
        <div class="contact-us-text"> 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum culpa ratione suscipit deserunt necessitatibus quos unde? At, minus molestias in, excepturi nostrum doloribus, repellat necessitatibus error saepe tenetur facere corporis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti perspiciatis, similique ut sint exercitationem quas qui ipsum laudantium nihil vero libero error illum odio ratione laborum tenetur mollitia. Mollitia, molestiae.
        </div>
        <div class="contact-pages">
            <div class="contact-item">
                <img src="img/insta_logo-removebg-preview.png" height="90px" width="90px">
                <span>@MusicxOnline</span>
                <div class="blue-line"></div>
            </div>
            <div class="contact-item">
                <img src="img/phone_number-removebg-preview.png" height="90px" width="90px">
                <span>+44-7695-185-702</span>
            </div>
            <div class="contact-item">
                <img src="img/email_image-removebg-preview.png" height="90px" width="90px">
                <span>MusicOnline@gmail.com</span>
                <div class="blue-line"></div>
            </div>
        </div>
        <?php writeFooter(); ?>
        <script src="Js/brands.js"></script>
    </body>
</html>
