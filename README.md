# Opencart Model Invoker

Access all opencart model's methods and invoke them remotely, use it like a api.


## Installation
##### Build
```shell script
clone repository
composer install
```

##### Setup Opencart
- You must have minimum v2.3.0.2 installed opencart system. https://github.com/opencart/opencart/releases

##### Copy Invoker Controller to Opencart
- Extract `invoker.zip` to `"{OpencartRootPath}/catalog/controller/"`

##### Enter your opencart informations to .env file
- Rename `.env.example` file to `.env`, or create `.env` file
- Enter your opencart informations

##### You're ready to go
- Run `example/generateModelCodes.php` to auto-generate models file (this file saved to `config/autoload/models.generated.php`)
- Run example in `/example` folder