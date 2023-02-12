<h1 align="center">Blogpedia</h1>

## About Blogpedia

Blogpedia is a project developed using Laravel. It is same like a blogging website where user can perform CRUD operations on posts.

<hr>

### Setup this Locally on Windows
- ### Installations
    - Xampp
    - Composer
    
- ### Clone the repo

    Clone this repo to <code>C:\xampp\htdocs on windows</code>

- ### Start the Xampp Server

    Open browser and go to <code>localhost/blogpedia/public</code>
    
<hr>

- ### Setup Virtual host on Windows (Optional)
    Go to <code>C:\xampp\apache\conf\extra</code>
    
    Edit <code>httpd-vhosts.conf</code>
    
    Paste the following and save the file:
     ```
    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/"
        ServerName localhost
    </VirtualHost>
    <VirtualHost *:80>
        DocumentRoot "C:/xampp/htdocs/blog-website-using-laravel/public"
        ServerName blogpedia.io
    </VirtualHost>
    ```
    
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
