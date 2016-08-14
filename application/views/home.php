<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asl El Baraka</title>
 <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
<?php 
$css1 = base_url().'resources/css/bootstrap-rtl.min.css';
$css2 = base_url().'resources/css/rtl.css';
$css3 = base_url().'resources/css/bootstrap-responsive-rtl.min.css';
$css4 = base_url().'resources/css/agency.css';
$css5 = base_url().'resources/font-awesome/css/font-awesome.min.css';
?>
    <link href="<?php echo $css1; ?>" rel="stylesheet">
    <link href="<?php echo $css2; ?>" rel="stylesheet">
    <link href="<?php echo $css3; ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $css4; ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $css5; ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style>
	h1,h2,h3,h4,h5,h6,.lead
	{
	  font-family: 'Droid Arabic Kufi', sans-serif;
        }
	.lead
	{
	  font-size:40px;
	}
   </style>

</head>
<body id="page-top" class="index" dir="rtl">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">أصل البركة</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">ألبوم الصور</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">من نحن</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">الخدمات</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">اتصل بنا</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">مرحبا بك معنا !</div>
                <div class="lead">فرصة سعيدة بمعرفتك </div>
                <a href="#about" class="page-scroll btn btn-xl">المزيد</a>
            </div>
        </div>
    </header>


    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">ألبوم الصور</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
	<?php $count = 0; foreach ($images as $image){ ?>
                <div class="col-md-4 col-sm-6 portfolio-item" style="display:inline">
                    <a href="#portfolioModal1<?php echo $count++; ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php $src = base_url().'uploads/'.$image['image_name'] ; echo $src; ?>" class="img-responsive" style="width:900; height:900" alt="">
                    </a>
                </div><?php } ?>
            </div>
        </div>
    </section>


   <!--News-->
   <div id="news" class="alert-danger" style="background-color:#fed136" role="alert"><p style="font-family: Impact; font-size: 18pt">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<marquee direction="right"><?php foreach ($news as $news_1){  ?><h3><?php echo $news_1['details'];?></h3><?php }?></marquee>
			
   </div>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">من نحن</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="text-muted">مؤسسة أصل البركة لنقل العفش و الأثاث بالرياض من أعرق شركات النقل علي مستوي المملكة و ذلك لأننا لدينا من الخبرة ما يجعلنا أفضل شركة نقل عفش بالرياض فتمتد خبرتنا في هذا المجال لأكثر من عشر سنوات قدمت من خلالها الشركة خدماتها المختلفة لعملائها الكرام فنالت استحسان جميع العملاء و شهد الجميع لنا بالكفاءة و الامانة و حسن المعاملة لذلك يسعدنا أن نستمر في تقديم خدماتنا لجمهورنا العزيز و أهلنا الكرام داخل و خارج المملكة العربية السعودية من خلال فريق عمل محترف من العمال و الفنيين و امتلاكنا لأفضل سيارات و شاحنات نقل العفش التي يقودها مجموعة من أمهر السائقين و فيما يلي توضيح للخدمات التي تقدمها لكم مؤسسة البركة </p>
                </div>
            </div>
        </div>
    </section>

      <!-- Services Section -->
    <section id="services" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading ">الخدمات</h2>
                    <h3 class="section-subheading text-muted">نقدم لك كل ما تحتاجه لنقل الأثاث داخل و خارج المملكة من ( فك - تغليف - نقل - تركيب - تخزين مع الضمان - أيدي مدربة - خبرة في مجال نقل الأثاث - خصم 20% )</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading ">نقل عفش و أثاث</h4>
                    <p class="text-muted">أولي خطوات الخدمة بعد إتصال العميل هي معاينة الأغراض و الإتفاق علي الأسعار و تقدم الشركة أرخص سعر نقل عفش. </br>يتم تحديد عدد السيارات و العمال و الفنيين حسب رغبة العميل.</br> يتحرك الفريق بالكامل حسب الموعد المتفق عليه.</br> يقوم الفني بفك الأغراض من غرف النوم و ستائر و مكيفات و مطابخ. </br> يتم تغليف الأثاث و الأغراض الأخري لحمايتها من التلف و التكسير.</br> يتم تعبئة أدوات المطبخ في كراتين و تغليفها. </br> يتم تعبئة الملابس داخل شنط بلاستيكية للحفاظ عليها. </br> يتم نقل الأغراض إلي البيت الجديد و تركيبها مرة أخري.</br> و نتعهد بعدم المساس بشئ من الأغراض و نقدم الضمانات الكافية حال حدوث أي خطأ.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading custom">تخزين العفش</h4>
                    <p class="text-muted">تعد مشكلة السفر و ترك أثاث المنزل من المشكلات التي تتسبب في إزعاج الكثير و لكن لا داعي للإزعاج فشركة البركة توفر لك الحلول الممتازة و الجذرية لهذه المشكلة فلدينا عميلنا العزيز أفضل المستودعات داخل الرياض و التي يتم تخزين كافة الأغراض المنزلية بها كما أننا نتبع أحدث الأساليب في مجال تخزين العفش فنقوم بفهرسة و ترقيم الأغراض و يتم وضعها في مكان مخصص لها حتي لا يتم تبديل الأغراض مع عميل آخر و يتم استخدام مستودعات جيدة التهوية و خالية من جميع أنواع الحشرات و نعمل علي النظافة اليومية لها. </br> قبل التخزين يتم تغليف كافة الأغراض بجميع أنواع التغليف المختلفة من ورق مقوي و بلاستيك و مفرقعات حسب رغبة العميل. </br> يتم إعطاء العميل مستند رسمي يحوي كافة الأغراض المخزنة و نوفر الضمانات الكافية لحق العميل.</p>
                </div>
                
		
		<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">شحن العفش</h4>
                    <p class="text-muted">نمتلك في شركة البركة مجموعة من الشاحنات المعدة للتنقل داخل جميع أرجاء المملكة كما تقدم الشركة خدمات نقل العفش إلي جميع الدول العربية. <br/>شحن عفش قطر.<br/>شحن عفش البحرين.<br/>شحن عفش الإمارات.<br/>شحن عفش الأردن.<br/>شحن عفش عمان.</p>
                </div>
		
            </div>
        </div>
    </section>

 
 
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">اتصل بنا</h2>
                    <h3 class="section-subheading text-muted">نسعد بأرائكم و تواصلكم الدائم معنا </h3>
		    <h3 style="color:#fed136">0562842427 - 0500831071</h3>
		    <h3 style="color:#fed136">الرياض/مخرج 18</h3>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Royal technology  -  رويال للنكنولوجيا</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/Royal-Technology-%D8%B1%D9%88%D9%8A%D8%A7%D9%84-%D9%84%D9%84%D9%86%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7-347154378827400/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
		    <span class="copyright"> Powered by Royal<br/>002 0100 17 13 100<br/>002 0111 433 7089</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
<?php $count=0; foreach ($images as $image){  ?>
    <div class="portfolio-modal modal fade" id="portfolioModal1<?php echo $count++; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <p class="item-intro text-muted"></p>
                            <img class="img-responsive img-centered" src="<?php $src = base_url().'uploads/'.$image['image_name'] ; echo $src; ?>" alt=""/>
                            
                                
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>عودة إلي أصل البركة</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php } ?>

    

   
    <!-- jQuery -->
    <script src="resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resources/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="resources/js/classie.js"></script>
    <script src="resources/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="resources/js/jqBootstrapValidation.js"></script>
    <script src="resources/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="resources/js/agency.js"></script>

</body>

</html>
