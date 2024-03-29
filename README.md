<p align="center">
    <a href="https://github.com/terabytesoft/app-basic" target="_blank">
        <img src="https://farm1.staticflickr.com/887/27875183957_69a3645a56_q.jpg" height="100px;">
    </a>
    <h1 align="center">Yii 3.0 Web Application Basic</h1>
</p>

</br>

<p align="center">
    <a href="https://www.yiiframework.com/" target="_blank">
        <img src="https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)" alt="Yii Framework">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoft/app-basic/build-status/master" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoft/app-basic/badges/build.png?b=master" alt="Build Status">
    </a>
    <a href="https://scrutinizer-ci.com/g/terabytesoft/app-basic/?branch=master" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoft/app-basic/badges/quality-score.png?b=master" alt="Code Quality">
    </a>
    <a href="https://scrutinizer-ci.com/code-intelligence" target="_blank">
        <img src="https://scrutinizer-ci.com/g/terabytesoft/app-basic/badges/code-intelligence.svg?b=master" alt="Code Intelligence Status">
    </a>
	<a href="https://codeclimate.com/github/terabytesoft/app-basic/maintainability">
		<img src="https://api.codeclimate.com/v1/badges/88fa672f3bb6614cbeb7/maintainability" />
	</a>
	<a href="https://github.styleci.io/repos/163105087">
		<img src="https://github.styleci.io/repos/163105087/shield?branch=master" alt="StyleCI">
	</a>
</p>

</br>

<p align="justify">
App Web Application Basic of Yii Version 3.0 <a href="http://www.yiiframework.com/" title="Yii Framework" target="_blank">Yii Framework</a> application best for rapidly creating projects with Bootstrap 4.
</p>

</br>

![app-basic](docs/images/home.jpg)

</br>

### **DIRECTORY STRUCTURE:**

```
config/             contains application configurations
docs/               contains documentation app-basic
src/
  assets/           contains assets definition
  controllers/      contains Web controller classes
  forms/            contains models forms classes  
  messages/         contains messages translate application 
  views/            contains view files for the Web application
tests/              contains various tests for the basic application
vendor/             contains dependent 3rd-party packages
```

### **FEATURES:**

The App Web Application contains:

- [x] Pages - [Screenshots]:
    - [about](docs/images/about.jpg)
    - [contact](docs/images/contact.jpg)

<p align="justify">
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.
</P>

### **REQUIREMENTS:**
 
The minimum requirement by this project template that your Web server supports PHP 7.1.

### **INSTALLATION:**

<p align="justify">
If you do not have <a href="http://getcomposer.org/" title="Composer" target="_blank">Composer</a>, you may install it by following the instructions at <a href="http://getcomposer.org/doc/00-intro.md#installation-nix" title="getcomposer.org" target="_blank">getcomposer.org</a>.
</p>

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability=dev terabytesoft/app-template-basic myapp
~~~

<p align="justify">
Now you should be able to access the application through the following URL, assuming `public` is the directory
directly under the Web root.
</p>

<p align="justify">
<strong>App Web Application Basic (terabytesoft/app-basic) is installed automatically together with the Web Project Skeleton Application Basic (terabytesoft/app-template-basic), both try the necessary packages to start your Web Application Basic in Yii3.</strong>
</p>

__*Virtual Host:*__

~~~
http://localhost/
~~~

__*Server Yii:*__

Directory - / [app-template-basic]

~~~
 ./vendor/bin/yii serve
~~~

### **CONFIGURATION:**

**APP-BASIC SETUP DEFAULT:**

```
config/params.php - [app-template-basic]

return [
    // aplication:
    'app.id' => 'my-project-basic',
    'app.name' => 'My Project Basic',
    'adminEmail' => 'admin@example.com',
    'debug.allowedIPs' => ['127.0.0.1'],
    'favicon.ico' => '@yii/app/../public/favicon.ico',
    // mailer:
    'mailer.useFileTransport' => true,
    // translator:
    'i18n.locale' => 'en',
    'translator.basePath' => dirname(__DIR__) . '/messages',
    'translator.sourceLanguage' => 'en',
];
```
**NOTE:** 

<p align="justify">
All the configuration is customizable through parameters, there is no need to modify any configuration of Yii 3.0 Web Application Basic, if you need any extra configuration you can open an issue with pleasure we will add it.
</p>

Very important when changing any configuration run `composer du`, to apply it.

### **GENERATE MESSAGES TRANSLATION:**

<p align="justify">
To generate the Yii 3.0 Web Application Basic translations, you can change the language settings in:
<p>

```
config/messages.php - [app-template-basic]:

'languages' => ['en'], 
```
<p align="justify">
 Automatically the generator will create the folder of your language in /messages - [app-template-basic], If any translation is needed, you can open an issue to add it.
</p>

```
root directory - [app-template-basic]:
 ./vendor/bin/yii message config/messages.php
```

### **WEB SERVER SUPPORT:**

- Apache.
- Nginx.
- OpenLiteSpeed.

### **DOCUMENTATION STYLE GUIDE:**

- [Style Guide](docs/DOCUMENTATION.md).

### **LICENSE:**

[![License](https://poser.pugx.org/terabytesoft/app-basic/license)](LICENSE.md)
[![Total Downloads](https://poser.pugx.org/terabytesoft/app-basic/downloads)](https://packagist.org/packages/terabytesoft/app-basic)
