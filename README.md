Hello! Thank you for taking the time to view my project. Before I get into some detials I would like to thank Coding Nepal on Youtube for the
outstanding tutorial that set the ground work for a majority of this project. Almost all of the CSS for this came from that tutorial as well as many other aspects.
My reasoning for this was that we were not being graded on how it looked but rather how secure it was. 
Again huge thanks to him: https://www.youtube.com/channel/UCk7xIEmd3MeyhIu2StLX5yA

Some features that I implemented:

1. This app is hosted on Heroku and uses ClearDB as the backend. 
2. This app stores messages in a ClearDB in an encrypted format. 
3. Encrypts passwords upon account creation. These will NOT be seen in the data dump unless it is required.
4. Input Validation for all fields.
5. DB Dump that can be accessed here once you are logged in: https://securechatapp-ca.herokuapp.com/php/dbdump.php 
6. There are four main pages, the login, signup, message chat, and user list.

Currently there are only two users once you create an account: myself and an account called Message Me. Feel free to message me and I will reply 
when I log in!

To properly test this you can create two accounts to message yourself back and forth. When I was under development, I would log in to one and then 
use an Incognito tab to log into the other. There you can message yourself to see the app working. 

NOTE: Because I am using a free version of ClearDB, it limits my requests to 3600 per hour. I limited the number of request to mitigate an access error so messages
may appear to some in slow but this is normal. If I were to turn up the refresh I would get locked out within 10 mintues, so please keep this in mind when test.

NOTE: Every Sunday I will be purging user accounts in order to not let the DB become too big!!

Please reach out to me if you have questions! Thank you.
