@extends('components.layouts.app')

@section('app')
<style>
    h2 {
        text-align: center;
    }

    .card {
        width: 100%;
        max-width: 350px;
        height: auto;
        background-color: #1f2428;
        transition: all 0.2s;
        color: snow !important;
        padding: 1.2rem;
        flex: 1 1 calc(33.333% - 2rem);
        box-sizing: border-box;
    }

    .card:hover {
        border: 2px solid #f9826c;
    }

    .image,
    .card img {
        width: 130px;
        display: block;
        margin: 0 auto 10px;
    }

    .laravel {
        font-size: 13px;
        color: #607280;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
        padding: 1rem;
    }

    .span {
        color: #f9826c;
    }

    @media (max-width: 768px) {
        .card {
            flex: 1 1 calc(50% - 1rem);
        }
    }

    @media (max-width: 480px) {
        .card {
            flex: 1 1 100%;
        }

        .card img {
            width: 100px;
        }
    }
</style>

<div class="live">
    <h2 class="mt-3"><span class="span">The programs I know</span></h2>

    <div class="cards mt-3">
        <div class="card">
            <h4><span class="span">Laravel</span></h4>
                <img src="storage/img/IMG_4890.JPG" alt="Profile Image">
            <p class="laravel mt-5">Laravel: PHP framework for elegant, fast, and secure web development.</p>
        </div>

        <div class="card">
            <h4><span class="span">Bootstrap</span></h4>
            <img src="../image/bot.png" alt="">
            <p class="laravel">Bootstrap: CSS framework for responsive, mobile-first, and modern web design.</p>
        </div>

        <div class="card">
            <h4><span class="span">HTML & CSS</span></h4>
            <img src="../image/css.png" alt="">
            <p class="laravel">
                HTML: Structures web content using elements and tags.<br>
                CSS: Styles HTML with colors, layouts, and fonts.
            </p>
        </div>

        <div class="card">
            <h4><span class="span">Livewire</span></h4>
            <img src="../image/livewire_.png" alt="">
            <p class="laravel">Livewire: Laravel package for building dynamic interfaces using Blade and PHP.</p>
        </div>

        <div class="card">
            <h4><span class="span">PHP</span></h4>
            <img src="../image/pngwing.com (2).png" alt="">
            <p class="laravel">PHP: Server-side scripting language for dynamic websites and web applications.</p>
        </div>

        <div class="card">
            <h4><span class="span">Adobe Photoshop</span></h4>
            <img src="../image/adobe-photoshop-logo-2021.svg" alt="">
            <p class="laravel">Adobe Photoshop: Powerful software for image editing, design, and digital art.</p>
        </div>
    </div>
</div>
@endsection
