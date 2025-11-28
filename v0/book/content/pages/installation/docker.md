# Installation using Docker

Use Hubleto for your projects.

There also is a Docker image ready for installation, which already contains the webserver and MySQL database, so it's a quick installation on any machine, as long as Docker is already running. 

  * installation of the production-ready ERP
  * not suited for development purposes

### Showcase build

You only need to run the command `docker run -d -p 8080:80 -e url="http://localhost:8080/" mrgopes/hubleto-webapp` to set up a demo build of Hubleto. You can log in with the credentials `admin@example.com` and password `changeme` at `http://localhost:8080/hubleto/`.

### Production-ready build

To make your Hubleto installation ready for production and real use, please also specify the following arguments:

| Variable           | Description                                     |
| ------------------ | ----------------------------------------------- |
| `url`             | The URL at which your installation will run, default is `http://localhost:8080/`  |
Table: Special arguments only for installing Hubleto using `docker`

If you have your own database and do not wish to use the packaged one, define the following arguments: `dbHost`, `dbPort`, `dbUser`, `dbPassword`, `dbName`, `dbCodepage`.

Also do not forget to specify your account details `accountName`, `adminName`, `adminFamilyName`, `adminNick`, `adminEmail`, `adminPassword`, `demoData`.

Specify all arguments as if you were defining the initialization config (except `url`), see [php hubleto init](cli/init).

The `-p 8080:80` specifies, that the container should run on port `8080`. If your port `80` is not being used, we advise you to use `-p 80:80` instead. Otherwise, you can use e.g. NGINX to forward traffic from a specific route to this port, however, in that case don't forget to set the `url` argument accordingly. 

> Important: When using the `-p` directive, always also specify the `-e url=".."` argument accordingly, Hubleto will otherwise assume your outer port (the one you access) is 80 and it will not work correctly because of this.

Example installation command with default values for all arguments:
<pre><code>
docker run -d -p 8080:80 \
  -e url="http://localhost:8080/"
  -e dbHost="127.0.0.1" \
  -e dbPort="3306" \
  -e dbUser="hubleto" \
  -e dbPassword="hubleto" \
  -e dbName="hubleto" \
  -e dbCodepage="utf8mb4" \
  -e accountName="Admin User" \
  -e adminName="admin" \
  -e adminFamilyName="admin" \
  -e adminNick="admin" \
  -e adminEmail="admin@example.com" \
  -e adminPassword="changeme" \
  -e demoData="false" \
  mrgopes/hubleto-webapp
</code></pre>

> Note: if you want to use the default value for an argument, you can also simply leave it out.


## Download .zip package

Zip package contains production-ready Hubleto ERP.

| Step                     | Command                                  |
| ------------------------ | ---------------------------------------- |
| Download Hubleto CE      | https://www.hubleto.com/en/download      |
| Unzip downloaded package | `unzip hubleto-[RELEASE_VERSION]-ce.zip` |
| Initialize project       | `php hubleto init`                       |
Table: Steps to install Hubleto from .zip package
