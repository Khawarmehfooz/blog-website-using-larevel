
# Blogpedia

## About Blogpedia
Blogpedia is a project developed using Laravel. It is same like a blogging website where user can perform CRUD operations on posts.

### Setup this Locally on Windows
- ### Installations
    - Xampp
    - Composer
    
- ### Clone the repo

    Clone this repo to `C:\xampp\htdocs on windows`

- ### Start the Xampp Server

    Open browser and go to `localhost/blogpedia/public`

- ### Setup Virtual host on Windows (Optional)
    - Go to `C:\xampp\apache\conf\extra`
    
    - Edit `httpd-vhosts.conf`
    
    - Paste the following and save the file:
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

   - #### Now open notepad as adminstrator
        - open file
        - Go to `C:\Windows\System32\drivers\etc` 
        - Select all files
        - Open `host` file
        - Paste the following at the end of file:
        ```
        127.0.0.1 localhost
        127.0.0.1 blogpedia.io
        ``` 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).







