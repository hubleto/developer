# Nginx configuration

Configuration of local development environment with Nginx

If you have installed Hubleto using [this](getting-started) guide and you are using Nginx, you will probable run into a problem right after you sign in into Hubleto and you will start using it.

**By default, your project will not respond to SEO friendly URLs becuase rewriting will not work.**

The reason is that, inspite from Apache, Nginx does not use .htaccess or similar file to configure rewrite rules. You have to set these rules in a server's configuration file followingly:

```
location /my-hubleto/ {
  if (!-e $request_filename) {
    rewrite /my-hubleto/?(.*) /my-hubleto/index.php?route=$1;
  }
}
```

Copy these lines, replace ```my-hubleto``` with whatever folder your project is located in, paste them into the Nginx configuration file and restart server.

From now on, the URL rewrites should work properly.