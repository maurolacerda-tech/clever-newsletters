<?php
return [
    'name' => 'Newsletters',
    'controller' => 'NewslettersController',
    'actions' => 'get;index,get;create;create,post;store;store,get;edit;edit/{newsletter},put;update;{newsletter},delete;destroy;{newsletter}',
    'fields' => 'name,email,phone',
    'menu' => true,
    'author' => 'Mauro Lacerda - contato@maurolacerda.com.br',
    'folder' => 'newsletters'
];