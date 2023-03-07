<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';
require_once 'vendor/autoload.php';

class categoriaController
{
	public function __construct() {
		$this->db = Database::connect();
	}

	private $db;
	public function index()
	{
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}

	public function ver()
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();

			// Conseguir productos:
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();

			// Paginar la vista:
			$products = $this->db->query("SELECT * FROM `productos` WHERE `categoria_id`=$id");
			$rowCount = $products->num_rows;
			$pagination = new Zebra_Pagination();
			$pagination->records($rowCount);
			$maxArticles = 12;
			$pagination->records_per_page($maxArticles);
			$page = $pagination->get_page('views/producto/ver.php');
			$startHere = (($page - 1)*$maxArticles);
			$notes = $this->db->query("SELECT * FROM `productos` WHERE `categoria_id`=$id LIMIT $startHere ,$maxArticles");
		}

		require_once 'views/categoria/ver.php';
	}

	public function crear()
	{
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save()
	{
		Utils::isAdmin();
		if (isset($_POST) && isset($_POST['nombre'])) {
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:" . base_url . "categoria/index");
	}
}
