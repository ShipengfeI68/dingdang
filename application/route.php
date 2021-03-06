<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
/* 摇一摇 */
Route::get('api/:version/access_to_food','api/:version.Food/accessToFood');//获取食物
Route::get('api/:version/food_detail/:id','api/:version.Food/foodDetail');//食物详情
Route::post('api/:version/collect','api/:version.Food/collect');// 加入/取消 收藏
/* 分类 */
Route::get('api/:version/all_food_category','api/:version.Category/getAllFoodCate');
Route::post('api/:version/search','api/:version.Food/searchFood');

/* 食材 */
Route::post('api/:version/get_all_mates_index','api/:version.FoodMate/getFoodMateIndex'); //获取食材首页分类和推荐
Route::post('api/:version/get_foodmates','api/:version.FoodMate/getFoodMates'); //获取食材首页全部商品
Route::post('api/:version/get_mates_by_CID','api/:version.Category/getMateByCateID');
Route::get('api/:version/get_FM_detail/:id','api/:version.FoodMate/getFoodMateDetail'); //食材详情

/* 用户 */
Route::get('api/:version/token/user','api/:version.Token/getToken'); //用户登录
Route::get('api/:version/my_collect','api/:version.Food/myCollect'); // 我的收藏
Route::post('api/:version/del_collect/:id','api/:version.Food/delMyCollect'); // 删除我的收藏
Route::post('api/:version/is_shop','api/:version.User/isShop'); //是否为商户
Route::get('api/:version/store_fm/:id','api/:version.MateStore/storeFoodMates'); //获取商户食材

/* 购物车 */
Route::post('api/:version/add_cart','api/:version.Cart/addOrUpdCart'); // 加入或修改购物车商品
Route::post('api/:version/my_cart','api/:version.Cart/myCartList'); // 我的购物车列表
Route::post('api/:version/del_cart','api/:version.Cart/delCart'); //删除购物车商品
Route::post('api/:version/s_a','api/:version.Cart/settleAccounts'); //去结算
Route::post('api/:version/is_selected','api/:version.Cart/isSelected'); //购物车商品维持选中状态

/* 地址管理，店铺入驻 */
Route::post('api/:version/shop_in','api/:version.MateStore/shopsIn'); //店铺入驻
Route::post('api/:version/my_address','api/:version.User/getMyAddress'); //获取我的地址
Route::post('api/:version/upd_default/:id','api/:version.User/updDefault'); //更新我的默认地址

