<?php 
namespace SuitSDK;
use SuitSDK\Config;

class UserRequest extends Config{

	private $Config;
	private $Log;
	protected $restObject;

	/**
    * Class constructor.
	**/
	public function __construct(){
	
		$this->restObject = $this->getRestObj();
		$this->Log = new Log();
	}


	public function getName(){	
	
		echo $this->Config->name;
		echo '<br/>';
		echo $this->Log->log;
	}
	
	/**
	* create CONTACTS in suiteCRM 
	**/
	public function createCustomer($firstname, $lastname, $email, $landline, $mobile, $primaryAddress, $primaryCity, $primaryState, 		$primaryPostalCode, $primaryCountry, $shippingAddress, $shippingCity, $shippingState, $shippingPostalCode, $shippingCountry, $shippingContactNo, $status, $leadSource, $leadTransactionStatus){
		
		$res = $this->restObject->set('Contacts', array(
			'first_name' => $firstname,
			'last_name' => $lastname,
			'email1' => $email,
			'landline_no_c' => $landline,
			'phone_mobile' => $mobile,
			'primary_address_street' => $primaryAddress,
			'primary_address_city' => $primaryCity,
			'primary_address_state' => $primaryState,
			'primary_address_postalcode' => $primaryPostalCode,
			'primary_address_country' => $primaryCountry,
			'alt_address_street' => $shippingAddress,
			'alt_address_city' => $shippingCity,
			'alt_address_state' => $shippingState,
			'alt_address_postalcode' => $shippingPostalCode,
			'alt_address_country' => $shippingCountry,
			'shipping_mobile_no_c' => $shippingContactNo,
			'status_c' => $status,
			'lead_source' => $leadSource,
			'last_transaction_status_c' => $leadTransactionStatus,
			)
		);
	}
	
	/**
	* create ORDERS in suiteCRM 
	**/
	public function createOrder($customer, $invoiceId, $AffilateId, $orderStatus, $orderFrom, $ip, $firstname, $lastname, $email,           $primaryAddress, $primaryCity, $primaryState, $primaryPostalCode, $primaryCountry, $primaryContactNo, $shippingAddress,     	    $shippingCity, $shippingState, $shippingPostalCode, $shippingCountry, $shippingContactNo, $subTotal, $tax, $shippingCharges, 	        $orderTotal, $paymentMethod, $subscription){
		
		$res = $this->restObject->set('o_Order', array(
			'customer_c' => $customer,
			'invoice_id_c' => $invoiceId,
			'affilate_id_c' => $AffilateId,
			'order_status_c' => $orderStatus,
			'order_from_c' => $orderFrom,
			'ip_c' => $ip,
			'first_name' => $firstname,
			'last_name' => $lastname,
			'email1' => $email,
			'primary_address_street' => $primaryAddress,
			'primary_address_city' => $primaryCity,
			'primary_address_state' => $primaryState,
			'primary_address_postalcode' => $primaryPostalCode,
			'primary_address_country' => $primaryCountry,
			'primary_address_contact_c' => $primaryContactNo,
			'alt_address_street' => $shippingAddress,
			'alt_address_city' => $shippingCity,
			'alt_address_state' => $shippingState,
			'alt_address_postalcode' => $shippingPostalCode,
			'alt_address_country' => $shippingCountry,
			'alt_address_contact_c' => $shippingContactNo,
			'subtotal_c' => $subTotal,
			'tax_c' => $tax,
			'shipping_charges_c' => $shippingCharges,
			'order_total_c' => $orderTotal,
			'payment_method_c' => $paymentMethod,
			'subscription_c' => $subscription,
			)
		);
	}
	
	/**
	* create LEADS in suiteCRM 
	**/
	public function createLead($firstname, $lastname, $email, $landline, $mobile, $primaryAddress, $primaryCity, $primaryState, 			$primaryPostalCode, $primaryCountry, $shippingAddress, $shippingCity, $shippingState, $shippingPostalCode, $shippingCountry, $status, $leadSource, $statusDescription, $referedBy, $assignedTo){
		
		$res = $this->restObject->set('Leads', array(
			'first_name' => $firstname,
			'last_name' => $lastname,
			'email1' => $email,
			'landline_no_c' => $landline,
			'phone_mobile' => $mobile,
			'primary_address_street' => $primaryAddress,
			'primary_address_city' => $primaryCity,
			'primary_address_state' => $primaryState,
			'primary_address_postalcode' => $primaryPostalCode,
			'primary_address_country' => $primaryCountry,
			'alt_address_street' => $shippingAddress,
			'alt_address_city' => $shippingCity,
			'alt_address_state' => $shippingState,
			'alt_address_postalcode' => $shippingPostalCode,
			'alt_address_country' => $shippingCountry,
			'status' => $status,
			'lead_source' => $leadSource,
			'status_description' => $statusDescription,
			'refered_by' => $referedBy,
			'assigned_user_name' => $assignedTo,
			)
		);
	}
	
	
	/**
	* creates PRODUCTS in suiteCRM 
	**/
	public function createProduct($productName, $sku, $categoryName, $description, $quantity, $subtrackStock, $cost, $price, $salePrice, $modelId, $weight, $size, $status, $metaTitle){
		
		$res = $this->restObject->set('AOS_Products', array(
			'name' => $productName,
			'sku_c' => $sku,
			'aos_product_category_name' => $categoryName,
			'description' => $description,
			'quantity_c' => $quantity,
			'subtrack_stock_c' => $subtrackStock,
			'cost' => $cost,
			'price' => $price,
			'sale_price_c' => $salePrice,
			'model_id_c' => $modelId,
			'weight_c' => $weight,
			'size_c' => $size,
			'status_c' => $status,
			'meta_title_c' => $metaTitle,
			)
		);
	}
	
	/** 
	* create PRODUCT CATEGORIES in suiteCRM 
	**/
	public function createProductCategory($name, $slug, $status, $description){
		
		$res = $this->restObject->set('AOS_Product_Categories', array(
			'name' => $name,
			'slug_c' => $slug,
			'status_c' => $status,
			'description' => $description,
			)
		);
	}
	
	/**
	* creates PLANS in suiteCRM 
	**/
	public function createPlan($name, $productId, $description, $shipping, $salePrice, $regularPrice, $forced, $cycle, $frequency, $metaTitle, $status, $offerAllowed, $offer){
		
		$res = $this->restObject->set('p_Plans', array(
			'name' => $name,
			'product_id_c' => $productId,
			'description' => $description,
			'shipping_c' => $shipping,
			'sale_price_c' => $salePrice,
			'regular_price_c' => $regularPrice,
			'forced_c' => $forced,
			'cycle_c' => $cycle,
			'frequency_c' => $frequency,
			'meta_title_c' => $metaTitle,
			'status_c' => $status,
			'offer_allow_c' => $offerAllowed,
			'offer_c' => $offer,
			)
		);
	}	
}

