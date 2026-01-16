<?php
namespace App\Services\HomePage;

use App\Models\Post;

class HomePageService{
   public function getPosts(): array{
      $image = Post::with('img_Connect')->limit(20)->get();
      return $image->toArray();
   }

 /**  public function searchProduct(string $dataSearch){
     $productFind = Product::with('img_Connect')->where('name', 'LIKE', "%" . $dataSearch . "%")->get();
      return $productFind->toArray();
   }
*/
}
