<?php
$name = 'Brandon Browning';
$email = 'browningb2@nku.edu';
$major = 'Data Science';
$year = 'Senior';
$bio = 'My name is Brandon.  I work at a company called BLS as a data science intern.  I like to race dirt bikes in my free time.';
$picture = 'images/me.jpg';
$expectations = 'I hope to have a better understanding of using php to connect web pages to data sources.';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Brandon Browning</title>
</head>
<body>
	<div class="jumbotron">
  <h1 class="display-4"> <?php echo $name ?> </h1>
  <?php echo '<a href="mailto:'.$email.'">browningb2@nku.edu</a>' ?><br />
  <p class="lead">Major: <?php echo $major ?></p>
  <p class="lead">Year: <?php echo $year ?></p>
  <p class="lead"><?php echo $bio ?></p>
  <p class="lead"><?php echo $expectations ?></p>

  <hr class="my-4">

  <p><img src="<?php echo $picture ?>"/></p> 

  

  <a class="btn btn-primary btn-lg" href="mailto:<?php echo $email ?>" role="button">Learn more</a>
</div>
</body>
</html>
