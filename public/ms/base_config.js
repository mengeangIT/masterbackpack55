var BASE_URL = "https://www.mkrestaurant.com";
var CKEDITOR_UPLOAD_IMAGE_URL = "https://www.mkrestaurant.com/admin/ckeditor/upload/image";
var ABOUT_CONTACT_SUBMIT_URL = "https://www.mkrestaurant.com/contact/submit";
var CAREER_URL  = "https://www.mkrestaurant.com/career";
var FEEDBACK_SUBMIT_URL = "https://www.mkrestaurant.com/feedback/submit";

var SERVER_TIME = 1484474063*1000;

var SERVER_TIME_DIFF = new Date().getTime() - SERVER_TIME;

var CURRENT_LOCAL = "en";

var PROFILE_PAGE_URL = "https://www.mkrestaurant.com/profile";

var CAREER_SUBMIT_URL = "https://www.mkrestaurant.com/career/submit";

var NEWSLETTER_SUBMIT_URL = "https://www.mkrestaurant.com/newsletter/submit";

var YOUR_ORDER_DETAIL_URL = "https://www.mkrestaurant.com/yourorder/detail/:id";

var MARKER_BUFFET = "https://www.mkrestaurant.com/img/markers/buffet_mk.png";
var MARKER_GOLD_BUFFET = "https://www.mkrestaurant.com/img/markers/gold_buffet_mk.png";
var MARKER_GOLD = "https://www.mkrestaurant.com/img/markers/gold_mk.png";
var MARKER_NORMAL = "https://www.mkrestaurant.com/img/markers/normal.png";

var API_BRANCHES_LISTS_URL = "https://www.mkrestaurant.com/api/1.0/branches.json";
var API_MENU_LISTS_URL_1 = "https://www.mkrestaurant.com/en/menu/ajax/1";
var API_MENU_LISTS_URL_2 = "https://www.mkrestaurant.com/en/menu/ajax/2";
var API_MENU_LISTS_URL_3 = "https://www.mkrestaurant.com/en/menu/ajax/3";
var API_MENU_LISTS_URL_4 = "https://www.mkrestaurant.com/en/menu/ajax/4";
var API_MENU_LISTS_URL_5 = "https://www.mkrestaurant.com/en/menu/ajax/5";
var API_MENU_LISTS_URL_6 = "https://www.mkrestaurant.com/en/menu/ajax/6";
var API_MENU_LISTS_URL_7 = "https://www.mkrestaurant.com/en/menu/ajax/7";
var API_MENU_LISTS_URL_8 = "https://www.mkrestaurant.com/en/menu/ajax/8";

var API_DELIVERY_LISTS_URL_1 = "https://www.mkrestaurant.com/en/delivery/ajax/1";
var API_DELIVERY_LISTS_URL_2 = "https://www.mkrestaurant.com/en/delivery/ajax/2";
var API_DELIVERY_LISTS_URL_3 = "https://www.mkrestaurant.com/en/delivery/ajax/3";
var API_DELIVERY_LISTS_URL_4 = "https://www.mkrestaurant.com/en/delivery/ajax/4";
var API_DELIVERY_LISTS_URL_5 = "https://www.mkrestaurant.com/en/delivery/ajax/5";
var API_DELIVERY_LISTS_URL_6 = "https://www.mkrestaurant.com/en/delivery/ajax/6";
var API_DELIVERY_LISTS_URL_7 = "https://www.mkrestaurant.com/en/delivery/ajax/7";
var API_DELIVERY_LISTS_URL_8 = "https://www.mkrestaurant.com/en/delivery/ajax/8";
var API_DELIVERY_LISTS_URL_9 = "https://www.mkrestaurant.com/en/delivery/ajax/9";

var REGISTER_SUBMIT_URL = "https://www.mkrestaurant.com/customer/register/submit";
var REGISTER_CHECKEMAIL = "https://www.mkrestaurant.com/customer/register/checkemail";
var REGISTER_RESEND_MAIL_API = "https://www.mkrestaurant.com/customer/register/resendmail";
var REGISTER_RESEND_MAIL_BYEMAIL_API = "https://www.mkrestaurant.com/customer/register/resendmail/byemail";
var CHECKOUT_URL = "https://www.mkrestaurant.com/checkout";
var PRODUCT_TIER_DISCOUNT_URL = "https://www.mkrestaurant.com/product_tier_discount";


var API_AUMPHER_IN_PROVINCE = "https://www.mkrestaurant.com/api/1.0/aumpher/in/province/:id.json";
var API_THUMBOL_IN_AUMPHER = "https://www.mkrestaurant.com/api/1.0/thumbol/in/aumpher/:id.json";


var API_CHANGE_PASSWORD = "https://www.mkrestaurant.com/customer/changepassword/submit";
var API_SAVE_PROFILE = "https://www.mkrestaurant.com/customer/saveprofile/submit";

var API_FORGETPASSWORDCHECKEMAIL = "https://www.mkrestaurant.com/customer/forgetpasswordcheckemail";
var API_FORGETPASSWORDGETPASSWORD = "https://www.mkrestaurant.com/customer/forgetpasswordgetpassword/submit";
var API_SAVEADDRESS = "https://www.mkrestaurant.com/customer/saveaddress/submit";
var API_DELETEADDRESS = "https://www.mkrestaurant.com/customer/deleteaddress/submit";


var API_CART_LIST = "https://www.mkrestaurant.com/api/1.0/cart/list-cart";
var API_CART_ADD_ITEM = "https://www.mkrestaurant.com/api/1.0/cart/add-cart-item";
var API_CART_DELETE_ITEM = "https://www.mkrestaurant.com/api/1.0/cart/delete-cart-item";
var API_CART_UPDATE_ITEM = "https://www.mkrestaurant.com/api/1.0/cart/update-qty-cart-item";
var API_CART_EMPTY = "https://www.mkrestaurant.com/api/1.0/cart/empty-cart";
var API_CART_USEPOINT = "https://www.mkrestaurant.com/api/1.0/cart/use-points";
var API_CART_USECOUPON = "https://www.mkrestaurant.com/api/1.0/cart/use-discount-code";


var API_RECOMMENDED_IN_CHECKOUT = "https://www.mkrestaurant.com/ajax/recommended_in_checkout";
var API_RECOMMENDED_IN_DELIVERY =  "https://www.mkrestaurant.com/ajax/recommended_in_delivery";
var API_FAVORITE_MENU_IN_DELIVERY =  "https://www.mkrestaurant.com/ajax/favorite_menu_in_delivery";
var API_CART_CONFRIM_CHECKOUT = "https://www.mkrestaurant.com/ajax/confirm/checkout";


var BIG_LOADING_URL = "https://www.mkrestaurant.com/img/ajax-loader-big.gif";

LOGIN = {};
LOGIN.IS_LOGIN = false;
LOGIN.ID = null;


var LANG = {};
LANG.ADDRESS = {};
LANG.ADDRESS.COMMA = ", ";
LANG.ADDRESS.FLOOR = "Floor";
LANG.ADDRESS.ROOM = "Room";
LANG.ADDRESS.SOI = "Soi";
LANG.ADDRESS.ROAD = "Road";
LANG.ADDRESS.MOO = "Moo";
LANG.ADDRESS.THUMBOL = "Thumbol";
LANG.ADDRESS.AUMPHER = "Aumpher";
LANG.ADDRESS.PROVINCE = "Province";
LANG.ADDRESS.ZIPCODE = "Zipcode";
LANG.ADDRESS.SELECTTHUMBOL = "Select Thumbol ";
LANG.ADDRESS.SELECTAUMPHER = "Select Aumpher ";
LANG.ADDRESS.SELECTPROVINCE = "Select Province ";
LANG.ADDRESS.CONTACTPERSON = "Contact Person";
LANG.ADDRESS.LOCATIONTYPE = "Select Location Type";
LANG.ADDRESS.BUILDING = "Buiding/Village";
LANG.ADDRESS.ADDRESS = "Address";
LANG.ADDRESS.DIRECTIONGUIDE = "Direction guide ";


LANG.CHECKOUT = {};
LANG.CHECKOUT.PLEASESELECTADDRESS = "Please select address";
LANG.CHECKOUT.QTY = "Qty.";
LANG.CHECKOUT.BAHT = "THB";
LANG.CHECKOUT.BAHT_S = "&#3647;";
LANG.CHECKOUT.DELETE = "Delete";
LANG.CHECKOUT.NO_ADDED_ITEM_IN_YOUR_CART = "No added item in your cart.";
LANG.CHECKOUT.NO_RECOMMENDED_MENU_ITEMS = "No recommended menu items.";

LANG.PROFILE = {};
LANG.PROFILE.UPDATE_PROFILE_SUCCESS = "Update profile success.";
LANG.PROFILE.SEND_EMAIL_SUCCESS = "Send email success.";

LANG.DATETIMEPICKER = {};
LANG.DATETIMEPICKER.SHORTDAYNAMES = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
LANG.DATETIMEPICKER.FULLDAYNAMES = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
LANG.DATETIMEPICKER.SHORTMONTHNAMES = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
LANG.DATETIMEPICKER.FULLMONTHNAMES = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
LANG.DATETIMEPICKER.TITLECONTENTDATETIME = "Set Date & Time";
LANG.DATETIMEPICKER.SETBUTTONCONTENT = "Set";
LANG.DATETIMEPICKER.CLEARBUTTONCONTENT = "Clear";
if(CURRENT_LOCAL == 'th'){
    LANG.DATETIMEPICKER.SHORTDAYNAMES = ["อา.","จ.","อ.","พ.","พฤ.","ศ.","ส."];
    LANG.DATETIMEPICKER.FULLDAYNAMES = ["อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์"];
    LANG.DATETIMEPICKER.SHORTMONTHNAMES = ["ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.", "ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค."];
    LANG.DATETIMEPICKER.FULLMONTHNAMES = ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
    LANG.DATETIMEPICKER.TITLECONTENTDATETIME = "เลือกวันและเวลา";
    LANG.DATETIMEPICKER.SETBUTTONCONTENT = "เลือก";
    LANG.DATETIMEPICKER.CLEARBUTTONCONTENT = "ลบ";
}

LANG.BROWSER_SUPPORT = "Your browser does not support online ordering. Please update your version.";

SETTING = {};
SETTING.BUSINESS_HOURS_FROM = "09:45:00";
SETTING.BUSINESS_HOURS_TO = "21:00:00";
SETTING.ESTIMATE_DELIVERY_TIME = "60";
SETTING.LIMIT_DELIVERY_MONTH = "2";
SETTING.MINIMUM_SUBTOTAL = 150;


LANG.VALIDATE = {};
LANG.VALIDATE.EMAIL_REQUIRE = "Please enter email";
LANG.VALIDATE.EMAIL_INVALID = "Email is invalid. Please enter correct email";
LANG.VALIDATE.PHONE_REQUIRE = "Please enter phone number";
LANG.VALIDATE.FIRST_ZERO = "Please enter 0 first digit number (02, 06, 08, 09)";
LANG.VALIDATE.MOBILEPHONE = "Mobile phone number please enter 10 digit number";
LANG.VALIDATE.HOMEPHONE = "Home phone number please enter 9 digit number";
LANG.VALIDATE.PHONE_INVALID = "Email is invalid. Phone number must contain 10 digit number";
LANG.VALIDATE.PASSWORD_REQUIRE = "Please enter password";
LANG.VALIDATE.CONFIRM_PASSWORD_REQUIRE = "Please enter confirm password";
LANG.VALIDATE.CONFIRM_PASSWORD_INVALID = "Confirm password don't match";
LANG.VALIDATE.OLD_PASSWORD_REQUIRE = "Please enter old password";
LANG.VALIDATE.OLD_PASSWORD_INVALID = "Old password is invalid. Please enter correct old password.";
LANG.VALIDATE.NEW_PASSWORD_REQUIRE = "Please enter new password";
LANG.VALIDATE.NAME_REQUIRE = "Please enter name";
LANG.VALIDATE.SURNAME_REQUIRE = "Please enter surname";
LANG.VALIDATE.BIRTHDAY_REQUIRE = "Please enter birthday";
LANG.VALIDATE.BIRTHDAY_INVALID = "Birthday is invalid. Please enter correct birthday";
LANG.VALIDATE.PROVINCE_REQUIRE = "Please enter province";
LANG.VALIDATE.AUMPHER_REQUIRE = "Please enter aumpher";
LANG.VALIDATE.THUMBOL_REQUIRE = "Please enter thumbol";
LANG.VALIDATE.ROAD_REQUIRE = "Please enter road";
LANG.VALIDATE.ZIPCODE_REQUIRE = "Please enter Zipcode";
LANG.VALIDATE.ZIPCODE_INVALID = "Zipcode must contain 5 digit number";
LANG.VALIDATE.LOCATION_REQUIRE = "Please enter location type";
LANG.VALIDATE.ADDRESS_NUMBER_REQUIRE = "Please enter address number";
LANG.VALIDATE.ADDRESS_NAME_REQUIRE = "Please enter address name";
LANG.VALIDATE.DIRECTION_GUIDE_REQUIRE = "Please enter direction guide";
LANG.VALIDATE.CONTACT_PERSON_REQUIRE = "Please enter contact person";
LANG.VALIDATE.PROMOTION_CODE_REQUIRE = "Code not found.";
LANG.VALIDATE.USE_POINT_REQUIRE = "You have exceeded your point limit";
LANG.VALIDATE.NOT_POINT_REQUIRE = "Not enough point";
LANG.VALIDATE.NAME_SURNAME_REQUIRE = "Please enter name - surname";
LANG.VALIDATE.SUBJECT_REQUIRE = "Please select subject";
LANG.VALIDATE.MESSAGE_REQUIRE = "Please enter message";
LANG.VALIDATE.CAPTCHA_REQUIRE = "Please enter Captcha";
LANG.VALIDATE.CAPTCHA_INVALID = "Captcha is incorrect. Please try again.";
LANG.VALIDATE.ID_CARD_REQUIRE = "Please enter ID card";
LANG.VALIDATE.SALARY_REQUIRE = "Please enter expected salary";
LANG.VALIDATE.OTHER_AMOUNT_REQUIRE = "Please fill your preferred payment amount.";
LANG.VALIDATE.OTHER_AMOUNT_INVALID = "Your preferred payment amount must be equal or more than :amount THB.";
LANG.VALIDATE.ACCEPT_AGREEMENT = "Please accept Terms & Agreement.";
LANG.VALIDATE.MINIMUN_ORDER = "Minimum order is :amount Baht.";
LANG.VALIDATE.TAXRECEIPT_REQUIRE = "Please enter Tax Receipt";
