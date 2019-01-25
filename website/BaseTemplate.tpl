<!DOCTYPE html>
<html
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]-->
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<!--[endif]-->

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

<!-- JavaScript and jQuery for the graphs -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

 <!-- Own stylesheet -->
<link rel="stylesheet" href="/css/ING_style.css">
<link rel="stylesheet" href="/css/style.css">



<title>{$title}</title>
</head>


<body>
<header>
    <nav class="navbar navbar-expand-sm bg-light justify-content-left">
        <div class="container">
            <!-- Brand -->
            <span class="logo">
                <a class="navbar-brand" href="/index">
                    <img src="/img/ING_logo.png" alt="ING logo"> 
                </a>
            </span>
        </div>
    </nav> 
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="/img/Chatbot.png" alt="ING chatbot" class="banner_img"> 
        </div>
    </div>
    <nav class="navbar navbar-expand-sm sticky-top menu">
        <div class="container">	
            

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    {foreach $pages as $page}
                        <li class="nav-item">
                            <a class="nav-link {if $page['href'] == $active}active{/if}" href="/{$page['href']}">{$page['title']}</a>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </nav>
</header>

{block name=body}{/block}

<footer>

</footer>
</body>
</html>