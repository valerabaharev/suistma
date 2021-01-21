<?php

if (!empty($_POST['phone'])) {
    send_the_order ($_POST);
}

function send_the_order ($post){
    $params=array(
        "flow" => 6188,
        "offer" => 618,
        'ip' => $_SERVER['REMOTE_ADDR'],
        "name" => $post["name"],
        "phone" => $post["phone"],
        "fb" => $post["fb"],
        "country" => "PE",
        "ua" => $_SERVER["HTTP_USER_AGENT"],
        "us" => isset( $post["utm_source"] ) ? $post["utm_source"] : "",
        "uc" => isset( $post["utm_campaign"] ) ? $post["utm_campaign"] : "",
        "un" => isset( $post["utm_content"] ) ? $post["utm_content"] : "",
        "ut" => isset( $post["utm_term"] ) ? $post["utm_term"] : "",
        "um" => isset( $post["utm_medium"] ) ? $post["utm_medium"] : "",
    );
  $url = "https://just-traffic.org/api/wm/push.json?id=42-92024cc1522bf4c0fd44dbcf4ad88927" ;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $return= curl_exec($ch);
    curl_close($ch);
    header('Location: success.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>EMS-TRAINER ¡REVOLUCIÓN EN LOS MÚSCULOS DE ENTRENAMIENTO!
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./fonts/roboto.css">
    <link rel="stylesheet" type="text/css" href="./css/TimeCircles.css">
    <link rel="stylesheet" type="text/css" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" href="./css/bebasneue.css">
    <link rel="stylesheet" href="./css/popup-m1-style.css">

    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>





    <style>

        input, img, select, button {outline: none!important;}
    </style>





</head>
<body>

<div class="main_wrapper">

    <!-- offer -->

    <header class="offer_section offer_top">
        <h4 class="description">SENSACIÓN DE LOS MÚSCULOS EFICAZ</h4>
        <div class="content_block">
            <h1 class="main_title">Ems-Trainer</h1>
            <p class="subtitle">¡REVOLUCION EN LOS MUSCULOS DE ENTRENAMIENTO!</p>
            <div class="discount">-50%</div>
            <div class="timer_block">
                <p>HASTA EL FINAL DE ACCIÓN:
                </p>
                <div class="timer"></div>
            </div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">EL PRECIO NORMAL:</div>
                    <div class="value oldproductsum">360 sol</div>
                </div>
                <div class="price_item new">
                    <div class="text">EL VALOR DE RENTA VAFIABLE:</div>
                    <div class="value productsum">180 sol</div>
                </div>
            </div>
            <a href="#order_form" class="button">ORDENAR AHORA</a>
            <div class="products_count">Queda<span>14</span> elásticos en oferta especial.
            </div>
        </div>
    </header>

    <!-- /offer -->

    <!-- video -->

    <div class="video">
        <!--<div class="youtube" id="3HxW73kQVsY"></div>-->
		<video width="480" height="auto" controls preload="auto">
          <source src="./video/video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
          Your browser does not support the video tag. </video>
    </div>

    <!-- /video -->

    <!-- about -->

    <section class="about_section">
        <h2>
            ELABORACION UNICA PARA LOS DEPORTISTAS MEJORES AHORA ES EQUITATIVA PARA Ud.!
        </h2>
        <div class="wrapp_text_img">
            <img src="img/about__image.png" alt="Ems-Trainer">
            <p>
                DUEIN JOHNSON (BERRUECO)
            </p>
        </div>
        <div class="text_block">
            <p>
                Lo más probable es que sabe que los deportistas profesionales no pueden perder la forma y lastimarse un
                poco, especialmente durante los entrenamientos. Especialmente para esto la companía inglés EMS inc. creó
                el estimulador único para los músculos de los brazos «EMS – Trainer».
            </p>
            <p>
                Últimos 5 años estos estimuladores ha tomado como armamento por los futbolistas, jugacores de hockey,
                boxeador mejores y otros profesionales. Es que EMS – Trainer substituye el entrenamiento de los brazos,
                tórax y abdominales en el gimnasio y 10 minutos de empleo sustituyen 45 minutos de entrenamiento con las
                pesas o la maqueta de entrenamiento. ¡Con eso el <b>estimulador es seguro completamente y no puede
                dañar!</b></p>
        </div>
        <img src="img/gallery.jpg" alt="Ems-Trainer">
    </section>

    <!-- /about -->

    <!-- benefits -->

    <section class="benefits_section">
        <h2>EMS-TRAINER ES EFICAZ PARA:
        </h2>
        <div class="benefits_list">
            <div class="benefit_item">
                <h3>BRAZOS</h3>
                <ul>
                    <li>fortalece y mejora la forma de los brazos</li>
                    <li>entrena bíceps y tríceps</li>
                    <li>añade los músculos y la potencia de los brazos</li>
                </ul>
            </div>
            <div class="benefit_item">
                <h3>TÓRAX</h3>
                <ul>
                    <li>desarrolla los músculos del tórax</li>
                    <li> trabaja la forma del tórax</li>
                    <li> aňade los músculos del tórax</li>
                </ul>
            </div>
            <div class="benefit_item">
                <h3>ABDOMINALES</h3>
                <ul>
                    <li>reduce el panículo adiposo en barriga</li>
                    <li>forma el corsé de la musculación del cuerpo</li>
                    <li>crea el relieve hermoso de barriga</li>
                </ul>
            </div>
        </div>
        <a href="#order_form" class="button">ORDENAR AHORA</a>
        <div class="products_count">Queda <span>14</span> elásticos en oferta especial.

        </div>
    </section>

    <!-- /benefits -->

    <!-- results -->

    <section class="results_section">
        <h2>LOS RESULTADOS DE LA EXPLOTACION EMS-TRAINER
        </h2>
        <div class="slider owl-carousel">
            <img src="img/results__image1.jpg" alt="Ems-Trainer">
            <img src="img/results__image2.jpg" alt="Ems-Trainer">
            <img src="img/results__image3.jpg" alt="Ems-Trainer">
            <img src="img/results__image4.jpg" alt="Ems-Trainer">
        </div>
    </section>

    <!-- /results -->

    <!-- use -->

    <section class="use_section">
        <h2>PRACTIQUE EL DEPORTE DONDE QUIERA Y CUANDO QUIERA
        </h2>
        <div class="use_list">
            <div class="use_item">
                <img src="img/use__use1_image.jpg" alt="Ems-Trainer">
                <p>DURANTE DESCANSO</p>
            </div>
            <div class="use_item">
                <img src="img/use__use2_image.jpg" alt="Ems-Trainer">
                <p>DURANTE TRABAJO</p>
            </div>
            <div class="use_item">
                <img src="img/use__use3_image.jpg" alt="Ems-Trainer">
                <p>DURANTE VIAJES</p>
            </div>
            <div class="use_item">
                <img src="img/use__use4_image.jpg" alt="Ems-Trainer">
                <p>DURANTE COCINAMIENTO</p>
            </div>
        </div>
    </section>

    <!-- /use -->

    <!-- reviews -->

    <section class="reviews_section">
        <h2>COMENTARIOS DE LOS COMPRADORES
        </h2>
        <div class="reviews_list owl-carousel">
            <div class="review_item">
                <img src="img/reviews__review1_photo.jpg" alt="Ems-Trainer">
                <div class="author_info">GARCÍA ROBERTO, 25 AŇOS</div>
                <p>
                    Visito al gimnasio durante 2 años, siempre se han quedado atrás el bíceps y los brazos en junto. He
                    utilizado muchas programas pero no han querido crecer. Compré EMS-Trainer, era escéptico, pero sea
                    lo que sea. En general, me quedo a cuadros, ahora los brazos ha adelantado el todo mi coleto)) pero
                    eso aparenta más mejor que al contrario. Me gusta mucho que puede utilizarlo cuando quieres,
                    ordinario pongo en marcha durante la película)
                </p>
            </div>
            <div class="review_item">
                <img src="img/reviews__review2_photo.jpg" alt="Ems-Trainer">
                <div class="author_info">IZAN GONZÁLEZ, 27 AÑOS</div>
                <p>
                    En general quiero decir que el resultado superó las expectativas. Honestamente no pudo pensar que
                    eso será tan fantástico. No puedo describir, pero los músculos empezan trabajar y forcejar
                    independiento de tú. Este dispositivo trabaja. Si temporiza mucho tiempo en la sofá, sus músculos no
                    reciben tales cargos. Puede resobarles de esa manera, y si al mismo tiempo hacer gimnasia a compás
                    de trabajo, el resultado será mejor
                </p>
            </div>
            <div class="review_item">
                <img src="img/reviews__review3_photo.jpg" alt="Ems-Trainer">
                <div class="author_info">LEO RODRÍGUEZ, 30 AÑOS</div>
                <p>
                    Siempre he velado por su figura, pero no pudo librarse de barriga – no tenía los abdominales. Alguna
                    vez en uno de los foros ví la discución del cinturón EMS-Trainer. Todos los que lo habían utilizado,
                    dijeron que puede practicar durante el descanso en sofá. Por cierto, me sonreí de estos relatos,
                    pero estudié con atención el principio de funcionamiento del dispositivo y decidí aprobar. ¡No
                    lamenté nunca! Es fenómeno: dos semanas – y menos 4 kg. Y todo lo es grasa de la barriga, que no me
                    dió tregua. Ahora puedo admira mis abdominales hermosos
                </p>
            </div>
        </div>
    </section>

    <!-- /reviews -->

    <!-- order info -->

    <section class="order_info_section">
        <h2>ENTREGA Y EL PAGO
        </h2>
        <div class="info_list">
            <div class="info_item">
                <div class="icon_block">
                    <img src="img/order_info__info1_icon.png" alt="Ems-Trainer">
                </div>
                <div class="text_block">
                    <h4>ENTREGA</h4>
                    <p>
                        Por servicio de mensajería durante 1-10 días.
                    </p>
                </div>
            </div>
            <div class="info_item">
                <div class="icon_block">
                    <img src="img/order_info__info2_icon.png" alt="Ems-Trainer">
                </div>
                <div class="text_block">
                    <h4>PAGO</h4>
                    <p>La paga se realiza a la hora de recepción de la mercancía.</p>
                </div>
            </div>
            <div class="info_item">
                <div class="icon_block">
                    <img src="img/order_info__info3_icon.png" alt="Ems-Trainer">
                </div>
                <div class="text_block">
                    <h4>GARANTÍAS</h4>
                    <p>
                        Siempre examinamos la mercancía antes de envío y garantizamos 100% caladad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- /order info -->

    <!-- offer -->

    <section class="offer_section offer_bottom">
        <h4 class="description">SENSACIÓN DE LOS MÚSCULOS EFICAZ</h4>
        <div class="content_block">
            <h3 class="main_title">Ems-Trainer</h3>
            <p class="subtitle">¡REVOLUCION EN LOS MUSCULOS DE ENTRENAMIENTO!</p>
            <div class="discount">-50%</div>
            <div class="timer_block">
                <p>HASTA EL FINAL DE ACCIÓN:
                </p>
                <div class="timer"></div>
            </div>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">EL PRECIO NORMAL:</div>
                    <div class="value oldproductsum">360 sol</div>
                </div>
                <div class="price_item new">
                    <div class="text">EL VALOR DE RENTA VAFIABLE:</div>
                    <div class="value productsum">180 sol</div>
                </div>
            </div>

            <form id="order_form" class="lt-form order_form" action="" method="post">
            <input type="hidden" name="utm_source" value="<?=$_GET['utm_source'];?>" />
<input type="hidden" name="utm_content" value="<?=$_GET['utm_content'];?>" />
<input type="hidden" name="utm_campaign" value="<?=$_GET['utm_campaign'];?>" />
<input type="hidden" name="utm_term" value="<?=$_GET['utm_term'];?>" />
<input type="hidden" name="utm_medium" value="<?=$_GET['utm_medium'];?>" />
<input type="hidden" name="fb" value="<?=$_GET['fb'];?>" />
                <select name="aim" class="countryselect field"><option value='1'>Peru</option></select>
				<input class="field" type="text" name="name" pattern="^[^0-9!@#$%^&*()_]{1,256}$" maxlength="256" value="" placeholder="Introduzca su nombre" required>
                <input class="field" type="text"  pattern="^[+0-9]+$" minlength="7" maxlength="15" name="phone" value="" placeholder="Introduzca su teléfono" required>

				<div class="reolader">
					<button type="submit" class="mm_button button" >ORDENAR AHORA</button>

				</div>
            </form>
            <div class="products_count">Queda <span>14</span> elásticos en oferta especial.
            </div>
        </div>
    </section>

    <!-- /offer -->

    <!-- footer -->

    <footer class="footer_section">
	  <center style="color: #fff;">
		<p>Avenida El Derby 055, Santiago de Surco, Perú</p>
		<p style="font-size: 14px;"><a href="policy_es.html" target="_blank">Política de privacidad</a></p>

	  </center>
    </footer>

    <!-- /footer -->

</div>


<script src="./js/TimeCircles.js"></script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/scripts.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var flag = true;
        $(window).on('mouseout', function (e) {
            e = e ? e : window.event;
            var from = e.relatedTarget || e.toElement;
            if (!from || from.nodeName == "HTML" && flag) {
                $('#overlay-popup-m1').fadeIn();
                $('.m1modal').fadeIn();
                flag = false
            }
        })

        $('.close-m1').on('click', function () {
            $('#overlay-popup-m1').remove();
            $('.m1modal').remove();
        })
    });

</script>

<div id="overlay-popup-m1"></div>
<div id="m1-form" class="m1modal" style="display: none;"><a class="close-m1"></a>
  <div>
    <div class="popup-m1-title">¿TE GUSTA ESTA OFERTA?</div>
    <div class="popup-m1-cont">
      <div class="popup-m1-text1">¡Le diremos todo sobre este producto, le ofreceremos las mejores condiciones y le familiarizaremos con ofertas promocionales adecuadas! </div>
      <form method="POST" action="" class="lt-form popup-m1-form">
      <input type="hidden" name="utm_source" value="<?=$_GET['utm_source'];?>" />
<input type="hidden" name="utm_content" value="<?=$_GET['utm_content'];?>" />
<input type="hidden" name="utm_campaign" value="<?=$_GET['utm_campaign'];?>" />
<input type="hidden" name="utm_term" value="<?=$_GET['utm_term'];?>" />
<input type="hidden" name="utm_medium" value="<?=$_GET['utm_medium'];?>" />
<input type="hidden" name="fb" value="<?=$_GET['fb'];?>" />
        <select name="aim" class="countryselect"><option value='1'>Peru</option></select>
		<input type="text" name="name" pattern="^[^0-9!@#$%^&*()_]{1,256}$" maxlength="256" value="" placeholder="Ingrese su nombre" required="">
        <input type="text"  pattern="^[+0-9]+$" minlength="7" maxlength="15" name="phone" value="" placeholder="Introduzca su teléfono" required="">
		<div class="reolader">
			<button type="submit" class="mm_button" >RECUÉRDAME</button>

		</div>

      </form>
      <div class="popup-m1-text2">El operador te devolverá la llamada en 5-10 minutos</div>
    </div>
  </div>
</div>



    </body>
</html>
