<div id="top">
    <button type="button" onclick="esconde()" class="bot-btn" name="button">Habla conmigo!</button>
            <iframe id="chat"
        allow="microphone;"
        width="500"
        height="550"
        src="https://console.dialogflow.com/api-client/demo/embedded/643e125f-7d98-4e1a-bb19-981ba9d571a9">
    </iframe>
</div>

<style media="screen">
    #top {
        position:fixed;
        bottom:0;
        right:0;
    }
    .bot-btn{
        background-color: #eb5215;
        border: 1px solid #dd4d14;
        color: white;
        border-radius: 32px;
        height: 40px
    }

</style>

<script>
    function esconde(){
        $('#chat').toggle();
    }
    esconde();
</script>