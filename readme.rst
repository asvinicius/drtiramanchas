###################
DR TIRA MANCHAS
###################

Fiz uma mudança em 'views/public/welcome.php' tirei a <div id="page-inner"> porque achei que estivesse perdendo espaço.
E também tirei no menu_left o botão HOME, por onde vai ficar a logo ja vai dar caminho para home, não é necessário.

Agora vamos ao principal:

No arquivo 'views/template/public/menu_left', na linha onde temos o botão para contato (linha 14) eu alterei o href.
Agora ele ficou desta forma: href="<?= base_url('contact'); ?>" ;
Com isso é como se o botão fizesse uma chamada para "localhost/drtiramanchas/contact".
Ao fazer isso, o codeigniter entende que estamos buscando um controlador com nome CONTACT e tenta acessá-lo.
--- caso vc faça isso sem ter o controlador de tal nome vai dar um erro do codeigniter dizendo que ele não existe---
Então o próximo passo foi criar o controlador contact.
Quando o codeigniter manda acessar o controlador, no caso no formato href="<?= base_url('contact'); ?>", ele vai buscar
    dentro do controlador a função index por padrão.
Então devemos criar uma função index e dentro dela chamar as loadviews para montar nossa página.
Essa parte é bem parecida com aquela welcome que fizemos no início, so que em vez da view welcome vamos chamar contact.
Por último eu criei a view contact, bem parecida com a welcome, só modifiquei o texto.