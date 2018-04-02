# hello-world
I accomplished less than I had hoped.
I had not used Github, before (More familear with SVN) 

So here is step by step what I did at a high level.

Setup a public Git hub repository. https://github.com/rob6809/
I took a VirtualBox that I had been setting up for a PHP course I am starting on, 
Installed Java and Jenkins 2.114 onto the machine.
Configured Jenkins to run on my VM.
Grabbed a piece of simple html/PHP code to reproduce the functionality of your "Greetings Microservice" 
Made a few small changes to it.

Configured apache to allow for 3 simulated environments. Test, Demo, and Deploy
Configured Jenkins to check out from GitHub, and deploy to test environment.
Copied the config for the test deploy for use in demo, and deploy environments.
I used cp for deploy for speed and ease of writing, in a real environment I would likely use either rsync, or scp with preshared keys.

I then backed up the Jenkins config. so you would have something to work with. I was originally going to have Jenkins trigger the backup. but a permissions issue I did not have time to correct pervented this.

My next step would have been to configure automated testing using Selenium, I did install it, but did not have time to build a test suite.

I configured Jenkins for SCM polling, this has not been fully tested but seems to be working uther than failing when it sees no changes.

Wrote this, and took another copy of the Jenkins backup.

The jobs directory under Master is there by mistake, and it doesn't want me to delete it. I am sure there must be a way to delete it, but I am out of time.
