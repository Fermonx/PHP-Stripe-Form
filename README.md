## PHP Stripe payment form

* Installation Instructions:
 
  1. Clone this repository anywhere -> **git clone https://github.com/Fermonx/PHP-Stripe-Form.git**
  
  2. Go to the folder you just cloned and run **php composer.phar install** so you can install the dependencies
  
  3. Verify that now you have a vendor folder with all 3 dependencies: bootstrap, stripe and the composer folder.
  
* How to run:

  1. In the project folder open a new terminal
  
  2. Run this command: php -S localhost:4000 (Note: the port can be any number you like, I put 4000 just because)
  
  
* Extra Info:
  
  - The code is still using my stripe test keys, if you want to be able to see if the charges happen you have to register at
  Stripe (https://dashboard.stripe.com/register?redirect=%2Ftest%2Fcustomers) and then replace my keys with yours, after that every
  charge you make you will be able to see it in your account dashboard.
  
  - The code is pushed as is, that means, if there are bugs I haven't checked them because this was a quick project I made to test stuff
  
 
