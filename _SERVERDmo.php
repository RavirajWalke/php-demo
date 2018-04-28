<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        // put your code here
        echo $_SERVER['PHP_SELF']."<br>";               //Returns the filename of the currently executing script
        echo $_SERVER['GATEWAY_INTERFACE']."<br>";	//Returns the version of the Common Gateway Interface (CGI) the server is using
        echo $_SERVER['SERVER_ADDR']."<br>";	        //Returns the IP address of the host server
        echo $_SERVER['SERVER_NAME']."<br>";	        //Returns the name of the host server (such as www.w3schools.com)
        echo $_SERVER['SERVER_SOFTWARE']."<br>";	//Returns the server identification string (such as Apache/2.2.24)
        echo $_SERVER['SERVER_PROTOCOL']."<br>";	//Returns the name and revision of the information protocol (such as HTTP/1.1)
        echo$_SERVER['REQUEST_METHOD']."<br>";          //Returns the request method used to access the page (such as POST)
        echo $_SERVER['REQUEST_TIME']."<br>";           //Returns the timestamp of the start of the request (such as 1377687496)
        echo $_SERVER['QUERY_STRING']."<br>";           //Returns the query string if the page is accessed via a query string
        echo $_SERVER['HTTP_ACCEPT']."<br>";            //Returns the Accept header from the current request
        //echo $_SERVER['HTTP_ACCEPT_CHARSET']."<br>";	//Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
        echo $_SERVER['HTTP_HOST']."<br>";              //Returns the Host header from the current request
        //echo $_SERVER['HTTP_REFERER']."<br>";           //Returns the complete URL of the current page (not reliable because not all user-agents support it)
        //echo $_SERVER['HTTPS']."<br>";                  //Is the script queried through a secure HTTP protocol
        echo $_SERVER['REMOTE_ADDR']."<br>";            //Returns the IP address from where the user is viewing the current page
        //echo $_SERVER['REMOTE_HOST']."<br>";            //Returns the Host name from where the user is viewing the current page
        echo $_SERVER['REMOTE_PORT']."<br>";            //Returns the port being used on the users machine to communicate with the web server
        echo $_SERVER['SCRIPT_FILENAME']."<br>";	//Returns the absolute pathname of the currently executing script
        echo $_SERVER['SERVER_ADMIN']."<br>";           //Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
        echo $_SERVER['SERVER_PORT']."<br>";            //Returns the port on the server machine being used by the web server for communication (such as 80)
        echo $_SERVER['SERVER_SIGNATURE']."<br>";	//Returns the server version and virtual host name which are added to server-generated pages
        //echo $_SERVER['PATH_TRANSLATED']."<br>";	//Returns the file system based path to the current script
        echo $_SERVER['SCRIPT_NAME']."<br>";            //Returns the path of the current script
        //echo $_SERVER['SCRIPT_URI']."<br>";             //Returns the URI of the current page

        ?>
    </body>
</html>
