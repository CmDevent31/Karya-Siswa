<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DkvController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TjktController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\AnimasiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TimKamiController;
use App\Http\Controllers\FAQSHelpController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\NormatifController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PrestasiAController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\KaryaSiswaController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\PageNotFoundController;
use App\Http\Controllers\PembelajaranController;
use App\Http\Controllers\GaleriSekolahController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\SettingAvatarController;
use App\Http\Controllers\SettingProfileController;
use App\Http\Controllers\TermsConditionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', [HomeController::class, 'index']);
Route::get('/TentangKami', [TentangKamiController::class, 'index']);
Route::get('/Pembelajaran', [PembelajaranController::class, 'index']);  
Route::get('/TimKami', [TimKamiController::class, 'index']);
Route::get('/Kontak', [KontakController::class, 'index']);
Route::get('/PageNotFound', [PageNotFoundController::class, 'index']);
Route::get('/Login', [LoginController ::class, 'index']);
Route::get('/Registrasi', [RegistrasiController ::class, 'index']);
Route::get('/Guru', [GuruController ::class, 'index']);
Route::get('/Prestasi', [PrestasiController ::class, 'index']);
Route::get('/GaleriSekolah', [GaleriSekolahController ::class, 'index']);
Route::get('/KaryaSiswa', [KaryaSiswaController ::class, 'index']);
Route::get('/PrivacyPolicy', [PrivacyPolicyController ::class, 'index']);
Route::get('/TermsCondition', [TermsConditionController ::class, 'index']);
Route::get('/FaqsHelp', [FAQSHelpController ::class, 'index']);
Route::get('/Quotes', [QuotesController ::class, 'index']);
Route::get('/Tjkt', [TjktController ::class, 'index']);
Route::get('/Dkv', [DkvController ::class, 'index']);
Route::get('/Animasi', [AnimasiController ::class, 'index']);
Route::get('/Keahlian', [KeahlianController ::class, 'index']);
Route::get('/Normatif', [NormatifController ::class, 'index']);
Route::get('/MyProfile', [MyProfileController ::class, 'index']);
Route::get('/Inbox', [InboxController ::class, 'index']);
Route::get('/Setting', [SettingController ::class, 'index']);
Route::get('/SettingAvatar', [SettingAvatarController ::class, 'index']);
Route::get('/EditProfile', [EditProfileController ::class, 'index']);
Route::get('/EditPassword', [EditPasswordController ::class, 'index']);
Route::get('/SettingProfile', [SettingProfileController ::class, 'index']);
Route::get('/Product', [ProductController ::class, 'index']);
Route::get('/Input', [InputController ::class, 'index']);


Route::get('/Ekskul', [EkskulController::class, 'index']);
Route::get('/PageNotFound', [PageNotFoundController::class, 'index']);



