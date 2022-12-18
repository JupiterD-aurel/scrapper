<?php
//url json
$json = file_get_contents("data.json");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products - FakeTeeTurtle</title>
    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/site.css?v=ZrvoyHwrYkSznGuSgmUAe5u1xhnIC01tz8nzvscjjm4" />
    <link rel="stylesheet" href="/FakeTeeTurtle.styles.css?v=z7Wm2yRGZWPWsb1DWqOhE0QGJXvqibu-yz6wbrA0JqU" />
</head>
<body>
    <header>
        <nav b-2bny3kbu4g class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div b-2bny3kbu4g class="container-fluid">
                <a class="navbar-brand" href="/">FakeTeeTurtle</a>      
                <button b-2bny3kbu4g class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span b-2bny3kbu4g class="navbar-toggler-icon"></span>
                </button>
                <div b-2bny3kbu4g class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                    <ul b-2bny3kbu4g class="navbar-nav flex-grow-1">    
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div b-2bny3kbu4g class="container">
        <main b-2bny3kbu4g role="main" class="pb-3">


<h1 class="display-4">Products</h1>

<div class="d-grid grid-4">
<?php

$scrap = (json_decode($json,true));

foreach($scrap as $element){

     $img = $element["url"];

     echo $element["btn"];
     echo "<img src='$img'>";
}

?>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="/product/page/0" tabindex="-1" aria-disabled="true"><<</a>
        </li>
            <li class="page-item disabled">
                <a class="page-link" href="/product/page/1">1</a>       
            </li>
            <li class="page-item ">
                <a class="page-link" href="/product/page/2">2</a>       
            </li>
            <li class="page-item ">
                <a class="page-link" href="/product/page/3">3</a>       
            </li>
        <li class="page-item ">
            <a class="page-link" href="/product/page/2">>></a>
        </li>
    </ul>
</nav>


        </main>
    </div>

        <div b-2bny3kbu4g class="container">
        </div>
    </footer>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>   
    <script src="/js/site.js?v=BxFAw9RUJ1E4NycpKEjCNDeoSvr4RPHixdBq5wDnkeY"></script>

</body>
</html>

