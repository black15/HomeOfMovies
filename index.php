<?php 
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['csrf_token'] )) {
    $newUser=strtoupper($_SESSION['username']);
    include('config.php');
}
else{
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME MOVIES</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" href="img/logo.gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>
    <script src="js/script.js"></script>
    <div class="topnav" id="myTopnav">
        <a href="<?php echo $_SERVER['PHP_SELF'];?>" class="active"><img style="width:15px;" src="img/home.png"></a>
        <a href="films.php">أفلام</a>
        <a href="series.php">مسلسلات</a>
        <a href="animes.php">أنميات</a>
        <a href="contact.php">تواصل معي</a>
        <span class="userSpan"><?php echo $newUser;?></span>
        <a href="logout.php" class="logout">LOGOUT</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <form class="search_form" method="get" action="search.php">
            <input type="text" name="search_film" placeholder="Film Name" style="border-radius: 6px;border:solid 2px;">
            <input type="hidden" name="sub_search" value="Search">
        </form>
    </div>
<body>
        <?php
            $colors = array('black','grey');
            $list = array_rand($colors);
            $formt = 'style="background-color: %s"';
            $final = sprintf($formt,$colors[$list]);
            
        ?>
<h1 style="text-align:center;">TOPICS</h1>
<div class="yo">
    <h1 style="text-align: center;">أفلام </h1>
    <div class="row">     
    <div class="column">
        <a id ="link" href="watch.php?film=98">
                <img src="img/12.jpg">
                <strong> 12 Angry Men</strong>
        </a>

        <p <?php echo $final; ?> >
         تدور أحداث الفيلم في غرفة المحلفين التي يجتمع فيها 12 محلفا مختلفين تماما حول إدانة، أو تبرئة شاب متهم بجريمة قتل، تدور معظم أحداث الفيلم في قاعة واحدة باستثناء ثلاث دقائق فقط، ويسلط الضوء على موضوع بناء توافق الآراء، والصعوبات التي تواجه العملية ضمن مجموعة من الرجال الذين تضيف شخصياتهم حدة وإثارة للقضية .</p>
        </div>
        <a id ="link" href="download.php?film=98"> تحميل </a>
        <a id ="link" href="watch.php?film=98"> مشاهدة </a>
    <div class="column">
            <a id ="link" href="watch.php?film=10">
                <img src="img/freaky.jpg" alt="Forest">
                <strong>FREAKY</strong>
            </a>
        <p <?php echo $final; ?> >بعد تبادل أجساد بين فتاة في المدرسة الثانوية وقاتل متسلسل مختل، تكتشف الفتاة أنه يجب عليها العودة لجسدها خلال 24 ساعة قبل أن تصبح محبوسة في جسد القاتل للأبد.</p>
    </div>
        <a id ="link" href="download.php?film=10"> تحميل </a>
        <a id ="link" href="watch.php?film=10" > مشاهدة </a>
    <div class="column">
            <a id ="link" href="watch.php?film=52">
                <img src="img/tenet.jpg" alt="Forest">
                <strong>TENET</strong>
            </a>
        <p <?php echo $final; ?> > متسلحًا بكلمة واحدة فقط (عقيدة) ومن أجل بقاء الجنس البشري، يسافر عميل سري في ملحمة جاسوسية عبر الزمن يتم تكليفه فيها بمنع إندلاع الحرب العالمية الثالثة، ليكشف عن حقائق معقدة وغامضة تتجاوز الواقع.</p>
    </div>
        <a id ="link" href="download.php?film=52"> تحميل </a>
        <a id ="link" href="watch.php?film=52" > مشاهدة </a>
    </div>
    <div class="row" style="margin: 0 auto;max-width: 600px;float: left;margin: 5px;">
    <div class="column">
        <a id ="link" href="watch.php?film=1"> 
                <img src="img/external.jpg" alt="Forest">
                <strong> External Sunshine</strong>
        </a>
        <p <?php echo $final; ?> >
         يصاب جويل باريش (جيم كاري) بصدمة كبيرة تفطر فؤاده، يكتشف أن حبيبته السابقة كليمنتي (كيت وينسلت) التي تركته وحيدًأ قد أقدمت على عملية غريبة لتمسح كل ذكرياتها عنه.يصاب جويل باليأس والإحباط، ويقرر أن يفعل المثل ويقوم بحذف كل ذكرياته معها من رأسه.يشاهد جويل ذكرياته وهي تتلاشي في أثناء العملية، ليكتشف حينها أنه مازال يحبها ويذوب في غرامها.ويدرك متأخرًا أن الأوان قد فات للتراجع عن ذلك القرار المتسرع.</p>
        </div>
        <a id ="link" href="download.php?film=1"> تحميل </a>
        <a id ="link" href="watch.php?film=1"> مشاهدة </a>
    <div class="column">
            <a id ="link" href="watch.php?film=2">
                <img src="img/extraction.jpg" alt="Forest">
                <strong>EXTRACTION</strong>
            </a>
        <p <?php echo $final; ?> >عندما يُرسَل قاتل مرتزق شديد المراس إلى “بنغلادش” لينقذ ابن زعيم عصابة مخدّرات مُختطفًا، تتحوّل المهمّة إلى سباق للبحث عن الذات لأجل النجاة. </p>
    </div>
        <a id ="link" href="download.php?film=2"> تحميل </a>
        <a id ="link" href="watch.php?film=2" > مشاهدة </a>
    <div class="column">
            <a id ="link" href="watch.php?film=3">
                <img src="img/fatman.jpeg" alt="Forest">
                <strong>TENET</strong>
            </a>
        <p <?php echo $final; ?> > في قصة من قصص سانتا كلوز، يكافح كريس الغير تقليدي على أمل تحديد أسباب تراجع أعماله بشكل كبير. مشاهدة وتحميل فيلم Fatman 2020 مترجم بجودة BluRay مشاهدة مباشرة اون لاين</p>
    </div>
        <a id ="link" href="download.php?film=3"> تحميل </a>
        <a id ="link" href="watch.php?film=3" > مشاهدة </a>
    </div>
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <?php 
    echo "<br>";
    echo "<marquee style='direction:ltr;max-width:100%;'>COPYRIGHT OUSSAMA</marquee>"; 
    ?>
</body>
</html>

