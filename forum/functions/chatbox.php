<?php
include("config.php");
if(isset($_SESSION['username'])){
    ?>
    <h2>Room to chat</h2>
    <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php">Log Out</a>
    <div class='msgs'>
        <?php include("msgs.php");?>
    </div>
    <form id="msg_form" method="post" action="send.php">
        <input class="chat-input" name="msg" size="30" type="text"/>
        <button class="chat-button">Send</button>
    </form>
    <?php
}
?>