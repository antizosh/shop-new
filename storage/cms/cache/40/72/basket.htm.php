<?php 
class Cms5821d43a36b3a197161385_2433061046Class extends \Cms\Classes\PageCode
{
public function onStart(){
    $shop = Shop::get();
    $array =[];
    $total = 0;
    foreach($shop as $Shop){
        $id =$shop->id;
        if (Session::has('pizza'.$id)){
            $price = $shop->price;
            $title = $shop->title;
            $quantity = Session::get('shop'.$id,0);
            
            $total += $quantity*$price;
        array_push($array, compact('title','price', 'id', 'quantity'));
        }
    
    }
    $this['total'] = $total;
    $this['pizzas'] = $array;
   


}
public function onSend (){
    $name = post('name');
    $phone = post ('phone');
    $address = post ('address');
    $order = post ('order');
    
    $vars = compact('name', 'pnone', 'address', 'order');
    
    Mail::send('new.order', $vars, function($message) {
        $message->to("antizosh.matador@gmail.com");
    
    });
    
    

}
public function onFlush() {
    
    $Session::flush();
}
