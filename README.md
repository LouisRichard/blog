# blog
Source code for [blog.richard486.ch](https://blog.richard486.ch)

Requirement :
* [Parsedown](https://github.com/erusev/parsedown)
* PHP
* MySQL

It's just a basic PHP thing. I didn't even bother making it look good.  
It's not gonna work well on phones and stuff like that but I did it more for the backend stuff anyway. Maybe someday I'll find a decent template and use that. For now, that'll do.  

To be very basic (because it is), this projects is made to index different Markdown files and make them readable from the web.  
It stores the file path into a database and retrieves the relevant informations when needed.  
When opening an article, it'll read the file content and use Parsedown to convert it to HTML for your browser to understand.  

I've made a quick and dirty style.css file just so it doesn't burn your retina while trying to read (dark mode > all)  

To test it, edit model/dbconnector.php with your mysql login.  
You can use the script DB/CreaDB.sql to create the database.  

Nothing is automated when it comes to publishing something.  
I will just write it in Markdown, drop it in the post directory and manually add it to the database with the relevant informations.  

the query looks something like this :  
```sql
INSERT INTO blog.posts (title, mdfile, date) VALUES ('Title of the article', 'file_name_here.md', NOW());
```

## Security notice
I've done jack to make sure everything is secure.  
The website as it is now is very vulnerable to SQL injection because I didn't bother making checks while I'm still building it!  
It is not safe for a production environement! Use this code at your own risk! (I am very reckless and stupid)
