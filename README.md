# Symfony test bundle

This repository contains an ultra slim bundle. It serves as a basis for practicing certain Symfony bundle
development skills.

By completing the tasks below

## Tasks

1. Add service configuration for `MessageBuilder`: the `MessageBuilder` does not autowire out-of-the-box.
   1. Why?
   2. Can you solve it?


2. Some variables need to be different on each environment (think of database credentials for example). This
   is most commonly done by using environment variables.
   1. Now that `MessageBuilder` autowires, can you make it so that it accepts configuration from an 
      environment variable when implemented in an app?


3. Every bundle should have unit tests, ensuring the functionality provided is proper and works. This is
   especially important for libraries or projects that are under constant development by multiple people.
   1. Where do you put a unit test in a bundle?
   2. What test would you write for this bundle?

