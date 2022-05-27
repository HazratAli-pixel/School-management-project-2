<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-4 col-sm-6">
          <h6>Help Links</h6>
          <ul>
            <li><a href="https://bangladesh.gov.bd/index.php">National Web Portal of Bangladesh</a></li>
            <li><a href="http://www.nu.ac.bd/">National University</a></li>
            <li><a href="#">Education Board Result</a></li>
            <li><a href="http://dinajpureducationboard.gov.bd/">Board of Intermediate & Secondary Education, Dinajpur</a></li>
            <li><a href="admin/">Admin Login</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6">
          <h6>Important links</h6>
          <ul>
            <li><a href="https://moedu.gov.bd/">Ministry of Education</a></li>
            <li><a href="http://www.cpscs.edu.bd/?page_id=102#">NCCIB</a></li>
            <li><a href="http://bup.edu.bd/">Bangladesh University of Professionals</a></li>
            <li><a href="page.php?type=terms">Terms of use</a></li>
          </ul>
        </div>
  
        <div class="col-md-4 col-sm-12">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="https://www.facebook.com/watch/%E0%A6%9A%E0%A6%BE%E0%A6%AA%E0%A7%9C%E0%A6%BE-%E0%A6%95%E0%A6%BE%E0%A6%B6%E0%A6%BF%E0%A6%B0%E0%A6%BE%E0%A6%AE-%E0%A6%86%E0%A6%B2%E0%A6%BF%E0%A6%AE-%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%B8%E0%A6%BE-108171614399165/"><i class="fas fab-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; <?php echo $today = date("Y", strtotime("today")); ?> CKAMS. Dev by <a target="_blank" href="https://hazratinfo.com">Hazrat Ali</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>