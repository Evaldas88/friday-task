# This task was created for friday day challenges

# First task:
Describe the "Television" class with the following properties:
* manufacturer
* channel
* sound

Assign the manufacturer name in the constructor as the received parameter.
As soon as the TV is turned on, the first channel should be selected and the sound level should be 50.
Create methods to increase and decrease the volume of the TV, but it never can
be below 0 and above 100.
Create a method to change the channel, but note that the TV only has 50,
so if you enter a higher number on the remote, the channel should be automatically changed to the first one.
Create a method to reset the TV back to factory settings.
Create a method that returns the string "The Sony TV is currently showing channel 8, and its
sound level 76.”
# Second task:
    Create a class Fruit that has:
* feature size rand 5 - 25;
* property id rand 1000000 - 9999999
* the property is set to false

    Create a bite() method that changes the value of the bite property to true.
Create a class Bag that has a static property fruit that is an array.
In the Bag class, create a static fill() method that fills the fruit property
20 Fruit objects and sort them by fruit size from largest to smallest.
In the class Basket, create a static method remove() that would remove (delete from) the fruits array
array) first (largest) fruit and return it.
After removing a few fruits and running the replenish() method again, it should do what the method says
name - to fill the array to full (20 elements) instead of overwriting all the fruits again (this
can be tracked by fruit id).
Externally (globally) create a variable rodent which is an object.
Fruits removed from the basket must be added to this object. How to use Fruit object id as keys
feature.
Before placing the fruit in the rodent object, the fruit must be "bitten" in the Fruit object
when running the prakasti() method.

# The third task:
    Create a mini blog using OOP and mysql. Create the posts table in the database:
* id (INT, 11, AI, PK)
* title (VARCHAR, 255)
* content (TEXT, NULL)
* image (VARCHAR, 255)
* createdAt (DATETIME, DEFAULT CURRENT_TIMESTAMP)

Create a Posts class whose purpose is to return information about posts.
Describe the following methods in class:
getPosts which would retrieve all posts from the database.
getPost which would return information about a single post (by id)
getPostTitle which would return the title of a single post.
getPostContent which would return the content of a single post.
getPostImage which would return a single post image.
getPostDate which would return the creation date of a single post.
createPost which would create a new post in the database.
In class, describe the necessary property(s) to place information in an object.

