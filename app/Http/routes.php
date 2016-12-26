<?php
/**
 * t-appz Lumen Server
 *
 * This package contains lumen framework that allows you to create your own rest api for T-appz
 */
$app->POST('/tappz/api/addresses', 'Address@addAddress');

$app->DELETE('/tappz/api/addresses', 'Address@deleteAddress');

$app->PUT('/tappz/api/addresses', 'Address@updateAddress');

$app->POST('/tappz/api/profile/addBackInStockSubscriptions', 'AddBackInStockSubscriptions@addBackInStockSubscriptions');

$app->POST('/tappz/api/profile/addFavoriteProduct/{productId}', 'AddFavoriteProduct@addFavoriteProduct');

$app->GET('/tappz/api/profile/backInStockSubscriptions', 'BackInStockSubscriptions@getBackInStockSubscriptions');

$app->POST('/tappz/api/basket/{basketId}/pay', 'Pay@purchaseBasketCreditCard');

$app->POST('/tappz/api/basket/{basketId}/payment', 'Payment@setPaymentMethod');

$app->GET('/tappz/api/basket', 'Basket@getBasket');

$app->POST('/tappz/api/basket/{anonymousBasketId}/merge', 'Basket@mergeBasket');

$app->GET('/tappz/api/basket/{basketId}', 'Basket@getBasketById');

$app->POST('/tappz/api/basket/{basketId}/address', 'Basket@selectBasketAddress');

$app->GET('/tappz/api/basket/{basketId}/contract', 'Basket@getContract');

$app->POST('/tappz/api/basket/{basketId}/discount', 'Basket@selectBasketDiscount');

$app->DELETE('/tappz/api/basket/{basketId}/discount/{promoCode}', 'Basket@deleteBasketDiscount');

$app->POST('/tappz/api/basket/{basketId}/giftCheque', 'Basket@selectBasketGiftCheque');

$app->DELETE('/tappz/api/basket/{basketId}/giftCheque/{chequeNumber}', 'Basket@deleteBasketGiftCheque');

$app->POST('/tappz/api/basket/{basketId}/giftWrapping', 'Basket@setGiftWrapping');

$app->POST('/tappz/api/basket/{basketId}/lines', 'Basket@updateBasket');

$app->GET('/tappz/api/basket/{basketId}/payment', 'Basket@getBasketV2Payment');

$app->GET('/tappz/api/basket/{basketId}/shipment', 'Basket@getBasketV2Shippment');

$app->POST('/tappz/api/basket/{basketId}/shipment', 'Basket@setBasketV2Shippment');

$app->DELETE('/tappz/api/basket/{basketId}/userPoints', 'Basket@deleteUserPoints');

$app->POST('/tappz/api/basket/{basketId}/userPoints', 'Basket@setUserPoints');

$app->GET('/tappz/api/categories', 'Category@getCategories');

$app->GET('/tappz/api/category/{categoryId}', 'Category@getCategory');

$app->GET('/tappz/api/profile', 'Customer@getCustomer');

$app->PUT('/tappz/api/profile', 'Customer@updateCustomer');

$app->GET('/tappz/api/profile/favoriteProducts', 'FavoriteProducts@getFavoriteProducts');

$app->POST('/tappz/api/fblogin', 'FbLogin@facebookLogin');

$app->GET('/tappz/api/index', 'Index@getIndex');

$app->GET('/tappz/api/branches', 'Location@getBranches');

$app->GET('/tappz/api/branchescitylist', 'Location@getBranchCities');

$app->GET('/tappz/api/cities/{countryId}', 'Location@getCityList');

$app->GET('/tappz/api/countries', 'Location@getCountryList');

$app->GET('/tappz/api/districts/{cityId}', 'Location@getDistrictList');

$app->GET('/tappz/api/states/{countryId}', 'Location@getStatesList');

$app->GET('/tappz/api/towns/{districtId}', 'Location@getTownList');

$app->POST('/tappz/api/login', 'Login@login');

$app->POST('/tappz/api/passwordRecovery', 'PasswordRecovery@lostPassword');

$app->GET('/tappz/api/product', 'Product@productByBarcode');

$app->GET('/tappz/api/product/{productId}', 'Product@productById');

$app->GET('/tappz/api/product/{productId}/related', 'Product@relatedProducts');

$app->GET('/tappz/api/productSearch', 'ProductSearch@search');

$app->GET('/tappz/api/purchaseOrder', 'PurchaseOrder@getOrderList');

$app->GET('/tappz/api/purchaseOrder/{orderId}', 'PurchaseOrder@getOrderDetail');

$app->POST('/tappz/api/purchaseOrder/{orderId}/address', 'PurchaseOrder@setOrderAddress');

$app->POST('/tappz/api/profile', 'Register@registerCustomer');

$app->POST('/tappz/api/profile/removeBackInStockSubscriptions', 'RemoveBackInStockSubscriptions@removeBackInStockSubscriptions');

$app->POST('/tappz/api/profile/removeFavoriteProduct/{productId}', 'RemoveFavoriteProduct@removeFavoriteProduct');

$app->POST('/tappz/api/store', 'Store@setStore');

$app->GET('/tappz/api/userAgreement', 'UserAgreement@userAgreement');

