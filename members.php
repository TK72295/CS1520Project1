<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Our Members</title>

    <!-- Bootstrap CSS Code -->
    <link href="css/mycss.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation bar -->
    <?php
        include 'navigation.php';
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                
                <h1 class="page-header">Our Members</h1>
                
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Our Members</li>
                </ol>

            </div>
        </div>
        <!-- /.row -->

        <!-- Officers -->
        <div class="row">
            <div class="col-md-1">
                <img class="img-responsive" src="Resources/me.jpg">
            </div>
            
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h2>President - Tyler Kim</h2>
                        
                    </div>

                    <div class="panel-body">    

                        <p>Tyler has been practicing judo since age 5 and has acheived the rank of nidan.  Tyler has national competition experience and has won a number of Jr. National Titles.
                            In addition, he has experience teaching people of all ages and his ultimate goal is to make a strong team at the University of Pittsburgh.
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <img class="img-responsive" src="Resources/Steve.jpg">
            </div>
            
            <div class="col-md-6">
                <div class="panel panel-default">        
                    <div class="panel-heading">

                        <h2>Vice President - Steven Roomberg</h2>
                    
                    </div>

                    <div class="panel-body">                
                        
                        <p>Steven began judo in high school along with wrestling and Brazilian Jiu-jitsu.  Steve has competed in many national and state level tournaments and received 3rd place at the
                            2016 Maccabi Games.  Steve is currently an ikkyu and will soon be testing for his shodan.
                        </p>   
                    
                    </div>
                </div>         
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <img class="img-responsive" src="Resources/Alex.jpg" alt="">
            </div>
            
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h2>Business Manager - Alex Koesarie</h2>
                    
                    </div>

                    <div class="panel-body">     

                        <p>Alex started judo here at Pitt.  He started in the Judo 1 course in his freshman year and has been very involved over the past 2 years.  He has made fast improvements and is 
                            currently a green belt. 
                        </p>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!--List of Current Members through a database-->
        <?php
            include 'database.php';
        ?>

</body>
</html>