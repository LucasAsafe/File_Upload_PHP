<!DOCTYPE html>
<html>
<head>
  <title>Upload Multimidia</title>
  <link rel="stylesheet" type="text/css" href="upload.css">
</head>
<body>
<div id='center'>
    <div id='conteudo'>
        <form enctype="multipart/form-data" action="uploadfile.php" method="POST">
            <p>Selecione um arquivo para enviar</p>
            <input type="file" name="uploaded_file"></input><br/>
            <br>
            <input id='botao' type="submit" value="Upload"></input>
        </form>
    </div>
   
</div>
 
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "pastasupadas/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
     {
      echo "O arquivo ".  basename( $_FILES['uploaded_file']['name']). 
      " Foi upado";

    } else{
        echo "Ocorreu um erro ao enviar o arquivo, tente novamente";
    }
  }
?>