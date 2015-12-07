﻿<figure id="carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="/assets/img/product/about-1.jpg"></div>
        <div class="item"><img src="/assets/img/product/about-2.jpg"></div>
        <div class="item"><img src="/assets/img/product/about-3.jpg"></div>
        <div class="item"><img src="/assets/img/product/about-4.jpg"></div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</figure>


<main class="page-main <?= (isset($class) ? $class : '') ?>" id="content" tabindex="-1" role="main">
    <div class="container">
        <?= $article->content ?>
    </div>
</main>