<div class="messenger-icon" onclick="toggleMessenger()">
    <img src="images/vectorElements/messenger.png" alt="">
</div>
<div class="messenger-window">
    <div class="messenger-header d-flex justify-content-between align-items-center p-2">
        
    </div>
    <div class="messenger-body p-3">
        <p>Hi! How can we help you?</p>
        <button class="btn btn-primary">Log into Messenger</button>
        <p class="small text-muted text-center mt-2">If you choose to log in, HMMI Tech will see the website you came from and information you've made public on your Facebook profile.</p>
    </div>
</div>

<script>
    function toggleMessenger() {
        const messengerWindow = document.querySelector('.messenger-window');
        messengerWindow.style.display = (messengerWindow.style.display === 'none' || messengerWindow.style.display === '') ? 'block' : 'none';
    }
</script>