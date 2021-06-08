import {Menu} from './Menu.js'
const $body = document.querySelector('body');
$body.classList.remove('no-js');
$body.classList.add('js');
	
	
const $hamburguer = document.querySelector('.js-hamburguer');
const $fechaMenu = document.querySelector('.fecha-menu');
const $divMenu = $('.js-menu');
const $sectionHeader = document.querySelector('.section-header');
const $vantagensIcons = document.querySelector('.vantagens-icons');
const $linksMenu = document.querySelectorAll('.js-menu li');

const teste = new Menu($hamburguer, $divMenu, $fechaMenu, [$sectionHeader, $vantagensIcons], 1024, $linksMenu);

