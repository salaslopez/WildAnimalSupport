<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>WildAnimalSupport</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        #map{
          height: 500px;
          width: 100%;
          margin: 0;
          padding: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top bg-white border rounded shadow">
        <div class="container"><img id="logo" src="assets/img/logo.jpg" width="40"><a class="navbar-brand" href="index.php"><strong>Wild Animal Support</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active shadow-sm active" href="#aboutus">About us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#organizations">Organizations</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#contactus">Contact us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="donations.php" style="color: rgba(0,56,96,0.5);"><strong>Donations</strong></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div id="mainpage">
        <div class="jumbotron">
            <h1>Support our fight!</h1>
            <p><br>If you are interested in supporting any of the organizations, do not hesitate to make a donation! As a reward you can receive incredible products.&nbsp;<br></p>
            <p><a class="btn btn-primary text-center text-white border rounded" role="button" href="donations.php">DONATIONS</a></p>
        </div>
    </div>
    <div></div>
    <div class="container section" id="welcome">
        <h1>Be part of the Wild Animal Support</h1>
        <p id="p">If you are an animal lover and you want to support the cause of an organization that defends its preservation, do not hesitate to support them!<br>Check out the different organizations and how you can contribute to them!<br>Remember that you will
            receive different products! <br><br></p><img data-aos="fade-right" data-aos-duration="500" src="assets/img/decoration.jpg"></div>
    <div>
        <h1 class="text-center"></h1>
    </div>
    <div class="colorsection">
        <div class="container section" id="aboutus">
            <h1>About us</h1>
        </div>
    </div>
    <div class="blockcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <h3 class="text-center">Our mission&nbsp; &nbsp; &nbsp;&nbsp;<i class="fa fa-flag" id="icon1"></i></h3>
                    <p class="text-justify" id="history-p"><br>The main idea of this website is the same that all the organizations: Fighting to preserv the life of animals have. We take those common goals that all these organizations have and bring them together in one place so that you can
                        be part of the cause that we all have in common. We hope that in the future more organizations will join this project to continue growing and supporting the preservation of wild animals. <br></p>
                </div>
                <div class="col-md-6 col-lg-5">
                    <h3 class="text-center">Working together&nbsp; &nbsp; &nbsp;&nbsp;<i class="fas fa-people-carry" id="icon2"></i></h3>
                    <p class="text-justify" id="evolution-p"><br>There are many different organizations around the world,&nbsp;they all seek&nbsp;to preserve the life of different animal species and here they have a space in common for you to know them and support their cause by donations, (you
                        will also be acquiring fabulous products), here all organizations can be easily found and we can help them in their constant work of preservation of species.<br></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div></div>
    <div class="container section" id="organizations">
        <h1>Organizations</h1>
        <p id="porganizations"><br>Check out the different organizations that you can support! Don't miss the opportunity to know better about them, we are sure that you will find a lot of useful information.<br></p>
    </div>
    <div id="map"></div>
    <script>
      function initMap(){
        //Map options
        var options = {
          zoom:3,                                                         //Zoom of the map by default
          center:{lat:28.083189,lng:-42.024884}                              //Center of the map (Example Dublin) 
        }
        //New Map
        var map = new google.maps.Map(document.getElementById('map'),options);

        //Array of markers
        var markers = [
        {
          //Cordinate of the Organization
          coords:{lat:38.012122,lng:-122.702251},
          //Information of the Organization
          content:'<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading">Ocean Conservation Research - OCR</h1>' +
          '<div id="bodyContent">' +
          "<p>Is a scientific research and policy development organization focused on understanding the scope of, and exploring solutions to the growing problem of human generated noise pollution and its impact on marine animals.  </p>" +
          "<p><b>Phone: </b>+1 415-488-0553 </p>" +
          "<p><b>Email: </b>info@ocr.org </p>" +
          "<p><b>Supported Species: </b>Various marine animals </p>" +
          '<p>Website: <a href="http://www.ocr.org/"target="_blank">' +
          "http://www.ocr.org/</a> " +
          "</div>" +
          "</div>"
        }
        ];

        //Loop through markers
        for(var i = 0; i < markers.length; i++ ){
          //Add markers
          addMarker(markers[i]);
        }

        //AddMarker function
        function addMarker(props){
          var marker = new google.maps.Marker({
          position:props.coords,
          map:map
          });

          //Check content
          if(props.content){
            //Information Window
            var infoWindow= new google.maps.InfoWindow({
              content:props.content
            });
            //Shows information window when you click the marker 
            marker.addListener('click', function(){
              infoWindow.open(map, marker);
            });
          }
        }
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_Y9PUbh6InW-NiWWv4wJGq4aAYHCvOOM&callback=initMap&libraries=&v=weekly">
    </script>
    <div></div>
    <div></div>
    <div></div>
    <div class="container section" id="contactus">
        <h1>Contact us&nbsp; &nbsp;<i class="icon ion-email" id="icon3"></i></h1>
        <p class="text-left" id="pcoments">Send us your comments!</p>
    </div>
    <div></div>
    <div data-aos="slide-up" class="contact-clean">
        <form data-bss-recipient="eb405539ce24eb52d317f3c2c3409b17" data-bss-subject="New comment">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required=""></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required=""></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" required="" minlength="10"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <footer style="height: 240px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">Wild Animal Support</a></h3>
                    <p class="links"><a href="#aboutus">About us</a><strong> · </strong><a href="#organizations">Organizations</a><strong> · </strong><a href="#contactus">Contact</a><strong>&nbsp;</strong></p>
                    <p class="company-name">Wild Animal Support © 2021</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">22, O'Sullivan Avenue</span>Dublin, Ireland</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +353 83 869 0657</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a id="comments" href="#" target="_blank">wildanimalsupport@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 footer-about">
                    <h4>Wild Animal Support on social media</h4>
                    <p> Follow us on all our social networks&nbsp;where we publish our latest news and updates.&nbsp;<br><br></p>
                    <div class="social-links social-icons"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>
</html>