<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Study - Introduction</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="static/css/main.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    </nav>
    <div class="container">

        <hr class="featurette-divider">
        <div class="row">
            <div class="col-lg-6"  style="text-align: justify;">
                <p><h2>Introduction</h2></p>
                <p>Thank you for participating in our study. We are interested in learning about how developers use cryptographic APIs in Java.</p>
                <p>For this, we want to evaluate the usability of two Java signing APIs.</p>
<p>As part of this study, we will assign you one of the signing APIs and a Java programming task to complete. This should take about an hour. If you couldn't finish the task after 90 minutes, you should stop.  
We ask that you write and test code directly in your browser, in an online Java editor provided for this purpose. We will explain the editor soon. After you complete the task, you will be directed to a short exit interview.
Please answer this survey, even if you couldn't complete the task.</p>
<p>Since this is a usabilty evaluation, we want to know everything you like and dislike about the given API, especially in the context of solving the task. Please write your thoughts as commentary in your code.</p>
<p>We hope that participating in this study will be both fun and educational. We are very grateful for your donation of time and effort to help our research.</p>
            </div>
        </div>
        <form id="form" role="form" method="post" action="consent.php?token=<?php echo $token; ?>&token2=<?php echo $token2; ?>">
          
        <button type="submit" class="btn btn-default" id="submit-btn">Continue</button>
        </form>

        <hr class="featurette-divider">

    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</body>

</html>
