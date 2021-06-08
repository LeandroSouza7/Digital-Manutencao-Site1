import {Menu} from './Menu.js'
const $body = document.querySelector('body');
$body.classList.remove('no-js');
$body.classList.add('js');


const $hamburguerServicos = document.querySelector('.js-hamburguer-servicos');
const $fechaMenuServicos = document.querySelector('.fecha-menu-servicos');
const $divMenuServicos = $('.js-menu-servicos');
const $mainServicos = document.querySelector('.servicos');
const $quebraDeLinhaServicos = document.querySelector('.quebra-de-linha-servicos');
const $linksMenuServicos = document.querySelectorAll('.js-menu-servicos li');

const testeServicos = new Menu($hamburguerServicos, $divMenuServicos, $fechaMenuServicos, [$mainServicos, $quebraDeLinhaServicos], 1024, $linksMenuServicos);