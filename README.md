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
