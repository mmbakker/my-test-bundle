# Symfony test bundle

This repository contains an ultra slim bundle. It serves as a basis for practicing certain Symfony bundle
development skills.

## Before you begin

It's a good idea to **fork this repository**. This allows you to save your progress in your own Github
account and continue where you left off later on.

You might want to validate whether your bundle works in your Symfony project. You can use two approaches for
this:

1. Packagist: if you have forked this repository, you can use [packagist.org](https://packagist.org) to
   register your bundle and install it using composer.
   
2. Symlink: you can also symlink the project and have the bundle installed manually. To symlink the bundle
   directory, run the following command from the root of your Symfony project folder (replace
   `<path-to-your-test-bundle-dir>` with the path to where your test bundle resides, for example
   `/Users/michielbakker/Projects/my-test-bundle`):
   ```shell
   # Unix
   mkdir -R vendor/mmbakker \
     && cd vendor/mmbakker \
     && ln -S <path-to-your-test-bundle-dir>
   ```

## Tasks

The following tasks test knowledge on how to create a bundle and how to tackle specific problems when
developing a Symfony bundle.

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

