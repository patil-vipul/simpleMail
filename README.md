# Simple PHP Script for sending mail from custom SMTP server.

# Usage

Set values of SMTP and Authentication in index.php
$HOST
$SMTP_USERNAME
$SMTP_PASSWORD
$SMTP_PORT
$SEND_FROM_MAIL
$SEND_FROM_NAME
$SUBJECT
$BODY

Call to PHP file with following get Parameters
email - 'Email of the recipient'
name - 'Name of the recipient'

example.com/mail.php?email=someone@example.com&&name=Someone

# Note:

If you rename mail.php to index.php then no need to call it with file name, for example if the file is in "mail" folder in project
then you can call directly with folder name :

example.com/mail?email=someone@example.com&name=Someone

Further you can customize as you want ;)

# Regards, Vipul Patil
