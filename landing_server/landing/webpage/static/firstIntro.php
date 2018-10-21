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
<?php
$token = substr(uniqid(),-12,12);
$token2 = substr(uniqid(),0,12);
?>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    </nav>
    <div class="container">

        <hr class="featurette-divider">
        <div class="row">
            <div class="col-lg-8"  style="text-align: justify;">
                <p><h2>Wellcome</h2></p>
                <p>Thank you for participating in our study. Please save the folowing link. You will be able to continue the study after a systeme- or network-fail or after a break using this link.</p>
<p>Save this link: <a herf="<?php echo (isset($_SERVER['HTTPS'])?'https':'http').'://' . $_SERVER['HTTP_HOST']; ?>/index.php?token=<?php echo $token; ?>&token2=<?php echo $token2; ?>"><?php echo (isset($_SERVER['HTTPS'])?'https':'http').'://' . $_SERVER['HTTP_HOST']; ?>/index.php?token=<?php echo $token; ?>&token2=<?php echo $token2; ?></a></p>
            </div>
        </div>
        <form id="form" role="form" method="post" action="index.php?token=<?php echo $token; ?>&token2=<?php echo $token2; ?>">
          
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
