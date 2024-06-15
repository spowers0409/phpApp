<?php include 'nav.php'; ?>
<div class="content">
    <h1>Contact Us</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label><br>
        <input  type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input  type="email" id="email" name="email"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input  type="submit" value="Submit"><br>
    </form>
</div>