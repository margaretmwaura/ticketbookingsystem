@extends('layouts.app')
@section('content')
  <!--End of the navigation bar code -->
<div class="backfixed fixed1" style="background-image:url('{{ asset('bannernew.PNG') }}')">

    <div class="container" id="top2">
        
    <div class="row">
    
    <div class="col-sm-2">
    
    </div>
    
    <div class="col-sm-8" >
    <p style="font-size:40px;color:white;font-weight:bolder;padding-top:150px;">Welcome to Raha Place</p>
    <p style="font-size:23px;color:white;font-family:Arial Verdana;">Get all information you need to book tickets to the next event</p>
    <p style="font-size:23px;color:white;font-family:Arial Verdana;">Be happy , live longer</p>
    <input type="button" value="BOOK TICKET" id="orderingbutton" onclick="window.location.href='/tbapp/public/createdevents'">
    </div>
    <div class="col-sm-2">
    
    </div>
      </div>
    
    
    </div>
    
    </div>
    
    <div class="backscroll">
    
    <div class="container" id="gallerytable">
    
    <div class="row">
      
      <div class="col-sm-1">
    
    </div>
     <div class="col-sm-4" id="description">
    <p style="font-size:40px;color:black;font-weight:bolder;padding-top:150px;"><u>Why Raha place</u></p>
    <p style="font-size:18px;color:black;font-family:Arial Verdana;">The company has been in existence for a long time and it takes care of the needs
    of its people. Its a well kept company clean and of class. The company has now expanded to have several of its braches around the country.</p>
    </div>
    
    
    <div class="col-sm-1">
    
    </div>
    <div class="col-sm-6">
      
    <table border="0">
       <tr>
         <td colspan="2" style="padding-left:130px;">
               <img src="gallery3.PNG">
         </td>
       </tr>
        <tr>
         <td>
           <img src="gallery4.PNG">
         </td>
         <td>
           <img src="gallery5.PNG">
         </td>
       </tr>
    </table>
    
    </div>
    
    {{-- <div class="col-sm-1" style="background-image:url('{{ asset('slide1.PNG') }}')">
      </div> --}}
    </div>
    
    </div>
    
    
    <div class="container" id="gallerytable1">
    
      <div class="row">
      
       <div class="col-sm-5">
        <img src="music.PNG" style="height:400px;width:400px;margin-left:120px;">
      </div>
       <div class="col-sm-2">
        
      </div>
       <div class="col-sm-5">
        <p style="font-size:40px;color:black;font-weight:bolder;padding-top:50px;text-align:center;"><u>The type of events we have</u></p>
    <p style="font-size:18px;color:black;font-family:Arial Verdana;text-align:center;">All the events that we put up on the site are those 
      that have a good taste of music and plenty of food . People have to be properly energized during these events so that they can be their best.</p>
      </div>
       {{-- <div class="col-sm-">
        
      </div> --}}
        
      </div>
    </div>
    
    <div id="word">
      <p style="font-size:30px;color:black;font-weight:bolder;padding-top:30px;text-align:center;"> We always put you first... a healthly relationship with our customers is a priority. We advertise the best events that will keep our customers coming for more...</p>
    </div>
    
    
    </div>
    
    <div class="backfixed fixed2"  style="background-image:url('{{ asset('secondbacksecond.PNG') }}')">
    
    <div class="container" id="word1" >
      <p style="font-size:30px;color:white;font-weight:bolder;padding-top:80px;text-align:center;"> We always put you first....Raha Place
      </p>
      <p style="font-size:18px;color:white;font-family:Arial Verdana;text-align:center;">Always at your service
      <br>any time all day
      <br>At your service... you are an important people</p>
      
    </div>
    </div>
    
    
    
    
    <div id="title" class="container">
      <p style="font-size:30px;color:crimson;font-weight:bolder;padding-top:20px;text-align:center;"><u>Our Pillars
      </u></p>
      <p style="font-size:18px;color:black;text-align:center;font-family:Arial-Verdana;">
      These are the priciples that have been key to our success
      </p>
    </div>
    
    
    <div id="pillarimages" class="container">
    <div class="row">
    <!--The first image -->
    <div class="col-sm-4" style="text-align:center;">
    
    <div class="imagea" style="margin-left:100px;">
      <img src="delivering fast.png" class="imageb">
      <div class="overlay">
        <div class="textd" id="overflowlinks">
         <p style="color:white;font-weight:bold;margin-top:30px;">Join us</p>
        </div>
      </div>
    </div>
    
    
    
    
    <p style="color:black;font-size:18px;font-family:Arial-Verdana;padding-top:50px;"><i>Quick Response...</i><br>
    <span style="font-size:16px;"> Our customers have what they want within minutes</span>
    </p>
    </div>
    <!--The second image -->
    <div class="col-sm-4" style="text-align:center;">
    
       <div class="imagea" style="margin-left:100px;">
      <img src="eating.png" class="imageb">
      <div class="overlay">
        <div class="textd" id="overflowlinks">
         <p style="color:white;font-weight:bold;margin-top:25px;">Promote us</p>
        </div>
      </div>
    </div>
    
    
    <p style="color:black;font-size:18px;font-family:Arial-Verdana;padding-top:50px;"><i>Good deals...</i><br>
    <span style="font-size:16px;">The deals we make are to benefit both parties</span>
    </p>
    </div>
    
    
    <!--The third image -->
    <div class="col-sm-4" style="text-align:center;">
    
    <div class="imagea" style="margin-left:100px;">
      <img src="very.png" class="imageb">
      <div class="overlay">
        <div class="textd" id="overflowlinks">
        <p style="color:white;font-weight:bold;margin-top:20px;">Get results</p>
        </div>
      </div>
    </div>
    
    <p style="color:black;font-size:18px;font-family:Arial-Verdana;padding-top:50px;"><i>Tasty Food...</i><br>
    <span style="font-size:16px;">Give it a try for a wonderful experience</span>
    </p>
    </div>
    
    </div>
    </div>
    
    
    <div id="linksmap" class="container">
    <div class="row">
      
      <div class="col-sm-4" id="footerlinks">
      <p id="description1" style="font-size:18px;color:White;margin-left:20px;font-family:Arial-Verdana;margin-top:10px;font-weight:bold;">Links</p>
      <ul>
        <li><a href=" ">Home</a></li>
        <li><a href=" ">About us</a></li>
        <li><a href=" ">Contact us</a></li>
       
        </ul>
      </div>
      <div class="col-sm-4" id="Fcontacts">
      <p id="description2" style="font-size:18px;color:White;font-family:Arial-Verdana;font-weight:Bold;margin-left:50px;margin-top:10px;">Contacts</p>
        <p style="font-size:16px;color:White;font-family:Arial-Verdana;font-weight:Bold;margin-left:50px;padding-top:20px;">The main office contacts</p>
         <p style="font-size:16px;color:White;font-family:Arial-Verdana;margin-left:50px;"><i class="fa fa-envelope" aria-hidden="true"></i>
       mwauramargaret1@gmail.com</p>
        <p style="font-size:16px;color:White;font-family:Arial-Verdana;margin-left:0px;margin-left:50px;">
        <i class="fa fa-phone" aria-hidden="true"></i>
         0711309532</p>
        
        
         <p style="font-size:16px;color:White;font-family:Arial-Verdana;font-weight:Bold;margin-left:50px;">The customer service contacts</p>
          <p style="font-size:16px;color:White;font-family:Arial-Verdana;margin-left:50px;"><i class="fa fa-envelope" aria-hidden="true"></i>
       shiimaggie@gmail.com</p>
        <p style="font-size:16px;color:White;font-family:Arial-Verdana;margin-left:0px;margin-left:50px;">
        <i class="fa fa-phone" aria-hidden="true"></i>
         0711309532</p>
      </div>
    
      <div class="col-sm-4" id="mmap">
      <p id="description3" style="font-size:18px;color:White;margin-left:50px;font-family:Arial-Verdana;margin-top:10px;">Our Location</p>
        <div id="map">
          
        </div>
      </div>
      </div>
    </div>
    
    
    
    <!--The code for displaying the map -->
    <script type="text/javascript">
          function initMap() {
            var uluru = {lat: -1.275122, lng: 36.713919};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 4,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTX7W5yd6MrIMBQZKqPq632AZr6yJEcTw&callback=initMap"></script>
    
    
    <div id="icons" class="container">
    
    <div class="row">
    
    <div class="col-sm-4">
    <p style="font-size:18px;color:White;text-align:center;font-family:Arial-Verdana;"><u>Copyright©2018 Meat Source</u></p>
    </div>
    
    <div class="col-sm-8">
    <ul>
    <li><a  href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a  href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a  href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
    <li><a  href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <li><a  href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    
    </ul>
    
    </div>
    
    </div>
    </div>
    
    
    </body>
    </html>
@endsection
