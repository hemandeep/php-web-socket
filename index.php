<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var webSocket = new WebSocket('ws://localhost:9090');
    console.log(webSocket)
    webSocket.onopen = function(e) {
        console.log("Connection established!");
    };

    webSocket.onmessage = function(e) {
        console.log(e.data);
    };
</script>