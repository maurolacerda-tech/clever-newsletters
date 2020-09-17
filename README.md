# clever-newsletter
Módulo de criação de newsletter do CMS da cleverweb.com.br

## Instalação
```
composer require maurolacerda-tech/clever-newsletters:dev-master
```
```
php artisan migrate
```

## Opcionais
Você poderá públicar os arquivos de visualização padrão em seu diretório views/vendor/Newsletter

```
php artisan vendor:publish --provider="Modules\Newsletters\Providers\NewsletterServiceProvider" --tag=views
```


Para públicar os arquivos de configurações.

```
php artisan vendor:publish --provider="Modules\Newsletters\Providers\NewsletterServiceProvider" --tag=config
```