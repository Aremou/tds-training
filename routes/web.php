<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SitePublicController;
use App\Http\Controllers\SessionOuverteController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\FormationAdminController;
use App\Http\Controllers\Admin\SessionOuverteAdminController;
use App\Http\Controllers\Admin\CategorieFormationAdminController;
use App\Http\Controllers\Admin\InscriptionSessionOuverteController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [SitePublicController::class, 'index'])->name('root_accueil_site');

Route::get('/formations', [SitePublicController::class, 'formations'])->name('root_formations');

Route::get('/formations/{categorie}/{formation}', [SitePublicController::class, 'detail_formations'])->name('root_detail_formations');

Route::get('/devis', [SitePublicController::class, 'devis'])->name('root_devis');

Route::get('/devis/{formation}', [SitePublicController::class, 'devis_formation'])->name('root_devis_formation');

Route::post('/devis/envoyer', [FormationController::class, 'send_devis_formation'])->name('root_send_devis_formation');

Route::get('/demande-de-delocalisation', [SitePublicController::class, 'delocalisation'])->name('root_delocalisation');

Route::get('/session-ouverte', [SessionOuverteController::class, 'index'])->name('root_index_session_ouverte');

Route::get('/session-ouverte/{id}/{formation}', [SessionOuverteController::class, 'show'])->name('root_show_session_ouverte');

Route::get('/session-ouverte/{id}/{formation}/inscription', [SessionOuverteController::class, 'create_inscription'])->name('root_create_inscription_session_ouverte');

Route::post('/session-ouverte/{id}/{formation}/inscription/store', [InscriptionSessionOuverteController::class, 'store_inscription'])->name('root_store_inscription_session_ouverte');

Route::get('/contact', [ContactController::class, 'contact'])->name('root_contact');

Route::post('/contact', [ContactController::class, 'send_message'])->name('root_contact_send_message');

Route::post('/newsletter', [NewsletterController::class, 'create'])->name('root_create_newsletter');



Route::middleware('auth')->group(function () {
    Route::get('/verif-access', function () {
        return view('verif-access');
    })->name('verif-access');

    Route::get('/tableau-de-bord', [HomeAdminController::class, 'index'])->name('root_admin_tableau_de_bord');

    Route::get('/tableau-de-bord/formations', [FormationAdminController::class, 'index'])->name('root_admin_index_formation');

    Route::get('/tableau-de-bord/formations/ajouter/', [FormationAdminController::class, 'create'])->name('root_admin_create_formation');

    Route::get('/tableau-de-bord/formations/{id}', [FormationAdminController::class, 'show'])->name('root_admin_show_formation');

    Route::post('/tableau-de-bord/formations/store', [FormationAdminController::class, 'store'])->name('root_admin_store_formation');

    Route::get('/tableau-de-bord/formations/{id}/modifier', [FormationAdminController::class, 'edit'])->name('root_admin_edit_formation');

    Route::put('/tableau-de-bord/formations/{id}/update', [FormationAdminController::class, 'update'])->name('root_admin_update_formation');

    Route::delete('/tableau-de-bord/formations/{id}/supprimer', [FormationAdminController::class, 'delete'])->name('root_admin_delete_formation');

    Route::resource('/tableau-de-bord/categories-formations', CategorieFormationAdminController::class);

    Route::get('/tableau-de-bord/newsletter', [NewsletterController::class, 'index'])->name('root_admin_index_newsletter');

    Route::post('/tableau-de-bord/newsletter/bloquer', [NewsletterController::class, 'bloquer'])->name('root_admin_bloquer_newsletter');

    Route::post('/tableau-de-bord/newsletter/debloquer', [NewsletterController::class, 'debloquer'])->name('root_admin_debloquer_newsletter');

    Route::delete('/tableau-de-bord/newsletter/{id}/supprimer', [NewsletterController::class, 'delete'])->name('root_admin_delete_newsletter');

    Route::get('/tableau-de-bord/sessions-ouvertes', [SessionOuverteAdminController::class, 'index'])->name('root_admin_index_session_ouverte');

    Route::get('/tableau-de-bord/sessions-ouvertes/create', [SessionOuverteAdminController::class, 'create'])->name('root_admin_create_session_ouverte');

    Route::post('/tableau-de-bord/sessions-ouvertes/store', [SessionOuverteAdminController::class, 'store'])->name('root_admin_store_session_ouverte');

    Route::get('/tableau-de-bord/sessions-ouvertes/{id}', [SessionOuverteAdminController::class, 'show'])->name('root_admin_show_session_ouverte');

    Route::get('/tableau-de-bord/sessions-ouvertes/{id}/edit', [SessionOuverteAdminController::class, 'edit'])->name('root_admin_edit_session_ouverte');

    Route::put('/tableau-de-bord/sessions-ouvertes/{id}/update', [SessionOuverteAdminController::class, 'update'])->name('root_admin_update_session_ouverte');

    Route::delete('/tableau-de-bord/sessions-ouvertes/{id}/delete', [SessionOuverteAdminController::class, 'delete'])->name('root_admin_delete_session_ouverte');

    Route::get('/tableau-de-bord/sessions-ouvertes/{id}/inscrits', [InscriptionSessionOuverteController::class, 'inscrit_session'])->name('root_admin_inscrit_session_ouverte');

    Route::post('/tableau-de-bord/sessions-ouvertes/{id}/cloturer', [InscriptionSessionOuverteController::class, 'cloturer_session'])->name('root_admin_cloturer_session_ouverte');


});
