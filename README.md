# Tweets

A small web application that retrieves the latest tweets for a given account and displays them in a grid, with the ability to search and filter the tweets by keywords

To run the application:

* Pull the code
* Add you database details and twitter API credentials to the .env file
* Add your Twitter screen name to TweetsTableSeeder.php
* Add your twitter screen name to app/Console/Commands/tweetData.php
* Run the custom command 'php artisan update:tweets' to pull in the latest tweets
* Launch your application in the browser
