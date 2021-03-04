<?php
	class SessionController {
		public function destroy_session(){
			session_destroy();
			echo "sessao destruida! <br>";
			echo	'<form action="index.php" method="post">';
			echo '<input type="hidden" name="class" value="Produto">';
			echo '<input type="hidden" name="acao" value="getAllProdutoCarrinho">';
			echo "<button>Voltar</button>";
			echo "</form>";
		}

		public function decisao($req){
			if ($req == 1){
				return true;
			} else if (!isset($_SESSION['usuario'])){
				return false;
			}
			return ($_SESSION['usuario'][2] >= $req);
		}

		public function Sessiondestroy_session(){
			return $this->decisao(1);
		}

		public function UsuariogetTelaLogin(){
			return $this->decisao(1);
		}

		public function Usuariologin(){
			return $this->decisao(1);
		}

		public function Usuariologout(){
			return $this->decisao(1);
		}

		public function UsuariogetTelaCadastro(){
			return $this->decisao(3);
		}

		public function Usuariocadastro(){
			return $this->decisao(3);
		}

		public function ClientesetCliente(){
			return $this->decisao(1);
		}

		public function ClientegetAllCliente(){
			return $this->decisao(2);
		}

		public function ItemPedidogetCarrinho(){
			return $this->decisao(1);
		}

		public function ItemPedidoeliminaItem(){
			return $this->decisao(1);
		}

		public function PedidogetItensPedidos(){
			return $this->decisao(2);
		}

		public function PedidogetPedidosCliente(){
			return $this->decisao(2);
		}

		public function PedidogetTelaInicial(){
			return $this->decisao(2);
		}

		public function Pedidorealizar_pedido(){
			return $this->decisao(1);
		}

		public function ProdutogetProdutoId(){
			return $this->decisao(1);
		}

		public function ProdutosaveProduto(){
			return $this->decisao(2);
		}

		public function ProdutocadastrarProduto(){
			return $this->decisao(2);
		}

		public function ProdutogetAllProduto(){
			return $this->decisao(1);
		}

		public function ProdutogetAllProdutoCarrinho(){
			return $this->decisao(1);
		}

		public function RegistrosetPedidoSituacao(){
			return $this->decisao(1);
		}
	}
?>