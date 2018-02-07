<?php 
defined('BASEPATH') OR exit('No direct');
// Tudo que está acima eu não faço idéia pra que serve kkkk

// nessa linha abaixo declaramos a classe Contact extendendo do controlador padrao do codeigniter.
// Com isso torna-se padrão que quando digitar a baseurl/contact, ele vai buscar um controlador com nome CONTACT
    class Lavanderia extends CI_Controller{
        // definimos então a função INDEX.
        // quando digitar a baseurl/contact ele vai acessar o controlador e buscar por padrão a função INDEX
        // então é na função index que devemos fazer o load-view para a página padrão do controlador
        public function index(){
            $this->load->view('template/public/header');
            $this->load->view('template/public/menu_left');
            $this->load->view('public/lavanderia');
            $this->load->view('template/public/footer');
        }
        // a título de exemplo coloquei o código abaixo
        // na pagina de contato ao clicar no botao enviar mensagem, ele deve fazer a chamada para uma função.
        // no caso a função de exemplo que coloquei foi essa send, que será a responsável por fazer o envio.
        /*
         public function send(){
            executa o envio da mensagem;
        }
         */
    }
?>