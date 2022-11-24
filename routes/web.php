<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CajaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\PrivilegioController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Models\Persona;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// aca estamos llamando a la pàgina principal
Route::get('/', function () {
    return view('plantilla');
});

// Resources permite trabajar con los metodos de los datos
// Route::resource('persona', PersonaController::class);
Route::get('persona/exportarpdf', [PersonaController::class, 'exportar_pdf'])->name('persona.exportar_pdf');
Route::get('persona/index', [PersonaController::class, 'index'])->name('persona.index');
Route::get('persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('persona/store', [PersonaController::class, 'store'])->name('persona.store');
Route::get('persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('persona/{id}', [PersonaController::class, 'update'])->name('persona.update');
Route::get('persona/{id}/show', [PersonaController::class, 'show'])->name('persona.show');
Route::get('persona/{id}/destroy', [PersonaController::class, 'destroy'])->name('persona.destroy');

// caja
Route::get('caja/exportarpdf', [CajaController::class, 'exportar_pdf'])->name('caja.exportar_pdf');
Route::get('caja/index', [CajaController::class, 'index'])->name('caja.index');
Route::get('caja/create', [CajaController::class, 'create'])->name('caja.create');
Route::post('caja/store', [CajaController::class, 'store'])->name('caja.store');
Route::get('caja/{id}/edit', [CajaController::class, 'edit'])->name('caja.edit');
Route::put('caja/{id}', [CajaController::class, 'update'])->name('caja.update');
Route::get('caja/{id}/show', [CajaController::class, 'show'])->name('caja.show');
Route::get('caja/{id}/destroy', [CajaController::class, 'destroy'])->name('caja.destroy');

// categoria
Route::get('categoria/index', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('categoria/store', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::get('categoria/{id}/show', [CategoriaController::class, 'show'])->name('categoria.show');
Route::get('categoria/{id}/destroy', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

// cliente
Route::get('cliente/exportarpdf', [ClienteController::class, 'exportar_pdf'])->name('cliente.exportar_pdf');
Route::get('cliente/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('cliente/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::get('cliente/{id}/show', [ClienteController::class, 'show'])->name('cliente.show');
Route::get('cliente/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

// compra
Route::get('compra/exportarpdf', [CompraController::class, 'exportar_pdf'])->name('compra.exportar_pdf');
Route::get('compra/index', [CompraController::class, 'index'])->name('compra.index');
Route::get('compra/create', [CompraController::class, 'create'])->name('compra.create');
Route::post('compra/store', [CompraController::class, 'store'])->name('compra.store');
Route::get('compra/{id}/edit', [CompraController::class, 'edit'])->name('compra.edit');
Route::put('compra/{id}', [CompraController::class, 'update'])->name('compra.update');
Route::get('compra/{id}/show', [CompraController::class, 'show'])->name('compra.show');
Route::get('compra/{id}/destroy', [CompraController::class, 'destroy'])->name('compra.destroy');

// ingrediente
Route::get('ingrediente/exportarpdf', [IngredienteController::class, 'exportar_pdf'])->name('ingrediente.exportar_pdf');
Route::get('ingrediente/index', [IngredienteController::class, 'index'])->name('ingrediente.index');
Route::get('ingrediente/create', [IngredienteController::class, 'create'])->name('ingrediente.create');
Route::post('ingrediente/store', [IngredienteController::class, 'store'])->name('ingrediente.store');
Route::get('ingrediente/{id}/edit', [IngredienteController::class, 'edit'])->name('ingrediente.edit');
Route::put('ingrediente/{id}', [IngredienteController::class, 'update'])->name('ingrediente.update');
Route::get('ingrediente/{id}/show', [IngredienteController::class, 'show'])->name('ingrediente.show');
Route::get('ingrediente/{id}/destroy', [IngredienteController::class, 'destroy'])->name('ingrediente.destroy');

// mesa
Route::get('mesa/exportarpdf', [MesaController::class, 'exportar_pdf'])->name('mesa.exportar_pdf');
Route::get('mesa/index', [MesaController::class, 'index'])->name('mesa.index');
Route::get('mesa/create', [MesaController::class, 'create'])->name('mesa.create');
Route::post('mesa/store', [MesaController::class, 'store'])->name('mesa.store');
Route::get('mesa/{id}/edit', [MesaController::class, 'edit'])->name('mesa.edit');
Route::put('mesa/{id}', [MesaController::class, 'update'])->name('mesa.update');
Route::get('mesa/{id}/show', [MesaController::class, 'show'])->name('mesa.show');
Route::get('mesa/{id}/destroy', [MesaController::class, 'destroy'])->name('mesa.destroy');

// pedido
Route::get('pedido/exportarpdf', [PedidoController::class, 'exportar_pdf'])->name('pedido.exportar_pdf');
Route::get('pedido/index', [PedidoController::class, 'index'])->name('pedido.index');
Route::get('pedido/create', [PedidoController::class, 'create'])->name('pedido.create');
Route::post('pedido/store', [PedidoController::class, 'store'])->name('pedido.store');
Route::get('pedido/{id}/edit', [PedidoController::class, 'edit'])->name('pedido.edit');
Route::put('pedido/{id}', [PedidoController::class, 'update'])->name('pedido.update');
Route::get('pedido/{id}/show', [PedidoController::class, 'show'])->name('pedido.show');
Route::get('pedido/{id}/destroy', [PedidoController::class, 'destroy'])->name('pedido.destroy');

// plato
Route::get('plato/exportarpdf', [PlatoController::class, 'exportar_pdf'])->name('plato.exportar_pdf');
Route::get('plato/index', [PlatoController::class, 'index'])->name('plato.index');
Route::get('plato/create', [PlatoController::class, 'create'])->name('plato.create');
Route::post('plato/store', [PlatoController::class, 'store'])->name('plato.store');
Route::get('plato/{id}/edit', [PlatoController::class, 'edit'])->name('plato.edit');
Route::put('plato/{id}', [PlatoController::class, 'update'])->name('plato.update');
Route::get('plato/{id}/show', [PlatoController::class, 'show'])->name('plato.show');
Route::get('plato/{id}/destroy', [PlatoController::class, 'destroy'])->name('plato.destroy');

// privilegio
Route::get('privilegio/index', [PrivilegioController::class, 'index'])->name('privilegio.index');
Route::get('privilegio/create', [PrivilegioController::class, 'create'])->name('privilegio.create');
Route::post('privilegio/store', [PrivilegioController::class, 'store'])->name('privilegio.store');
Route::get('privilegio/{id}/edit', [PrivilegioController::class, 'edit'])->name('privilegio.edit');
Route::put('privilegio/{id}', [PrivilegioController::class, 'update'])->name('privilegio.update');
Route::get('privilegio/{id}/show', [PrivilegioController::class, 'show'])->name('privilegio.show');
Route::get('privilegio/{id}/destroy', [PrivilegioController::class, 'destroy'])->name('privilegio.destroy');

// promocion
Route::get('promocion/index', [PromocionController::class, 'index'])->name('promocion.index');
Route::get('promocion/create', [PromocionController::class, 'create'])->name('promocion.create');
Route::post('promocion/store', [PromocionController::class, 'store'])->name('promocion.store');
Route::get('promocion/{id}/edit', [PromocionController::class, 'edit'])->name('promocion.edit');
Route::put('promocion/{id}', [PromocionController::class, 'update'])->name('promocion.update');
Route::get('promocion/{id}/show', [PromocionController::class, 'show'])->name('promocion.show');
Route::get('promocion/{id}/destroy', [PromocionController::class, 'destroy'])->name('promocion.destroy');

// proveedor
Route::get('proveedor/exportarpdf', [ProveedorController::class, 'exportar_pdf'])->name('proveedor.exportar_pdf');
Route::get('proveedor/index', [ProveedorController::class, 'index'])->name('proveedor.index');
Route::get('proveedor/create', [ProveedorController::class, 'create'])->name('proveedor.create');
Route::post('proveedor/store', [ProveedorController::class, 'store'])->name('proveedor.store');
Route::get('proveedor/{id}/edit', [ProveedorController::class, 'edit'])->name('proveedor.edit');
Route::put('proveedor/{id}', [ProveedorController::class, 'update'])->name('proveedor.update');
Route::get('proveedor/{id}/show', [ProveedorController::class, 'show'])->name('proveedor.show');
Route::get('proveedor/{id}/destroy', [ProveedorController::class, 'destroy'])->name('proveedor.destroy');


// reserva
Route::get('reserva/exportarpdf', [ReservaController::class, 'exportar_pdf'])->name('reserva.exportar_pdf');
Route::get('reserva/index', [ReservaController::class, 'index'])->name('reserva.index');
Route::get('reserva/create', [ReservaController::class, 'create'])->name('reserva.create');
Route::post('reserva/store', [ReservaController::class, 'store'])->name('reserva.store');
Route::get('reserva/{id}/edit', [ReservaController::class, 'edit'])->name('reserva.edit');
Route::put('reserva/{id}', [ReservaController::class, 'update'])->name('reserva.update');
Route::get('reserva/{id}/show', [ReservaController::class, 'show'])->name('reserva.show');
Route::get('reserva/{id}/destroy', [ReservaController::class, 'destroy'])->name('reserva.destroy');


// rol
Route::get('rol/exportarpdf', [RolController::class, 'exportar_pdf'])->name('rol.exportar_pdf');
Route::get('rol/index', [RolController::class, 'index'])->name('rol.index');
Route::get('rol/create', [RolController::class, 'create'])->name('rol.create');
Route::post('rol/store', [RolController::class, 'store'])->name('rol.store');
Route::get('rol/{id}/edit', [RolController::class, 'edit'])->name('rol.edit');
Route::put('rol/{id}', [RolController::class, 'update'])->name('rol.update');
Route::get('rol/{id}/show', [RolController::class, 'show'])->name('rol.show');
Route::get('rol/{id}/destroy', [RolController::class, 'destroy'])->name('rol.destroy');


// usuario
Route::get('usuario/exportarpdf', [UsuarioController::class, 'exportar_pdf'])->name('usuario.exportar_pdf');
Route::get('usuario/index', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('usuario/{id}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::get('usuario/{id}/show', [UsuarioController::class, 'show'])->name('usuario.show');
Route::get('usuario/{id}/destroy', [UsuarioController::class, 'destroy'])->name('usuario.destroy');