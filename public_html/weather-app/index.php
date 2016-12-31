<?php

    $weather = "";
    $error = "";

    if (array_key_exists('city', $_GET)) {
        
        $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city']).",uk&appid=5a88eb5a9183f04a24cba44e78e77d02");
        
        $weatherArray = json_decode($urlContents, true);
        
        if ($weatherArray['cod'] == 200) {
        
        $weather = "The weather in ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";
        
        $tempInCelsius = round($weatherArray['main']['temp'] * (9/5) - 459.67);
        
        $windInMPH = round($weatherArray['wind']['speed'] * 2.24);
        
        $weather.= " The temperature is ".$tempInCelsius."&deg;F and the wind speed is ".$windInMPH." mph.";
            
        } else {
            
            $error = "Could not find city - Please try again.";
            
        }
        
    }

?>


<html lang="en">
  <head>
      
      <title>Weather Scraper</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <style type="text/css">
          
          
        body { 
              background: url("https://s15.postimg.org/4nvn2drp7/26777257550_8a80aad5de_k_2.jpg") no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
          
   
          
          
          .container {
              
              text-align: center;
              margin-top: 200px;
              
          }
          
          #city {
              
              width: 450px;
              margin: 0 auto;
              
          }
          
          h1 {
              
              padding-bottom: 10px;
              
          }
          
          h6 {
              
              padding-bottom: 10px;
              
          }
          
          form {
              
              margin: 0 auto;
              
          }
          
          #theWeather {
              
              margin-top: 30px;
              
          }
          
          
          
      </style>
    <!-- Bootstrap CSS -->
      
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    </head>
    <body>
        
        
        <div class="container">
        
            <h1>What's the Weather?</h1>
            <h6>Enter the name of the city.</h6>
            
            
<!--            Form to input the city-->
            <form>
                <div class="form-group">
                <input type="text" class="form-control" id="city" name="city" placeholder="Eg. Providence, Boston" value="<?php
                                                                                                                          
                       if (array_key_exists('city', $_GET)) {                                                          
                           echo $_GET['city']; 

                       }
                                                                                                                      
                                     ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            
<!--            The Div that will contain the weather or the error-->
            <div id="theWeather"><?php
               
                if($weather) {
                    
                echo '<div class="alert alert-success" role="alert">'.$weather.'</div>';
                    
                } else if($error) {
                    
                    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                    
                }
                
                ?></div>
        </div>
       
        
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
        
            
    <script type="text/javascript">
    
    
        
    
    </script>
   
        
        
  </body>

    
    
</html>
