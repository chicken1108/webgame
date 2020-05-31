<?php 
 namespace App\Helper;


 /**
  * summary
  */
 class Cart
 {
     /**
      * summary
      */

     public $items;
     
     public function __construct()
     {
          $_SESSION['cart'] = [];
         $this->items = session('cart');
     }
     public function add($data,$quantity = 1){
    	
    	if (isset($this->items[$data['id']])) {
    		$this->items[$data['id']]['quantity'] +=1;
    	}else{
    		$this->items[$data['id']] = $data;
        $this->items[$data['id']]['quantity'] = $quantity;
    	}
    	
      
        session(['cart'=>$this->items]);
    }

      //Xoa san pham
    public function remove_item($id){
       if (isset($this->items[$id])) {
            unset($this->items[$id]);
            session(['cart'=>$this->items]);
            return true;
        }else{
            return false;
        }
    }
    //Update san pham trong gio hang
    public function update_item($id,$quantity){
      $quantity = is_numeric($quantity) ? $quantity : 1;
            $quantity = $quantity > 0 ?$quantity : 1;
       if (isset($this->items[$id])) {
            $this->items[$id]['quantity'] = $quantity;
            session(['cart'=>$this->items]);
            return true;
        }else{
            return false;
        }
    }
    //Xoa toan bo san pham khoi gio hang
    public function clear_cart(){
        session(['cart'=>[]]);
        return true;
    }

    //Tinh tong tien san pham

        public function tongtien()
        {
            $tongtien = 0;   
            if (count($this->items)) {
                foreach ($this->items as $item) {
                  if($item['price_sale'] == 0)
                    {
                      $tongtien = $tongtien +($item['quantity']*$item['price']);
                    }
                    elseif($item['price_sale'] > 0) {
                      $tongtien = $tongtien +($item['quantity']*$item['price_sale']);
                    }

                }
            }
            return $tongtien;
        }

        public function getTotalQuantity()
        {
          $quantity = 0;
          if(session('cart')){
           $quantity = count(session('cart'));
          }
          return $quantity;
        }
        
 }
 


 ?>