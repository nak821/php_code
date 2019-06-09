<?php 
$txt="echo 'Hello World!'";
if(isset($_POST['submit'])){
	$txt = $_POST['code_editor'];
}
session_start();
$filename = session_id().".php";

$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, "<?php\n".$txt."\n?>");
fclose($myfile);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Run PHP Code</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
	<style type="text/css">
		#codediv{
			border-left: 6px solid green;
			border-right: 6px solid green;
		}
		.btn-success{
			color: #fff;
    background-color: #148814;
    border-color: #0a7d0a;
		}
		.btn-success:hover{
			color: #fff;
    background-color: #0d770d;
    border-color: #0a7d0a;
		}
	</style>
</head>
<body>
<div class="container">
  <h3>Write PHP Code Here</h3>
	
<div class="row">
<div style="border: 1px solid green; height: 422px">
<div class="col-md-6" id="codediv">
<code style="margin-left: 25px; ">&lt;?php</code>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<textarea rows="5" cols="50" name="code_editor" id="code_editor">
<?php 
if(isset($_POST['submit'])){ 
	echo $txt; 
}else{
	echo 'echo "Hello World!";';
}
?>
</textarea>
<span style="position: absolute;left: 450px;top: 370px;">
    <input type="submit" name="submit" class="btn btn-success" value="Execute" style="border-radius:0">
</span>
</form>
</div>

<div class="col-md-6" id="outputdiv">
<code style=""> OUTPUT </code>
	<div><?php include_once session_id().'.php';?></div>
</div>
</div>
</div>

</div>
<script src="http://codemirror.net/lib/codemirror.js"></script>
    <script src="http://codemirror.net/addon/edit/matchbrackets.js"></script>
    <script src="http://codemirror.net/addon/edit/continuecomment.js"></script>
    <script src="http://codemirror.net/mode/php/php.js"></script>
    <script src="http://codemirror.net/mode/htmlmixed/htmlmixed.js"></script>
    <script src="http://codemirror.net/mode/clike/clike.js"></script>
 <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code_editor"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
        
    });
     editor.setSize(null, 400);
  </script>
</body>
</html>