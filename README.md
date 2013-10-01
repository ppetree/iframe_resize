iframe_resize
=============

3 files that demonstrate how to create and resize an iframe cross domain

Instructions:

1) Place domain_a.js and domain_a.php on domain_a.com

2) Edit domain_a.php (iframe contents) and place an image where marked

3) Place domain_b_index.php on domain_b.com



What happens:

When domain_b_index.php is run it will pull the domain_a.js from domain_a.com and domain_a.js creates the iframe and provides a message handler. Once created, the iframe will load domain_a.php from domain_a.com and display the image and any other contents you added inside the iframe. Domain_a.com owns the contents of the iframe and these contents cannot be modified by domain_b.com.

When the iframe contents page is loaded the onload event gets called and will send a resize command to the domain_b_index.php on domain_b.com which will resize the iframe to 200px high. When you click on the image from step 2, another resize command will be sent from the iframe (owned by domain_a.com) to domain_b_index.php and the iframe height will be expanded to 500px.
