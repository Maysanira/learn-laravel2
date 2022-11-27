<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
/**
* Action untuk menampilkan semua kategori */
public function index(){
return "TODO:4 menampilkan semua kategori dari DB";
}
/**
* Action untuk mencari kategori berdasarkan nama */
public function search(Request $request){
return "TODO: menampilkan hasil search berdasarkan nama kategori";
}
/*** Action untuk delete kategori */
public function delete($id){
    return "TODO: menghapus (soft delete) kategori berdasarkan ID";
    }
    /**
    * Action untuk merestore kategori yang telah didelete
    */
    public function restore($id){
    return "TODO: merestore kategori yang statusnya dihapus (soft
    delete)";
    }
    /**
    * Action untuk permanent delete dari database (tidak bisa direstore)
    */
    public function permanentDelete($id){
    return "TODO: hapus secara permanent sebuah kategori dari DB.
    Tidak bisa direstore";
    }

    public function index(){
        $daftar_kategori = \App\Models\category::paginate(3);
        return view("kategori.index", ["daftar_kategori" => $daftar_kategori]);
       
    
    
    }
    }





?>
