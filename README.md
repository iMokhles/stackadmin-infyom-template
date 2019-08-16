# stackadmin-infyom-template
StackAdmin templates for InfyOm Laravel Generator http://labs.infyom.com/laravelgenerator/

Stack Theme Page: https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/

## Installation

* Remove Existing Templates
```bash
Remove any previous included templates stuff. like,
"infyomlabs/core-templates" from your composer.json
\InfyOm\CoreTemplates\CoreTemplatesServiceProvider::class, from your config/app.php
```
* Add Package
```bash
To use StackAdmin templates, add following to your composer.json if you haven't.
"require": {
    "imokhles/stackadmin-infyom-template": "1.0"
} 
```
* Run Composer update
```bash
composer update
```
* Add Service Provider ( if you use laravel below 5.5 )
```bash
Add following service providers into your providers array in config/app.php
iMokhles\StackAdminTemplate\StackAdminTemplateServiceProvider::class,
```
* Update Configuration
```bash
Update config/infyom/laravel_generator.php to use StackAdmin templates.
Update 'templates' => 'stackadmin-infyom-template'
```
