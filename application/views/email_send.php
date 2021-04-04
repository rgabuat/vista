<h2>Sent Email Using SMTP</h2><br>
<form action="<?php echo base_url();?>email_send/send" method="post">
    <input type="email" name="from" class="form-control" placeholder="Enter Email" required><br>
    <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>