<style>
.logo a img{
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-left: 25px;
}
.header_title{
  align-items: center;
  justify-content: space-between;
  display: flex;
}
.title a{
  font-size: 2.5rem;
  padding-left: 10px;
}


</style>
<header>
  <div class="default-header">
    <div class="container">
      <div class="row header_title">
        <div class="col-sm-8 col-md-7">
          <div class="logo"> <a href="index.php"><img src="assets/images/logo.jpg" alt="image"/></a> </div>
          <div class="title header_widgets"> 
            <div><a href="index.php">চাপড়া আলিম কাশিরাম মাদ্রাসা</a> </div> 
            <div><a href="index.php">EIIN : 12529</a> </div>
        </div>
          
        </div>
        <div class="col-sm-4 col-md-5">
          <div class="header_info">
            <?php   if(strlen($_SESSION['login'])==0)
            {	
          ?>
          <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> 
          </div>
          <?php }
          else{ 

          echo "Welcome To our portal";
          } ?>
          </div>
        </div>


      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container stky" id="ab">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
              <?php 
              $email=$_SESSION['login'];
              $sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
              $query= $dbh -> prepare($sql);
              $query-> bindParam(':email', $email, PDO::PARAM_STR);
              $query-> execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
              if($query->rowCount() > 0)
              {
              foreach($results as $result)
                {

	        echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
            <?php if($_SESSION['login']){?>
              <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
              <li><a href="post-testimonial.php">Post a Testimonial</a></li>
              <li><a href="my-testimonials.php">My Testimonial</a></li>
              <li><a href="logout.php">Sign Out</a></li>
              <?php } else { ?>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Login/signup</a></li>
            <?php } ?>
          </ul>
        </div>
        <!-- <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div> -->
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li><a href="car-listing.php">Teacher info</a>
          <li><a href="page.php?type=faqs">Gallary</a></li>
          <li><a href="contact-us.php">Rutine</a></li>
          <li><a href="contact-us.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 