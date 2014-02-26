breadboard
============

------------
**this project has been discontinued**  I started from the ground up and reopend the project in [bp-php](https://github.com/danferth/bp-php) it will be a `PHP` based boilerplate for use in simple websites.  It includes:

- databases
- sessions (optional on each page)
- pretty URLs
- secure login
- ....
 
------------





____
A **breadboard** *(or protoboard)* is a construction base for prototyping of electronics. The term "breadboard" is commonly used to refer to a solderless breadboard *(plugboard)*.

Because the solderless breadboard does not require soldering, it is reusable. This makes it easy to use for creating **temporary prototypes** and **experimenting** with circuit design.
_____

##Breadboard is a testing site for ideas and bug discovery.

Many times I need to find a bug so need a place to input some code and try to narrow it down to a specific location.  This leads to a random page in my `xampp` file that before long means nothing, or worse I play with an idea that becomes something I would like to turn into something grand, or something someday I need to see "how the hell did I do that".

Enter **Breadboard**, a playground of sorts.  In a nutshell it's a simple php site that that has a way of creating pages quickly by adding a `php` page of variables that point to a `php` page with the content in question and or a `js` page as well.

In creating separate pages for `css`, `js` and `php (content)` you can concentrate on the code itself and also syntax highlighting works in the editor.  Also it's just fun.

For plugin testing, bower is used to populate the `assets/components` folder.  From there a boolean is used in the variables page to turn on and off the plugins needed for the page, this way you can also play with different plugins used in other pages and not have to load all of them.  In the footer all plugins used on the page are listed.

Rather elementary and kinda more or less a place to play...
