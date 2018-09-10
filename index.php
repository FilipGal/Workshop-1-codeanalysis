<!DOCTYPE html>
	<html>
	<head>
	  <title>Upload your files</title>
	</head>
	<body>
	  <form enctype="multipart/form-data" action="index.php" method="POST">
	    <p>Upload your file</p>
	    <input type="file" name="uploaded_file" /><br />
	    <input type="submit" value="Upload" />
	  </form>
	<?PHP
				require_once 'view/MetricsView.php';
        if (!empty($_FILES['uploaded_file'])) {
            // change name of path to something less generic
            $path = "_temp/uploaded.php";
            if (!move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                echo "There was an error uploading the file, please try again!";
            }
						$file = file($path);
						$mv = new MetricsView($file);
						echo $mv->getHtml();
            //$metrics = new Metrics($file);
            //echo $metrics->getHTML();
        }
    ?>
		</body>
		</html>