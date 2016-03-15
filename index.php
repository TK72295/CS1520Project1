<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panther Judo Club</title>

    <!-- Bootstrap CSS Code -->
    <link href="css/mycss.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!--Code to save user comments to a file called text.txt and include my navigation bar-->
    <?php

        //If the user entered something in the Contact us box
        if(isset($_POST['text']) && !is_null($_POST['text']))
        {
            $myfile = fopen("text.txt", "a");
            fwrite($myfile, ($_POST['text'] . PHP_EOL));
            fclose($myfile);
        }

        include 'navigation.php';
    ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Image Slides -->
        <div class="carousel-inner">
            
            <div class="item active">
                <div class="fill" style="background-image:url('https://scontent-iad3-1.xx.fbcdn.net/hphotos-xla1/v/t1.0-9/12299221_10154317226033368_8241424020434809491_n.jpg?oh=26367015e46430a50c45486cc8409d44&oe=57526F80');"></div>
                <div class="carousel-caption">
                    <h2>Panther Judo Team</h2>
                </div>
            </div>

            <div class="item">
                <div class="fit" style="background-image:url('https://scontent-iad3-1.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/576058_10150939678438483_1412937661_n.jpg?oh=10767842770255559f573d492fe8a4b9&oe=5768D6DD');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('http://www.kimsjudotkd.com/wp-content/uploads/2014/12/Judo-Cranberry_Class.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h4><i class="fa fa-fw fa-check"></i>Perfect for Everybody</h4> 

                    </div>
                
                    <div class="panel-body">
                        
                        <p>Judo is a great activity to get involved with here at Pitt. Both a martial art and an Olympic sport, 
                            judo is practiced all over the world. Whether you want to get a great workout, learn to defend yourself, or challenge yourself with competition, judo has something for everybody.
                        </p>
                
                        <a href="about.php" class="btn btn-default">Learn More</a>
                    
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h4><i class="fa fa-fw fa-gift"></i> Schedule</h4>

                    </div>
                 
                    <div class="panel-body">

                            <p>We designed our schedule to give mat time to anybody who wants it; we have practice 7 days a week and about 30 active members. 

                                <ul>
                                    <li>Monday 7:00 - 9:00 AM</li> 
                                    <li>Tuesday 2:30 - 3:30 PM </li> 
                                    <li>Wednesday 7:00 - 9:00 AM </li> 
                                    <li>Thursday 2:30 - 3:30 PM</li> 
                                    <li>Friday: 7:00 - 9:00 AM</li> 
                                    <li>Saturday 1:00 - 3:00 PM</li> 
                                    <li>Sunday 12:00 - 2:00 PM</li> 
                                </ul>

                            </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    
                    <div class="panel-heading">

                        <h4><i class="fa fa-fw fa-compass"></i> Excellent Instruction</h4>

                    </div>
                    
                    <div class="panel-body">

                        <p>At the University of Pittsburgh, students have a unique opportunity to practice martial arts in the form of a credited course or club sport. Both are led by blackbelts with many years of competition and 
                            teaching experience who are willing to work with people of all experience levels and interests.
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    
    <div class = "row">
        <div class = "col-md-12 text-center">
            
            <h2>Contact Us</h2>
            
            <p>If you have any questions or comments, please leave them below:</p>
            
            <form action = "index.php" method = "POST" id = "myform">

                <input type = "submit">
            
            </form>

            <textarea name="text" form="myform"></textarea>

        </div>
    </div>


    <!-- BootStrap Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
