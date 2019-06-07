<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
    <title>Easy Lviv</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/myoverrideBootstrap.css" rel="stylesheet" />
    <link href="Content/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon">

</head>
<body>
    <div class="container" role="main">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            	                    <form class="navbar-right">
                        <ul class="nav navbar-nav">
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Мова <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                          		 <li><a href="index.html"><img src="images/ukr.jpg"/>Українська</a></li>
                         		 <li><a href="eng.html"><img src="images/uk.jpg"/>English</a></li>
                         		 <li><a href="deut.html"><img src="images/ger.png"/>Deutsch</a></li>
                         		 <li><a href="pol.html"><img src="images/pol.png"/>Polski</a></li>
                                </ul>
                            </li>
                        </ul>
                    </form>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#home"><i class="glyphicon glyphicon-bookmark"></i> Easy Lviv</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-left">
                        <ul class="nav navbar-nav">
                            	<li class="active"><a href="#home"><i class="glyphicon glyphicon-home"></i> Головна</a></li> 
                            	<li><a href="#about"><i class="glyphicon glyphicon-globe"></i> Огляд</a></li>
                            	<li><a href="#download"><i class="glyphicon glyphicon-download"></i> Скачати</a></li>
                            	<li><a href="#emo"><i class="glyphicon glyphicon-eye-open"></i> Демо</a></li>
                            	<li><a href="#contact"><i class="glyphicon glyphicon-send"></i> Зв'язок</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <div style="height: 50px"></div>
        </div>

        <div class="image-container">
        	                    	<a id="home"></a>
            <img class="img-responsive" src="images/photo2.jpg" />
            <div class="div-info">
                <div style="float: left">
                    <div class="float-left">
                        <i class="symbol glyphicon glyphicon-bookmark"></i>
                    </div>
                    <div class="float-right">
                        <p class="text2 text-center">Easy Lviv</p>
                    </div>
                </div>
                <div style="float:right">
                    <p class="text3">Просто, легко та доступно...</p>
                    <p class="text-center">
                    	<div id="specialists">
                        <a class="btn btn-black" href="#specialist">Про нас »</a>
                    </div>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-marketing">
            <div class="row container">
                <div class="row">
                    <div class="col-md-12">
                    	<a id="specialist"></a>
                        <h1 class="text-justify">Команда розробників</h1> 
                        <footer class="modal-footer" />
                    </div>
                    <div class="col-lg-4">
                        <img class="image-center img-circle img-responsive" src="images/face1.jpg" width="140" height="140"/>
                        <h2 class="text-center">Куликович Дмитро</h2>
                        <p class="text-center">
						Один із розробників сайту, front-end та back-end розробник, учасник проекту Easy Lviv.
						Дмитро профейсійна, чесна та порядна людина. Компанійський та дружній, завжди допоможе друзям. Захоплюється спортом та веде активний, здоровий спосіб життя.
                        </p>
                         <div id="showcase" style="padding-left: 80px;">
                         	    <p1></p1>
   								<p2></p2>
    							<p3></p3>
                        <p class="text-center">
     						<ul class="social-icons">
      						  <a href="https://www.facebook.com/valar.morgoulis" class="social-icon" target="_blank"> <i class="fa fa-facebook"></i></a>
       						  <a href="https://twitter.com/" class="social-icon" target="_blank"> <i class="fa fa-twitter"></i></a>
        					  <a href="https://plus.google.com/u/0/100195642662343630900" class="social-icon" target="_blank"> <i class="fa fa-google-plus"></i></a>
 						   </ul>
                        </p>
                         </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="image-center img-circle img-responsive" src="images/stas.jpg" width="140" height="140" />
                        <h2 class="text-center">Романко Станіслав</h2>
                        <p class="text-center">
						Один із розробників додатку, лідер команди,
						учасник проекту Easy Lviv.
						Станіслав дуже наполегливий та надійний.
						Ідея цього проекту належить йому. 
						Якби не його лідерські навички, 
						то можливо б і не було цього проекту, 
						адже він згортував навколо себе прогресивну команду.
                        </p>
                        <div id="showcase" style="padding-left: 102px;">
                        <p class="text-center">
          				 <ul class="social-icons1">
       					 <a href="https://www.facebook.com/stas.romanko" class="social-icon"> <i class="fa fa-facebook" target="_blank"></i></a>
        				 <a href="https://vk.com/surjkee" class="social-icon" target="_blank"> <i class="fa fa-google-plus"></i></a>
   						 </ul>
                        </p>
                    </div>
                    </div>
                    <div class="col-lg-4">
                        <img class="image-center img-circle img-responsive" src="images/pasha.jpg" width="140" height="140" />
                        <h2 class="text-center">Шиманський Павло</h2>
                        <p class="text-center">
						Один із розробників сайту, фронт-енд розробник, перекладач, учасник проекту Easy Lviv.
						Спокійний, скромний та надійний друг. Завжди ставиться до діла дуже серйозно та професійно. Ніколи не покине у біді, завжди прийде на допомогу. Захоплення: німецька мова.                        </p>
                        <div id="showcase" style="padding-left: 102px;">
                        <p class="text-center">
         				 <ul class="social-icons2">
        				 <a href="" class="social-icon"> <i class="fa fa-facebook" target="_blank"></i></a>
       					 <a href="https://vk.com/id174273859" class="social-icon" target="_blank"> <i class="fa fa-google-plus"></i></a>
    					 </ul>
                        </p>
                    </div>
                    </div>
                </div>
                </footer>
            </div>
        </div>

        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class=""></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
                <li data-target="#carousel" data-slide-to="2" class="active"></li>
            </ol>

            <a id="about"></a>
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <img class="image" data-src="holder.js/1140x500/auto/#777:#555/text:Lorem Ipsum" alt="First slide [1366x768]" src="images/index.jpg" data-holder-rendered="true">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Ратуша</h1>
                            <p>Льві́вська ра́туша — адміністративний будинок у центральній частині Львова, на площі Ринок.</p>
                            <p><a class="btn btn-lg btn-primary" href="#download" role="button">Почати прямо зараз</a></p>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <img class="image" data-src="holder.js/1140x500/auto/#666:#444/text:Lorem Ipsum" alt="Second slide [1366x768]" src="images/index2.jpg" data-holder-rendered="true">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Оперний театр</h1>
                            <p>Львівський національний академічний театр опери та балету імені Соломії Крушельницької — театр опери і балету у Львові.</p>
                            <p><a class="btn btn-lg btn-primary" href="#download" role="button">Почати прямо зараз</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="image" data-src="holder.js/1140x500/auto/#555:#333/text:Lorem Ipsum" alt="Third slide [1366x768]" src="images/index3.jpg" data-holder-rendered="true">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Високий замок</h1>
                            <p>Високий замок - одна з височин в місті Львові, найвища точка - 413 м над рівнем моря.</p>
                            <p><a class="btn btn-lg btn-primary" href="#download" role="button">Почати прямо зараз</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Попередня</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Наступна</span>
            </a>
        </div>


            <section class="engine"><a href=""></a></section><section class="mbr-section article content9 cid-rnmdoZ3im9" id="content9-f">
        
                
<section class="mbr-section article content9 cid-rnmdjBiQfL" id="content9-e">


        <div>
            <div class="col-md-7">
				 <a id="download"></a>
                <h2> Easy Lviv: Як почати?</h2>
                <div class="float-left col-md-1">
                    <i class="symbol2 glyphicon glyphicon-time"></i>
                </div>
                <div class="float-right col-md-11">
                    <p>Ви можете скачати наш додаток за наступними посиланнями:</p>
                </div>

                <table class="table-bordered table-responsive">
                    <tr>
                        <td>
                            <div class="table-container text-center">
                                <a target="_blank" href="https://play.google.com/store?hl=ru"><img src="images/android.png"/></a>
                            </div>
                        <td>
                            <div class="table-container text-center">
                               <a target="_blank" href="https://www.apple.com/ru/"><img src="images/ios.png"/></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-md-5">
                <img class="img-responsive" src="images/devka2.png" />
                <a id="emo"></a>
            </div>

            <div class="col-md-12">
                <hr/>
                <footer/>
            </div>
        </div>
    </div>

 
    <div class="image-container container">
    	               <a id="contact"></a>
    	               <h1>Демо версія</h1>
    	<div id="map" style="height: 400px;"></div>

        <div class="div-email">
            <div class="float-left">

                <i class="symbol3 glyphicon glyphicon-bookmark"></i>
            </div>
            
            <div>
                <h3 class="text2">Easy Lviv</h3>
                <p class="text3">Будьте на зв'язку</p>
            </div>
            <input placeholder="Enter your E-mail" class="form-control" type="text">
            <p class="btn btn-receive">Отримувати новини</p>
        </div>
        <img class="img-responsive image-dark"  src="images/coffee-tablet-headphones-work-163187.jpeg" />
        </div>


        <div class="div-end">
            <p class="text4">Copyright @2017 Автори сайту: <a href="https://www.vk.com/menelegkonaiti" target="_blank">Куликович Дмитро</a> та <a href="https://vk.com/id174273859" target="_blank"> Шиманський Павло.</a> Всі права захищені.</p>
        </div>

    </div>

    <script src="scripts/jquery-3.2.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/script.js"></script>



          <script>
      function initMap() {
        var uluru = {lat: 49.8480827, lng: 24.0290827};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });


       var markers = [
        ['Оперний театр, Львів', 49.8440193,24.0261648],
        ['Високий замок, Львів', 49.8482101,24.0393698],
        ['Ратуша, Львів', 49.8418072,24.0311128],
        ['Замок Потоцьких, Львів', 49.8378826,24.0268047],
        ['Собор Святого Юра, Львів', 49.8386783,24.0129201]
    ];

    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Оперний театр</h3>' +
        '<p>Театральна будівля, призначена для виконання оперних постанов, що складається зі сцени, оркестрової ями, зали для глядачів та приміщень для переодягання та зберіганя декорацій. Тоді як більшість будівель такого типу призначені виключно для оперних постанов, інші є частинами багатофункціональних культурних центрів.</p>' +        '</div>'],
        ['<div class="info_content">' +
        '<h3>Високий замок</h3>' +
        '<p>За архівними документами і науковою літературою Високий та Низький замки у Львові виникли в часи Галицько-Волинської держави. З руських літописів і пізніших хронік XVI–XVII ст. (Яна Альнпека, Мартіна Ґруневеґа, Бартоломея Зиморовича) відомо, що на Замковій горі під керівництвом князя Лева Даниловича збудували укріплення. Вони були деревяно-земляними, як і переважна більшість руських градів. 1259 року на вимогу хана Бурундая, укріплення були розібрані, але в 1270 році відбудовані наново. Львівський історик Бартоломей Зиморович вважав цей рік датою первісного будівництва фортифікацій на Замковій горі. У 1340 році, коли Львів вперше був захоплений Казимиром ІІІ, за словами хроніста Яна Длуґоша, було спалено деревяний замок. Повторно швидкоруч відновлений замок був спалений литовцями у 1353 році.</p>' +
        '</div>'],
                ['<div class="info_content">' +
        '<h3>Ратуша</h3>' +
        '<p> Адміністративний будинок у центральній частині Львова, на площі Ринок, 1. Ратуша протягом всього часу свого існування була місцем перебування центральної міської влади Львова. Сьогодні є резиденцією Львівської міської ради. Памятка архітектури національного значення, що належить до Світової спадщини ЮНЕСКО. Сучасна вежа львівської ратуші має висоту 65 метрів, є найвищою в Україні.</p>' +        '</div>'],
                ['<div class="info_content">' +
        '<h3>Замок Потоцьких</h3>' +
        '<p>Родина Потоцьких, продавши свій палац на площі Галицькій (нині відомий як Палац Бесядецьких), придбала у 1822 р. нерухомість на вулиці Широкій (нині Коперника). На планах Львова XVIII — першої половини XIX ст. на цій дільниці видно розпланований город та кілька невеликих будівель.Перший палац збудовано у стилі класицизму за проектом архітектора Ігнатія Хамбреза. Це була двоповерхова прямокутна в плані будівля із високим дахом. Фасад симетричний центральним ризалітом, увінчаним аттиком з балюстрадою. Перший ярус фасаду рустований, другий ярус ризаліту декорований шістьма парами іонічних пілястр. Власниками були Марія з Сангушків та її чоловік Альфред Потоцький. Палац було розібрано у 1860—1861 рр. Однак спорудження нової резиденції затягнулось на три десятиріччя. Будівництво розпочалось лише у 1880 р.Новий палац був збудований у стилі бароко, епохи французького короля Луї XIV за проектом французького архітектора Луї Альфонса Рене Довернь (фр. Louis Dauvergne). Проект модифіковано львівськими архітекторами Юліушем Цибульським та Людвіком Балдвіном-Рамултом і реалізовано під їх керівництвом. 1892 року проект експонувався на будівельній виставці у Львові.</p>' +        '</div>'],
                ['<div class="info_content">' +
        '<h3>Собор Святого Юра</h3>' +
        '<p>Розташований на Святоюрській горі, за адресою: площа святого Юра № 5. Висота над рівнем моря — 321 метр. З 1998 року Собор разом із Ансамблем історичного центру Львова належить до Світової спадщини ЮНЕСКО. Власне собор є частиною комплексу: барокового собору (1745–1770) з дзвіницею (дзвін з 1341), рококової з класицистичними портиками митрополичої палати (1761–1762), будинків капітули, тераси з двораменними сходами, ажурної огорожі довкола соборового подвіря з двома брамами в подвірї (1771) та мурів, що обводять капітульні будинки і владичий сад (1772).</p>' +        '</div>']

    ];

        var infoWindow = new google.maps.InfoWindow(), marker, i;

  for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
      
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
         google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
      }

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

	}
    </script>

    <?php
        $to = $_POST["email"];
        $subject = "Letter";
        $message = "Your email is " . $to;
        $servername = 'localhost'; 
        $username = 'user'; 
        $password = '1';  
        $databaseName = 'email';
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $databaseName);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $email = $_POST["email"];
        $sql = "INSERT INTO email
        VALUES (null, '$email')";
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
          mail($to,$subject,$message);
        } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        
      ?>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtBNiO--YmqJp93ta-Gzadwjqbwt4S09E&callback=initMap">
    </script>



</body>
</html>
