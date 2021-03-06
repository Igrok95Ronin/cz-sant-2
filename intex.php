<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'INSTALATÉR'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<body>
        <!--Шапка сайта-->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 header-container">
                        <div class="lists lists--padding">
                            <div class="lists__list">OBLAST APLIKACE V <strong>ČESKÉ REPUBLICE</strong></div>
                            <div class="lists__list"><strong>PROFESIONÁLNÍ VYBAVENÍ</strong> A MNOHALETÁ PRAXE</div>
                            <div class="lists__list">HAVARIJNÍ SLUŽBA S OKAMŽITÝM PŘÍJEZDEM</div>
                            <div class="lists__list"><strong>NÍZKÉ CENY</strong> A MOŽNOST KALKULACE PŘEDEM</div>
                        </div>
                        <div class="logo">
                            <img class="logo__img" src="assets/img/slider.png" alt="">
                        </div>
                    </div>                 
                </div>            
            </div>
        </header>
        <!-- Раздел страницы-->
        <section class="first-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 first-section-container">
                        <div class="title my-5">
                            <h1 class="title__h1">
                            <?= $title ?>
                            </h1>
                        </div>
                        <div class="installation">
                            <div class="installation-bathroom instalattion-bathroom--width">
                                <div class="installation__img"></div>
                                <p class="instalattion__name">
                                    UCPANÝ ZÁCHOD/PISOÁR
                                </p>
                            </div>
                            <div class="installation-bathroom instalattion-bathroom--width">
                                <div class="installation__img"></div>
                                <p class="instalattion__name">
                                    UCPANÝ DŘEZ/UMYVADLO
                                </p>
                            </div>
                            <div class="installation-bathroom instalattion-bathroom--width">
                                <div class="installation__img"></div>
                                <p class="instalattion__name">
                                    UCPANÝ ODPAD VE VANĚ
                                </p>
                            </div>
                            <div class="installation-bathroom instalattion-bathroom--width">
                                <div class="installation__img"></div>
                                <p class="instalattion__name">
                                    SERVISNÍ SLUŽBY
                                </p>
                            </div>
                        </div>
                        <div class="description">
                            <p class="desctiption__text mt-4">
                                Trápí vás ucpané odpady ve vaší domácnosti, kanceláři nebo třeba restauraci? Potřebujete je co nejrychleji uvolnit? V tom případě neváhejte a ozvěte se nám. Instalatéři z našeho týmu za sebou mají více než 12 let praxe. Za tu dobu jsme se setkali s nejrůznějšími problémy – proto se můžeme zaručit, že budete s výsledky naší práce spokojení. Pracujeme kvalitně, rychle, spolehlivě a za příjemné ceny. A co víc? Kromě čištění odpadů mechanickou cestou s profesionálním nářadím vám nabízíme také další instalatérské práce. A nejen to. Můžeme vám nabídnout také pokládku podlahového topení, nemluvě o drobných zednických pracích a rekonstrukci koupelny.
                            </p>
                            <div class="forms mt-4">

                                <form id="jq_form">
                                    <h6 class="forms__h6 text-center">Kontaktujte nás a zabezpečte si naše zpětné volání<h6>
                                    <div class="mb-3 mt-4">
                                        <input class="form-control" placeholder="Jméno" name="jq_name" type="text">
                                        <div id="jq_name" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Ulice" name="jq_street" type="text">
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="PSČ / město" name="jq_city" type="text">
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                    </div>
                                    <div class="my-3">
                                        <textarea rows="5" class="form-control" name="jq_text" placeholder="Zprávy"></textarea>
                                        <div id="jq_text" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <input class="btn text-uppercase fw-bold mb-1 px-5 py-2 forms__buttom" type="submit" id="jq_submit" value="Poslat"> 
                                    <div id="jq_success" style="display:none">Díky za vaši zprávu. Byla odeslána.</div>
                                </form> 

                            </div>
                        </div>
                    </div>                 
                </div>            
            </div>
        </section>
        <section class="second-section mt-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 second-section-container">
                        <p class="second-section__info">V případě, že chcete využít naší havarijní služby, nebo se chcete domluvit na termínu naší návštěvy:</p>
                        <p class="second-section__call">VOLEJTE NA TELEFONNÍ ČÍSLO</p>
                        <p class="phone mt-4">
                            <a class="phone__number" href="<?= $phone_href ?>"><?= $phone_name ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="third-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 third-block-container">
                        <div class="services">
                            <div class="description-services description-services--width-margin">
                                <img class="description-services__img" src="assets/img/1havarijni-sluzba-praha-430x230.jpg" alt="">
                                <h2 class="description-services__title">HAVARIJNÍ SLUŽBA</h2>
                                <p class="description-services__descriptions description-services__descriptions--position-margin">Ucpaná toaleta, prasklé potrubí, ale také netěsnící sifon patří k nepříjemným problémům, které vyžadují rychlé řešení. I proto je zde naše havarijní služba. Zavolejte a my přijedeme, co nejrychleji to bude možné.</p>
                            </div>
                            <div class="description-services description-services--width-margin">
                                <img class="description-services__img" src="assets/img/2mechanicke-cisteni-odpadu-praha-430x230.jpg" alt="">
                                <h2 class="description-services__title">MECHANICKÉ ČIŠTĚNÍ ODPADU</h2>
                                <p class="description-services__descriptions description-services__descriptions--position-margin">Při čištění odpadů volíme mechanický způsob čištění, který je mnohem spolehlivější než čištění chemické. Výsledkem jsou průchozí odpady – a to dlouhodobě. Pracujeme s profesionálními nástroji, jako je například mechanické čisticí péro a kamera.</p>
                            </div>
                            <div class="description-services description-services--width-margin">
                                <img class="description-services__img" src="assets/img/3cisteni-kanalizace-praha-430x230.jpg" alt="">
                                <h2 class="description-services__title">ČIŠTĚNÍ KANALIZACE</h2>
                                <p class="description-services__descriptions description-services__descriptions--position-margin">Vana, sprcha a toaleta nejsou tím jediným, co se můžete léty používání ucpat. I proto vám nabízíme službu čištění kanalizace, kdy se postaráme o to, aby vaše kanalizace fungovala stejně, jako když byla nová.</p>
                            </div>
                            <div class="description-services description-services--width-margin">
                                <img class="description-services__img" src="assets/img/4instalaterske-prace-430x230.jpg" alt="">
                                <h2 class="description-services__title">INSTALATÉRSKÉ PRÁCE</h2>
                                <p class="description-services__descriptions description-services__descriptions--position-margin">Kromě čištění odpadů vám může náš instalatér Praha nabídnout také různé instalatérské práce. Potřebujete vyměnit radiátor, nebo vodovodní baterii v kuchyni? Žádný problém! Mimo to vám můžeme nabídnout také drobnější zednické práce.</p>
                            </div>
                            <div class="description-services description-services--width-margin">
                                <img class="description-services__img" src="assets/img/5montaz-sprchoveho-koutu-430x230.jpg" alt="">
                                <h2 class="description-services__title">MONTÁŽ SPRCHOVÉHO KOUTU</h2>
                                <p class="description-services__descriptions description-services__descriptions--position-margin">Rekonstruujete a těšíte se na chvíli, kdy se budete moct vysprchovat ve svém novém sprchovém koutu? Pokud ano, je třeba jej ještě namontovat. A od toho jsme tady my. Ať už potřebujete namontovat sprchový kout nebo sprchovou baterii, rádi vám pomůžeme.</p>
                            </div>
                            <div class="description-services description-services--width-margin">
                                <img class="description-services__img" src="assets/img/6instalace-podlahoveho-topeni-praha-430x230.jpg" alt="">
                                <h2 class="description-services__title">INSTALACE PODLAHOVÉHO TOPENÍ</h2>
                                <p class="description-services__descriptions description-services__descriptions--position-margin">Podlahové topení je v současnosti stále oblíbenější. A není divu – ačkoliv jsou náklady na jeho instalaci vyšší než u klasických radiátorů, co se týče provozních nákladů, ty jsou mnohonásobně nižší. Chcete ušetřit za topení i vy?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-block my-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="other-services">
                            <h2 class="other-services__title my-5">UMÍME NEJEN ČIŠTĚNÍ UCPANÝCH ODPADŮ</h2>
                            <p class="other-services__description">Trápí vás neodtékající odpady ve vaší domácnosti, kanceláři nebo třeba restauraci? Potřebujete je co nejrychleji uvolnit? V tom případě neváhejte a ozvěte se nám. Instalatéři Praha z našeho týmu za sebou mají více než 12 let praxe. Za tu dobu jsme se setkali s nejrůznějšími problémy – proto se můžeme zaručit, že budete s výsledky naší práce spokojení. Pracujeme kvalitně, rychle, spolehlivě a za příjemné ceny. A co víc? Kromě čištění odpadů mechanickou cestou s profesionálním nářadím vám nabízíme také další instalatérské práce. A nejen to. Můžeme vám nabídnout také pokládku podlahového topení, nemluvě o drobných zednických pracích a rekonstrukci koupelny.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fifth-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 fifth-section-container">
                        <div class="gallery">
                            <h2 class="gallery__tytle mb-5">GALERIE</h2>
                            <div class="gallery__images">
                                <img class="gallery__img" src="assets/img/g1montaz-ventilu-600x600.jpg" alt="" >
                                <img class="gallery__img" src="assets/img/g2instalace-bojleru-pod-umyvadlo-600x600.jpg" alt="" >
                                <img class="gallery__img" src="assets/img/g3vymena-kohoutu-2-600x600.jpg" alt="" >
                                <img class="gallery__img" src="assets/img/g4vymena-baterie-praha-3-600x600.jpg" alt="" >
                                <img class="gallery__img" src="assets/img/g5montaz-umyvadla-a-skrinky-600x600.jpg" alt="" >
                                <img class="gallery__img" src="assets/img/g6cisteni-odpadu-praha-3-600x600.jpg" alt="" >
                            </div>
                            <div class="gallery__buttom d-grid col-12 col-md-4 col-lg-3 m-auto mt-4">
                                <a href="<?= $phone_href ?>" class="btn gallery__button-link py-2 fs-3 fw-bold"><?= $phone_name ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sixth-section py-5 my-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sixth-section-container">
                        <h2 class="reviews-title mb-5">REFERENCE</h2>
                        <div class="wrapper-reviews">
                            <div class="reviews">
                                <p class="reviews__review">Pan Musil opravil prokapávající kohoutek velice rychle. Ceníme si také brzkého příjezdu a skvělé komunikace, dáváme tedy pět hvězdiček a doporučujeme!</p>
                                <div class="reviews__name-img">
                                    <p class="reviews__name">Ilona Sněhotová</p>
                                    <img class="reviews__img" src="assets/img/uvozovky.png" alt="">
                                </div>
                                <div class="reviews__date">14.10. 2020</div>
                            </div>
                            <div class="reviews">
                                <p class="reviews__review">Poptávali jsme demontáž sprchového koutu, jeho likvidaci a montáž nového sprchového koutu. Vše proběhlo na jedničku, pan Musil si vše přivezl a práce provedl ku naší spokojenosti.</p>
                                <div class="reviews__name-img">
                                    <p class="reviews__name">Pavel Vybíhal</p>
                                    <img class="reviews__img" src="assets/img/uvozovky.png" alt="">
                                </div>
                                <div class="reviews__date">10.1. 2021</div>
                            </div>
                            <div class="reviews">
                                <p class="reviews__review">Na pana Musila jsem dostala doporučení, provedl nám kompletní rekonstrukci koupelny a nemohu si na nic stěžovat. Za rozumnou cenu práci provedl v požadovaném termínu.</p>
                                <div class="reviews__name-img">
                                    <p class="reviews__name">Darina Plevová</p>
                                    <img class="reviews__img" src="assets/img/uvozovky.png" alt="">
                                </div>
                                <div class="reviews__date">15.3. 2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Нижний колонтитул страницы-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 footer-copyright">
                        <img class="footer_copytight" src="assets/img/Copyright.svg" alt="">
                        2022
                    </div>                 
                </div>            
            </div>
        </footer>
        <!--Style-->     
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
</body>
</html>