<?php 
session_start();
include('includes/config.php');
include('includes/config2.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>চাপড়া আলিম কাশিরাম মাদ্রাসা</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<!-- <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png"> -->
<link rel="shortcut icon" href="assets/images/logo.jpg">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 

<style>
  .history img{
    width: 40%;
    height: auto;
    margin-right: 10px;
    float: left;
}
.history-pic{
    width: 40%;
    height: auto;
    margin-right: 10px;
    float: left;
}
</style>




</head>
<body class="gray-bg">

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- <div><p style="margin-top: -50px;" ></p></div> -->
<!-- /Header --> 

<!-- image slider -->

<div class="container bg-primary">
  <div  style="margin-top: -21px;"  class="col-md-12 col-sm-12 col-12 col-xl-12">
  <?php include('slider.php');?>
  </div>
  <!-- breaking board starts here -->
<?php 
$sql = "SELECT * from  tblbloodgroup where status=1";
$query = $dbh2 -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
?>
        <div class="breaking-news" class="col-md-12 col-sm-12 col-12 col-xl-12">
        <marquee behavior="scroll" direction="left" scrollamount="4"
            onmouseover="this.stop();"
            onmouseout="this.start();" style="background-color: rgb(107, 207, 207);">
            <?php if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {?>
            <a target="_blank" style=" font-size:18px; text-decoration: none; color: black; font-family: SolaimanLipi, Arial, sans-serif;" href="<?php echo htmlentities($result->Link);?>"> <?php echo htmlentities($result->BloodGroup);?> *** </a>
            <?php $cnt=$cnt+1; }} ?>           
        </marquee>
        </div>
        <!-- breaking board ends here -->
</div>

<!-- Main content section  start here -->
<section >
<div class="container div_zindex bg-primary">
  <div class="row flex-row" style="padding: 16px; display:flex; ">
    <div class="col-xl-8 col-md-12">
                <div>
                    <div style="background-color:rgb(107, 207, 207);">
                        <h4  style="  padding-top: 3px; padding-bottom: 3px; margin-left: 5px; font-family: SolaimanLipi, Arial, sans-serif; ">প্রতিষ্ঠানের ইতিহাসঃ</h4>
                    </div>
                    <div class="history" style="float: left;">
                        <img class="img-fluid rounded" src="pic/1.jpg" alt="" width="300px" style="border-radius: 5px;" >
                        <p class="" style="padding-left:0%; font: size 20px; font-family: SolaimanLipi, Arial, sans-serif; text-align:justify; ">আসসালামুআলাইকুম ওয়ারাহমাতুলাহ, ঐতিহ্যবাহী ওয়াজউদ্দিন ফাউন্ডেশন ট্রাস্ট ইসলামিয়া দাখিল মাদ্রাসাটি কুমিল্লা-জেলার দাউদকান্দি উপজেলার গৌরীপুর বাজার থেকে প্রায় ১.৫০ (দেড়) কিলোমিটার পূর্বদিকে গলিয়ারচর গ্রামে মাদরাসাটি ১ একর ৫ শতক জায়গা নিয়ে অবস্থিত। এ মাদরাসাটি উপজেলার একটি স্বনামধন্য দ্বীনি শিক্ষা প্রতিাষ্ঠান। প্রখ্যাত ভাষাসৈনিক, ভাষা আন্দোলনে বিশেষ অবদানের জন্য ২০১৬ইং সানে একুশে পদকপ্রাপ্ত, আন্তর্জাতিক খ্যাতিসম্পনন্ন পরমানু বিজ্ঞানী, স্বনামধন্য কবি
                        <a style="text-decoration: none;" href="#">see more</a> </p>
                    </div>
               </div>
               <div>
               <div class="col-md-6 col-sm-12" >
                    <div style="background-color:rgb(107, 207, 207);" style="border-radius: 10px;">
                        <h4  style="  padding-top: 3px; padding-bottom: 3px; margin-left: 3px; font-family: SolaimanLipi, Arial, sans-serif; ">সভাপতির বাণী</h4>
                    </div>
                    
                    <div class="history">
                        <img class="img-fluid rounded" src="pic/man.jpg" alt="" width="300px" >
                        <p class="history" style="padding-left:0%; font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;">পড়! তোমার রবের নামে যিনি সৃষ্টি করেছেন (সূরা-আল্লাক্ব ঃ১)। ডিজিটাল বাংলাদেশ গড়ার লক্ষ্যে মাদরাসা শিক্ষা শিক্ষাব্যবস্থাকে বেগবান ও আধুনিকায়ন করতে মাল্টিমিডিয়া ক্লাসসহ বিভিন্ন স্তরে তথ্য-প্রযুক্তি যে অবদান রাখছে তার জন্য বর্তমান গণপ্রজাতন্ত্রী বাংলাদেশ সরকার তথা মাননীয় প্রধানমন্ত্রী ও শিক্ষামন্ত্রীসহ সংশ্লিষ্ট সকলকে  জানাই আন্তরিক মোবারকবাদ। দেশের দ্বিমুখী শিক্ষা ব্যবস্থার প্রেক্ষাপটে ইসলামী ও আধুনিক 
                        <a  data-toggle="collapse" style="text-decoration: none;" href="#sovapoti">see more</a> </p>
                    </div>
                    <div id = "sovapoti" class="collapse">
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> শিক্ষার বাস্তব সমন্বয় সাধন কারে সঠিক ইসলামী আদর্শের বুনিয়াদে ১৯৬১ সালে মাদরাসাটির শুভ সূচনা করেন জিয়াউর হক (কারী)। তারপর কালের বিবর্তনে মহান আল্লাহ্র মেহেরবাণীতে আজ তা পত্র-পল্লবে সুশোভিত হয়ে বিরাট মহীরূহে পরিণত হয়েছে। যাদের প্রচেষ্টা, অনুপ্রেরণা ও সহযোগিতায় মঙ্গলকান্দি ইসলামিয়া ফাজিল মাদরাসা বর্তমান অবস্থানে পৌঁছেছে এবং এগিয়ে চলেছে, বিশেষ করে গভর্ণিং বডির সম্মানিত সদস্যবৃন্দ, শিক্ষকম-লী, ছাত্র-ছাত্রী, অভিভাবক, এলাকাবাসী ও সর্বস্তরের জনগণ, তাঁদের সকলকে কৃতজ্ঞতারসহিত আন্তরিক মুবারকবাদ জ্ঞাপন করছি । ইসলামী জীবনদর্শ, সংস্কৃতি, ঐতিহ্য, মূল্যবোধ, অর্থনীতি ও সমাজনীতি ইত্যাদি ক্ষেত্রে মসলিম সন্তানদেরকে আদর্শ নাগরিক রূপে গড়ে তোলা, বিশেষ করে নৈতিক অবক্ষয় থেকে তরুন সমাজকে রক্ষা ও নারীকে পরিপূর্ণ দ্বীনি শিক্ষায় শিক্ষিত করে চারিত্রি উৎকর্ষ ও মূল্যবোধ তৈরীর বাস্তব উদ্যোগই হোক এ প্রতিষ্ঠানের দায়বদ্ধতা -এ দোয়াই করছি আমিন।
                            </p>
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> <strong> সভাপতির বাণী </strong> <br><span>চাপড়া কাশিরাম আলিম মাদ্রাসা</span> <br><span>হাজারীহাট, সৈয়দপুর, নীলফামারী</span>
                            </p>
                        
                    </div>
                </div>

                <div class="col-md-6 col-sm-12" >
                    <div style="background-color:rgb(107, 207, 207);">
                        <h4  style="  padding-top: 3px; padding-bottom: 3px; margin-left: 3px; font-family: SolaimanLipi, Arial, sans-serif; ">অধ্যক্ষের বাণী</h4>
                    </div>
                    
                    <div class="history">
                    <img class="img-fluid rounded" src="pic/man.jpg" alt="" width="300px" >
                    <p class="history" style="padding-left:0%; font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;">বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা। সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা। বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা।
                    <a data-toggle="collapse" style="text-decoration: none;" href="#principal">see more</a> </p>
                    
                   
                    </div>
                    <div id = "principal" class="collapse">
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা।  সঠিক ধর্মীয়, নৈতিক শিক্ষা ও যুগোপযোগী আধুনিক শিক্ষার সমন্বয়ে বর্তমানে প্রতিষ্ঠানটি গুনগত ও মানসম্মত শিক্ষাদানে সক্ষম। বর্তমান সরকারের শিক্ষা বিষয়ক নির্দেশনা ও সার্বিক তত্ত্বাবধানে শিক্ষকবৃন্দের ঐকান্তিক প্রচেষ্টায়, শিক্ষার্থীদের নিরলস অধ্যয়ন ও অধ্যবসায় এবং অভিভাবক ও সংশ্লিষ্ট সকলের সম্মিলিত পরামর্শে প্রতিষ্ঠানটি ক্রমান্বয়ে কামিল (মাস্টার্স) পর্যন্ত উন্নীত হবে ইনশাআল্লাহ্। আল্লাহ তা’য়ালা এই প্রতিষ্ঠানটিকে সঠিক ইসলাম ও আধুনিক বিজ্ঞান সম্মত শিক্ষার মারকায হিসাবে কবুল করে নিন। আমিন!!!
                        </p>
                        <p class="history" style="font-family: SolaimanLipi, Arial, sans-serif; text-align:justify;"> <strong> অধ্যক্ষের বাণী </strong> <br><span>চাপড়া কাশিরাম আলিম মাদ্রাসা</span> <br><span>হাজারীহাট, সৈয়দপুর, নীলফামারী</span>
                        </p>
                    
                    </div>
                </div>

               </div>
               
               
    
    </div>
    <?php //include ('includes/right_sidebar.php');?>
    <div class="col-xl-4 col-md-4 col-12">
      <p>this is test</p>
</div>
  </div>
</div>



</section>

<style>
.collator_asort{
  display: flex;
  flex-wrap: wrap;
  
}

</style>

<!-- Main content section  end  here -->





<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
  <div class="section-header white-text text-center">
      <h2>Our Success <span>Story</span></h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fas fa-user" aria-hidden="true"></i></h2>
            <h2>294+</h2>
            <p>Total Students</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fas fa-user-graduate" aria-hidden="none"></i></h2>
            <h2>12540+</h2>
            <p>Successfull Students</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fas fa-user-graduate" aria-hidden="true"></i></h2>
            <h2>2200+</h2>
            <p>Total A+</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fas fa-user" aria-hidden="true"></i></h2>
            <h2>15+</h2>
            <p>Teacher</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Golden <span>Students</span> 2022</h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="pic/ali.jpg" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>