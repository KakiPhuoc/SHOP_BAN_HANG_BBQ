<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="./CSS/chat.css">
</head>
<body>
       <button class="open-button" onclick="openForm()">
    <img src="./IMG/logochat.jpg" width="60px" height="60px"></button>
 <div class="chat-popup" id="myForm">
   <form action="/action_page.php" class="form-container">
     <h1>Chat</h1>
 
     <label for="msg"><b>Message</b></label>
     <textarea placeholder="Soạn tin nhắn" name="msg" required></textarea>
 
     <button type="submit" class="btn-gui">Gửi</button>
     <button type="button" class="btn-thoat" onclick="closeForm()">Thoát</button>
   </form>
 </div>



        <script src="./JS/chat.js"></script>

</body>
</html>