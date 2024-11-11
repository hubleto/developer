# Getting started

3 minutes to start your ceremony

```
# prepare project's folder
mkdir /var/www/html/my-ceremony
cd /var/www/html/my-ceremony
composer create-project wai-blue/ceremonycrm-app
npm install & npm run build

# let Ceremony ask you few questions and create config file
ceremony.sh orchestrate config set interactively

# install empty Ceremony with default settings
ceremony.sh orchestrate install

# add first admin user
ceremony.sh orchestrate user add role:administrator login:administrator password:administrator
```

And then open [http://localhost/my-ceremony](http://localhost/my-ceremony) in your favourite browser

## Customizing

You can create your extensions. Learn [here](creating-extentions) how.