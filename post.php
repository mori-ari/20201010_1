<html>

<head>
    <meta charset="utf-8">
    <title>データ入力</title>
</head>

<body>
    <form action="write.php" method="post"  enctype="multipart/form-data">
        名前: <input type="text" name="name"><br />
        タイトル: <input type="text" name="title"><br />
        説明文: <textarea  rows="4" cols="40" name="discription"></textarea><br />
        画像: <input type="file" name="img" id="img"/><br />
        <span id="preview_area"></span>
        <input type="submit" value="送信">
    </form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    $('#img').on('change', function(){ 
      let strFileInfo = $('#img')[0].files[0]; 
      if(strFileInfo && strFileInfo.type.match('image.*')){ 
  
        $('#preview').remove(); 
        $('#preview_area').append('<img id="preview" width="300" />'); 
  
        fileReader = new FileReader();
        fileReader.onload = function(event){
          $('#preview').attr('src', event.target.result);
        }
  
        fileReader.readAsDataURL(strFileInfo);
      }
    });
</script>
</body>

</html>
