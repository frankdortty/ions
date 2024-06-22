<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="middle">
        <button class="chatbot-toggler">
            <span class="material-symbols-rounded"><img src="media/message.jpg" alt="" style="width:100%"></span>
            <span class="material-symbols-outlined"><img src="media/message.jpg" alt="" style="width:100%"></span>
        </button>

        <div class="chatbot">
        <header>
            <h2>Chatbot</h2>
            <span class="close-btn material-symbols-outlined">X</span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hi there 👋<br>How can I help you today?</p>
            </li>
        </ul>
            <div class="chat-input">
            <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-rounded">send</span>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>