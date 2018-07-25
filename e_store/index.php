<!DOCTYPE html>
<html>
    <head>
        <title>The Best Vehicle Parts Shop Ever</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="logoText"></div>
        <!-- Nav Bar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Lorem Ipsum Vehicle Parts Shop</a>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    About Our Goods<span class="caret"></span>
                  </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#brakes">Brakes</a></li>
                        <li><a href="#engines">Engines</a></li>
                        <li><a href="#mirros">Mirrors</a></li>
                        <li><a href="#bumpers">Bumpers</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div id="headerWrap">
          <div class="blue_overlay">
            <form action="search.php" method="get">
              <input id="searchField" type="text" name="keywords" placeholder="Enter the product name...">
              <div id="searchImg"><input type="submit" value="search" id="submit"></div>
            </form>
          </div>
        </div>
        <div class="container-fluid">
          <!-- Sales -->
          <div class="col-lg-push-8">
            <div class="text-center">
              <h2>Products</h2>
              <!-- The saling production, first item -->
              <div class="col-lg-push-3 goods text-center">
                <h4>Model 42 Car Brakes</h4>
                <img src="img/brk1.jpg" alt="Model 42 Car Brakes"></img>
                <p class="list-price text-danger"> List Price: <s>$228</s></p>
                <p class="price"> Our Price: $69</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                  Purchase
                </button>
              </div>
              <!-- The saling production, second item -->
              <div class="col-lg-push-3 goods text-center">
                <h4>LORIP 228 Engine</h4>
                <img src="img/eng1.jpg" alt="LORIP 228 Engine"></img>
                <p class="list-price text-danger"> List Price: <s>$400</s></p>
                <p class="price"> Our Price: $399</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                  Purchase
                </button>
              </div>
              <!-- The saling production, third item -->
              <div class="col-lg-push-3 goods text-center">
                <h4>High Quality Car Mirror</h4>
                <img src="img/mir1.png" alt="High Quality Car Mirror"></img>
                <p class="list-price text-danger"> List Price: <s>$20</s></p>
                <p class="price"> Our Price: $19</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                  Purchase
                </button>
              </div>
              <!-- The saling production, fouth item -->
              <div class="col-lg-push-3 goods text-center">
                <h4>Super Retro Awesome Bumper</h4>
                <img src="img/bump1.jpg" alt="Super Retro Awesome Bumper"></img>
                <p class="list-price text-danger"> List Price: <s>$1000000</s></p>
                <p class="price"> Our Price: $999999</p>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">
                  Purchase
                </button>
              </div>

            </div>
          </div>
        </div>
        <hr>
        <!-- Articles -->
        <h2 class="text-center">About Our Products</h2>
        <article id="brakes">
          <img src="img/brakes.jpg" alt="Car Brakes"></img>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ornare massa in elementum.
            Fusce cursus porta sollicitudin. Nam vitae lectus quis libero dignissim ullamcorper feugiat vel nisi.
            Fusce vitae elit arcu. Etiam metus nibh, consectetur at pretium non, auctor non nisi. Nunc odio quam,
            dignissim ut lorem non, placerat placerat orci. Vestibulum et dui at sapien consectetur condimentum at
            vitae metus. Mauris mi massa, venenatis vitae ex sed, volutpat tincidunt tellus. Pellentesque non metus
            vitae lacus fringilla commodo ut non velit. Praesent vitae turpis faucibus, porta metus in, fermentum elit.
            Sed eget est et velit lacinia placerat. Vivamus interdum nibh eros, luctus efficitur neque consectetur sit amet.
            Phasellus quis commodo nibh. Duis elit diam, commodo eget sapien id, rhoncus iaculis mi. Morbi pharetra semper
            libero sed pharetra. Donec sit amet laoreet magna. Vestibulum viverra mollis enim, et placerat leo condimentum at.
            Curabitur eget sollicitudin odio. Sed suscipit massa nisl, vitae rhoncus turpis lobortis nec. Aenean non
            lobortis enim. In risus enim, dictum sed tempus id, elementum sed sem. Duis non nisl eleifend, porta neque a,
            aliquet nisl. Pellentesque elit dui, pretium vitae mattis rhoncus, consequat eget lacus. Ut euismod lorem ac
            odio rutrum, finibus viverra sapien placerat. Aenean scelerisque ipsum vitae posuere pharetra. Sed eu massa vel
            arcu commodo aliquet quis sed dolor. Cras tincidunt massa tempus nulla accumsan aliquet.
          </p>
        </article>
        <article id="engines">
          <img src="img/engine.jpg" alt="Car Engine"></img>
          <p>
            In viverra aliquet mattis. Donec eu mauris vel felis mollis facilisis eget sit amet lectus.
            Nunc tempor ultrices augue eu imperdiet. Duis quam dolor, tempus in dui vel, tempus scelerisque lacus.
            Proin rutrum justo non orci volutpat, vitae vestibulum risus ornare. Donec volutpat blandit congue. Vivamus
            ac fringilla ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula interdum vehicula.
            Sed nunc nisl, blandit sed neque quis, congue mollis sem. Proin placerat lobortis sodales. Aliquam eget turpis
            et mi aliquet lacinia ut at nulla. Praesent accumsan risus non felis laoreet, ultricies convallis quam molestie.
            Curabitur ipsum magna, faucibus eu ipsum a, mollis porttitor ipsum. Etiam sit amet metus vitae mauris ultrices
            tincidunt semper sit amet arcu. Sed suscipit quam sed mauris lobortis, quis tempus elit eleifend. Vivamus lectus
            eros, placerat nec urna vel, auctor ultrices lacus. Morbi interdum consectetur odio, eget vulputate libero
            sagittis nec. Aliquam erat volutpat. Curabitur condimentum hendrerit varius. In sit amet diam metus. Aliquam
            erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis dignissim in ante non molestie.
            Proin sed sapien sed dolor molestie cursus. Aenean a sodales enim, vitae iaculis arcu. Etiam sed interdum eros,
            eu ultrices enim. Maecenas vitae accumsan lectus, eget placerat nisl. Fusce non gravida nunc. Aenean rhoncus
            arcu vitae rhoncus lobortis. Curabitur non orci vitae nisl venenatis iaculis eu ac libero. Nullam eu metus eget
            tellus fringilla suscipit vel ac augue. Nullam tortor ex, scelerisque ultrices semper ac, tristique eget arcu.
            Quisque gravida dignissim magna, eget lobortis tortor vestibulum egestas. Suspendisse interdum commodo egestas.
          </p>
        </article>
        <article id="mirros">
          <img src="img/mirror.jpg" alt="Car Mirror"></img>
          <p>
            Ut dapibus, neque et volutpat luctus, nulla nisl maximus quam, sit amet interdum leo ex at ligula.
            Suspendisse rutrum lectus vitae nulla tempor maximus. Nunc lobortis ut nulla eu sagittis. Suspendisse mattis
            tempor ipsum id porta. Quisque   ac massa a ante venenatis congue. Etiam ultricies faucibus orci, id tincidunt
            mi tincidunt eget. Fusce libero nibh, dictum sed laoreet eu, varius in purus. Vestibulum fringilla posuere felis,
            vel tempus nunc efficitur in. Ut lobortis, magna vel mollis suscipit, lorem nunc gravida arcu, a tempor erat
            augue in leo. Donec venenatis est vel mi blandit suscipit. Fusce non dolor posuere, luctus leo a, suscipit purus.
            Nulla turpis libero, volutpat at aliquet ut, scelerisque sed mauris. Duis bibendum tincidunt ultrices. Duis eros
            ante, mollis quis ultricies et, dapibus non lorem. Fusce at lobortis urna, non elementum ex. Nunc quam lorem, maximus
            nec efficitur eget, vestibulum in est. Phasellus tincidunt purus tortor, ac tempor mi cursus ac. Maecenas in risus sed
            est interdum aliquam sed ut velit. Suspendisse dolor sapien, consequat eget leo ac, bibendum imperdiet neque. Suspendisse
            suscipit tincidunt auctor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam luctus ipsum ac neque
            blandit ornare. Nulla at arcu tincidunt, pharetra orci quis, laoreet nisl. Phasellus lacinia diam quis porta auctor.
            Aenean elementum, diam vitae imperdiet vestibulum, metus ante consequat ante, sed vestibulum erat nisl nec tortor.
            Mauris eget est lacus. Duis blandit nibh nibh, eget aliquam sapien malesuada quis. Aenean venenatis consequat
            orci ac molestie. Donec elementum mi vitae felis semper dapibus. Suspendisse urna velit, varius vel erat sit
            amet, sodales pharetra ante. Etiam hendrerit purus in accumsan hendrerit. Quisque gravida, lacus vel ornare tempus,
            magna metus sollicitudin massa, a gravida ante dolor vitae nisl. Mauris auctor leo non tellus dapibus, in dictum dolor
            dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed justo nibh,
            bibendum sed arcu vitae, venenatis aliquet metus. Etiam quam elit, interdum ut erat ut, venenatis pellentesque quam. Donec
            et venenatis magna, et convallis mauris. Praesent at metus arcu.  Nullam aliquam massa ac dui consequat, eget dictum diam blandit.
            Aenean ut elit consequat, dignissim mauris consequat, fringilla leo. Donec tristique est id ligula vehicula, et elementum turpis
            efficitur. Nunc lobortis cursus metus, id rutrum libero sodales vel. Duis malesuada nisl eget fermentum consectetur.
          </p>
        </article>
        <article id="bumpers">
          <img src="img/bumper.jpg" alt="Car Bumper"></img>
          <p>
            Pellentesque orci turpis, rutrum sit amet mauris at, vulputate dictum justo. Nam vel urna sit amet nibh euismod
            gravida eget non massa. Mauris iaculis facilisis magna. Cras quis ultricies massa, in varius nisi. Suspendisse
            nisi ante, ornare in mi et, ultricies tempus eros. Duis massa turpis, consequat ut metus vitae, vehicula pharetra
            sapien. Suspendisse at ultricies ante. Mauris ut justo ipsum. Morbi vel augue in risus eleifend tincidunt. Sed
            nec congue nibh, eget malesuada lacus. Pellentesque ante tellus, pretium non eros sodales, consequat dictum nibh.
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
          </p>
        </article>
        <script type="text/javascript">
          jQuery(window).scroll(function(){
            var vertScroll = jQuery(this).scrollTop();
            jQuery('#logoText').css({
              "transform" : "translate(0, -"+vertScroll/3.5+"px)"
            });
          });

          jQuery(window).scroll(function(){
            var vertScroll = jQuery(this).scrollTop();
            jQuery('#searchImg').css({
              "transform" : "translate(0, "+vertScroll/20+"px)"
            });
          });
        </script>
    </body>
</html>
