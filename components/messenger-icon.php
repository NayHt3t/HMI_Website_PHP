<div class="messenger-icon" onclick="toggleMessenger()">
    <img src="images/vectorElements/messenger.png" alt="">
</div>
<div class="messenger-window">
    <h5 class="text-center p-2">Messenger</h5>
    
</div>

<script>
    function toggleMessenger() {
        const messengerWindow = document.querySelector('.messenger-window');
        messengerWindow.style.display = (messengerWindow.style.display === 'none' || messengerWindow.style.display === '') ? 'block' : 'none';
    }
</script>