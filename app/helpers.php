<?php 

use Carbon\Carbon;
use App\Models\User;
use App\Models\Fleet;
use App\Models\Driver;
use GuzzleHttp\Client;
use App\Lib\FileManager;
use App\Models\Amenitie;
use App\Models\Customer;
use ClickSend\Api\SMSApi;
use App\Models\CreditCard;
use App\Models\StaticPage;
use Illuminate\Support\Str;
use ClickSend\Configuration;
use ClickSend\Model\SmsMessage;
use App\Models\ApplicationSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use ClickSend\Model\SmsMessageCollection;

function dateFormat($dateString){
    $timestamp = strtotime($dateString);
    $formattedDate = date('d F Y', $timestamp);
    return $formattedDate;
}

function fileUploader($file, $location, $size = null, $old = null, $thumb = null)
{
    $fileManager = new FileManager($file);
    $fileManager->path = $location;
    $fileManager->size = $size;
    $fileManager->old = $old;
    $fileManager->thumb = $thumb;
    $fileManager->upload();
    return $fileManager->filename;
}

function fileManager()
{
    return new FileManager();
}

function getFilePath($key)
{
    return fileManager()->$key()->path;
}

function getFileSize($key)
{
    return fileManager()->$key()->size;
}

function getFileExt($key)
{
    return fileManager()->$key()->extensions;
}

function gs(){
    $setting = ApplicationSetting::latest()->first();
    return $setting;
}

function allTimeZones()
{
    $datetime = new \DateTimeZone('EDT');

    $timezones = $datetime->listIdentifiers();
    $timezone_list = [];
    foreach ($timezones as $timezone) {
        $timezone_list[$timezone] = $timezone;
    }

    return $timezone_list;
}


function sendEmail($to, $subject, $view, $data = []) {
    Mail::send($view, $data, function ($message) use ($to, $subject) {
        $message->to($to)
            ->subject($subject);
    });
}

function getUserDetail(){
    $user           = User::where('id', Auth::user()->id)->first();
    return $user;
}

function calculatePercentage($number, $percentage)
{
    $percentage = max(0, min(100, $percentage));
    $result = ($percentage / 100) * $number;
    return $result;
    
}

if (!function_exists('getCustomerInfo')) {
    function getCustomerInfo($customer_id)
    {
        $customer = Customer::where('user_id',$customer_id)->first();
        return $customer;
    }
}

if (!function_exists('getDriverInfo')) {
    function getDriverInfo($id)
    {
        $driver = Driver::where('user_id',$id)->first();
        return $driver;
    }
}


function getPaginate($paginate = 20)
{
    return $paginate;
}

function urlPath($routeName, $routeParam = null)
{
    if ($routeParam == null) {
        $url = route($routeName);
    } else {
        $url = route($routeName, $routeParam);
    }
    $basePath = route('customer-dashboard');
    $path = str_replace($basePath, '', $url);
    return $path;
}

function slug($string)
{
    return Illuminate\Support\Str::slug($string);
}

function strLimit($title = null, $length = 10)
{
    return Str::limit($title, $length);
}

function diffForHumans($date)
{
    $lang = session()->get('lang');
    Carbon::setlocale($lang);
    return Carbon::parse($date)->diffForHumans();
}

function showDateTime($date, $format = 'Y-m-d h:i A')
{
    $lang = session()->get('lang');
    Carbon::setlocale($lang);
    return Carbon::parse($date)->translatedFormat($format);
}

function getDaysFromDate($from, $to){
    $date1 = new DateTime($from);
    $date2 = new DateTime($to);
    $interval = $date1->diff($date2);
    return $interval->format('%a');
}

function getVhicleInformation($driver_id){

    $transport = Driver::with('driver_transport_detail')->where('id', $driver_id)->first();
    return $transport;
}

function allServices(){
    return [
        'From Airport', 
        'To Airport', 
        'Point-to-Point', 
        'Hourly/As Directed', 
        'Weddings', 
        'Private Tour'
    ];
}

function allAirports(){
    return [
        'Melbourne Int  Airport', 
        'Melbourne Domestic Airport', 
        'Avalon Airport'
    ];
}

function allPrivateTours(){
    return [
        '1' => 'Great Ocean Full Day Tour',
        '2' => 'Phillip Island Tour', 
        '3' => 'Yarra Valley Winery Tour',
        '4' => 'Mornington Peninsula Tour',
        '5' => 'Puffing Billy Tour',
        '6' => 'Snow & SKI Tour',
        '7' => 'Melbourne Sightseeing Tour',
        '8' => 'Sovereign Hill and Ballarat Tour',
    ];
}

if (!function_exists('limit_words')) {
    function limit_words($string, $limit = 20, $ellipsis = '...') {
        $words = explode(' ', $string);

        if (count($words) <= $limit) {
            return $string;
        }

        return implode(' ', array_slice($words, 0, $limit)) . $ellipsis;
    }
}


function convertToUsername($name) {
    // Convert to lowercase
    $username = strtolower($name);
    // Replace spaces with underscores
    $username = str_replace(' ', '_', $username);
    return $username;
}


function getPageSections($arr = false)
{
    $jsonUrl = resource_path('views/') . 'sections.json';
    $sections = json_decode(file_get_contents($jsonUrl));
    if ($arr) {
        $sections = json_decode(file_get_contents($jsonUrl), true);
        // ksort($sections);
    }
    return $sections;
}

function keyToTitle($text)
{
    return ucfirst(preg_replace("/[^A-Za-z0-9 ]/", ' ', $text));
}

function getImage($image, $size = null)
{
    $clean = '';
    if (file_exists($image) && is_file($image)) {
        return asset($image) . $clean;
    }

    return asset('assets/images/default.png');
}

function generateRandomNumber() {
    // Use microtime to get microseconds and mt_rand for additional randomness
    $microtime = microtime();
    list($usec, $sec) = explode(' ', $microtime);
    $seed = (int) ($sec + $usec * 1000000);
    mt_srand($seed);

    // Use uniqid to generate a unique identifier
    $uniqueId = uniqid(mt_rand(), true);

    // Extract only the alphanumeric characters and limit to 8 characters
    $randomNumber = substr(preg_replace('/[^a-zA-Z0-9]/', '', $uniqueId), 0, 8);

    return $randomNumber;
}

function getAmenitie($id){
    $amenitie = Amenitie::find($id);
    return $amenitie->name;
}

function getFleet($id){
    $fleet = Fleet::find($id);
    return $fleet->name;
}

function calculateTax($amnt, $tax)
{
    $totalTax = $amnt * ($tax / 100);
    return $totalTax;
}

function getCards(){
    if(auth()->user()){
        $cards = CreditCard::where('user_id', auth()->user()->id)->get();
    }else{
        $cards = [];
    }
    return $cards;
}

function getYear(){
    $currentYear = date('Y');

    // Array to store the next 10 years
    $next10Years = [];

    // Generate the next 10 years
    for ($i = 0; $i <= 10; $i++) {
        $nextYear = $currentYear + $i;
        $next10Years[] = $nextYear;
    }

    return $next10Years;
}

function getCustomerSMS(){
    $txt = "Hi Brian Rake, Thank you for choosing Melbourne Limolink. Your booking is CONFIRMED. Any Assistance pls call or sms on +61433185032 Travel Safe";
}

function getSubuRB(){
    $data = [
        "Abbotsford", "Aberfeldie", "Airport West", "Albanvale", "Albert Park", "Albion", "Alphington", "Altona Meadows", "Altona North", "Altona", 
        "Ardeer", "Armadale", "Arthurs Seat", "Ascot Vale", "Ashburton", "Ashwood", "Aspendale", "Aspendale Gardens", "Attwood", "Auburn", 
        "Aurora", "Avondale Heights", "Avonsleigh", "Balaclava", "Balwyn", "Balwyn North", "Bangholme", "Baxter", "Bayswater", "Bayswater North", 
        "Beaconsfield", "Beaumaris", "Belgrave", "Belgrave Heights", "Belgrave South", "Bellfield", "Bennettswood", "Bentleigh", "Bentleigh East", 
        "Berwick", "Bittern", "Black Rock", "Blackburn", "Blackburn North", "Blackburn South", "Blairgowrie", "Bonbeach", "Boronia", "Box Hill", 
        "Box Hill North", "Box Hill South", "Braeside", "Braybrook", "Briar Hill", "Brighton", "Brighton East", "Broadmeadows", "Brookfield", 
        "Brooklyn", "Brunswick", "Brunswick East", "Brunswick West", "Bulla", "Bulleen", "Bundoora", "Burnley", "Burnside", "Burnside Heights", 
        "Burwood", "Burwood East", "Cairnlea", "Calder Park", "Camberwell", "Campbellfield", "Canterbury", "Carlton North", "Carlton", 
        "Carnegie", "Caroline Springs", "Carrum", "Carrum Downs", "Caulfield", "Caulfield East", "Caulfield North", "Caulfield South", 
        "Chadstone", "Chelsea", "Chelsea Heights", "Cheltenham", "Chirnside Park", "Clarinda", "Clayton", "Clayton South", "Clematis", 
        "Clifton Hill", "Coburg", "Coburg North", "Cocoroc", "Coldstream", "Collingwood", "Coolaroo", "Craigieburn", "Cranbourne", 
        "Cranbourne East", "Cranbourne North", "Cranbourne South", "Cranbourne West", "Cremorne", "Crib Point", "Croydon", "Croydon Hills", 
        "Croydon North", "Croydon South", "Dallas", "Dandenong", "Dandenong North", "Dandenong South", "Deer Park", "Delahey", "Derrimut", 
        "Diamond Creek", "Dingley Village", "Docklands", "Doncaster", "Doncaster East", "Donvale", "Doreen", "Doveton", "Dromana", 
        "Eaglemont", "East Melbourne", "Edithvale", "Elsternwick", "Eltham", "Eltham North", "Elwood", "Emerald", "Endeavour Hills", "Epping", 
        "Essendon Fields", "Essendon North", "Essendon West", "Essendon", "Eumemmerring", "Fairfield", "Fawkner", "Ferntree Gully", 
        "Ferny Creek", "Fitzroy", "Fitzroy North", "Flemington", "Footscray", "Forest Hill", "Frankston", "Frankston North", "Frankston South", 
        "Gardenvale", "Gladstone Park", "Glen Huntly", "Glen Iris", "Glen Waverley", "Glenroy", "Gowanbrae", "Greensborough", 
        "Greenvale Lakes", "Greenvale", "Guys Hill", "Hadfield", "Hallam", "Hampton", "Hampton East", "Hampton Park", "Harkaway", "Hawthorn", 
        "Hawthorn East", "Heatherdale", "Heatherton", "Heathmont", "Heidelberg", "Heidelberg Heights", "Heidelberg West", "Highett", 
        "Hillside", "Hoppers Crossing", "Houston", "Hughesdale", "Huntingdale", "Hurstbridge", "Ivanhoe", "Ivanhoe East", "Jacana", 
        "Junction Village", "Kallista", "Kalorama", "Karingal", "Kealba", "Keilor", "Keilor Downs", "Keilor East", "Keilor Lodge", 
        "Keilor North", "Keilor Park", "Kensington", "Kerrimuir", "Kew", "Kew East", "Keysborough", "Kilsyth", "Kilsyth South", "Kings Park", 
        "Kingsbury", "Kingsville", "Knoxfield", "Kooyong", "Kurunjang", "Laburnum", "Lalor", "Langwarrin", "Langwarrin South", "Laverton", 
        "Laverton North", "Lilydale", "Lower Plenty", "Lynbrook", "Lyndhurst", "Lysterfield", "Lysterfield South", "Macclesfield", "McCrae", 
        "McKinnon", "Macleod", "Maidstone", "Malvern", "Malvern East", "Maribyrnong", "Meadow Heights", "Melbourne Airport", "Melton (suburb)", 
        "Melton South", "Melton West", "Mentone", "Menzies Creek", "Mernda", "Mickleham", "Middle Park", "Milgate Park Estate", "Mill Park", 
        "Mitcham", "Monbulk", "Mont Albert", "Mont Albert North", "Montmorency", "Montrose", "Moonee Ponds", "Moorabbin Airport", "Moorabbin", 
        "Moorooduc", "Mooroolbark", "Mordialloc", "Mornington", "Mount Dandenong", "Mount Eliza", "Mount Evelyn", "Mount Martha", "Mount Waverley", 
        "Mulgrave", "Narre Warren East", "Narre Warren North", "Narre Warren South", "Narre Warren", "Newport", "Niddrie", "Noble Park", 
        "Noble Park North", "North Melbourne", "North Richmond", "North Warrandyte", "Northcote", "Norwood", "Notting Hill", "Nunawading", 
        "Oak Park", "Oaklands Junction", "Oakleigh", "Oakleigh East", "Oakleigh South", "Olinda", "Olivers Hill", "Ormond", "Pakenham", 
        "Panton Hill", "Park Orchards", "Parkdale", "Parkville", "Pascoe Vale South", "Pascoe Vale", "The Patch", "Patterson Lakes", "Pennydale", 
        "Plenty", "Point Cook", "Port Melbourne", "Portsea", "Prahran", "Preston", "Princes Hill", "Ravenhall", "Research", "Reservoir", "Richmond", 
        "Ringwood", "Ringwood East", "Ringwood North", "Ripponlea", "Rockbank", "Rosanna", "Rosebud", "Rosebud West", "Rowville", "Roxburgh Park", 
        "Rye", "Safety Beach", "St Albans", "St Helena", "St Kilda", "St Kilda East", "St Kilda West", "Sandhurst", "Sandringham", "Sassafras", 
        "Scoresby", "Seabrook", "Seaford", "Seaholme", "Seddon", "Selby", "Seville", "Sherbrooke", "Skye", "Somerton", "Sorrento", "South Kingsville", 
        "South Melbourne", "South Morang", "South Wharf", "South Yarra", "Southbank", "Spotswood", "Springvale", "Springvale South", "Strathmore", 
        "Strathmore Heights", "Sunbury", "Sunshine", "Sunshine North", "Sunshine West", "Surrey Hills", "Sydenham", "Syndal", "Tally Ho", "Tarneit", 
        "Taylors Hill", "Taylors Lakes", "Tecoma", "Templestowe", "Templestowe Lower", "The Basin", "Thomastown", "Thornbury", "Toorak", "Tootgarook", 
        "Tottenham", "Travancore", "Tremont", "Truganina", "Tullamarine", "Upfield", "Upper Ferntree Gully", "Upwey", "Vermont", "Vermont South", 
        "Viewbank", "Wantirna", "Wantirna South", "Warrandyte", "Warrandyte South", "Warranwood", "Waterways", "Watsonia", "Watsonia North", 
        "Wattle Glen", "Waverley Park", "Werribee", "Werribee South", "West Footscray", "West Melbourne", "Westgarth", "Westmeadows", "Wheelers Hill", 
        "Wildwood", "Williams Landing", "Williamstown", "Williamstown North", "Windsor", "Wonga Park", "Wyndham Vale", "Yallambie", "Yarrambat", 
        "Yarraville", "Yuroke"
    ];
    return $data;
}

function sendAdminSMS($book)
{
    $config = Configuration::getDefaultConfiguration()
        ->setUsername(env('CLICKSEND_USERNAME'))
        ->setPassword(env('CLICKSEND_KEY'));

    $passanger_info = json_decode($book['passanger_infos']);
    $name = $passanger_info->full_name;
    $apiInstance = new SMSApi(new Client(), $config);
    $gs = gs();
    $txt = $gs->admin_remind_sms;
    $msg = new SmsMessage();
    $msg->setBody($txt);
    $msg->setTo("+61433185032");
    $msg->setSource("sdk");

    // SmsMessageCollection model
    $sms_messages = new SmsMessageCollection();
    $sms_messages->setMessages([$msg]);

    try {
        $result = $apiInstance->smsSendPost($sms_messages);
        \Log::info('Booking confirmation SMS sent successfully.');
    } catch (\Exception $e) {
        \Log::error('Error sending booking confirmation SMS: ' . $e->getMessage());
    }
}

function sendCustomerSMS($book)
{
    $config = Configuration::getDefaultConfiguration()
        ->setUsername(env('CLICKSEND_USERNAME'))
        ->setPassword(env('CLICKSEND_KEY'));

    $passanger_info = json_decode($book['passanger_infos']);
    $name = $passanger_info->full_name;
    $apiInstance = new SMSApi(new Client(), $config);
    $gs = gs();
    $txt = $gs->customer_remind_sms;
    $msg = new SmsMessage();
    $msg->setBody($txt);
    $msg->setTo($passanger_info->phone_number);
    $msg->setSource("sdk");

    // SmsMessageCollection model
    $sms_messages = new SmsMessageCollection();
    $sms_messages->setMessages([$msg]);

    try {
        $result = $apiInstance->smsSendPost($sms_messages);
        \Log::info('Booking confirmation SMS sent successfully.');
    } catch (\Exception $e) {
        \Log::error('Error sending booking confirmation SMS: ' . $e->getMessage());
    }
}

function sendManualInvoiceSMS($book)
{
    try {
        $config = Configuration::getDefaultConfiguration()
            ->setUsername(env('CLICKSEND_USERNAME'))
            ->setPassword(env('CLICKSEND_KEY'));

        $name = $book->client_name;
        $apiInstance = new ClickSendClient(new Client(), $config);

        $txt = "Booking confirmation Name: {$name}, Phone: {$book->mobile_number}, Pickup Date and Time: {$book->pick_up_date}, {$book->pick_up_time}, Pickup Location: {$book->pick_up_location}";

        $msg = new SmsMessage();
        $msg->setBody($txt);
        $msg->setTo($book->mobile_number);
        $msg->setSource("sdk");

        // SmsMessageCollection model
        $sms_messages = new SmsMessageCollection();
        $sms_messages->setMessages([$msg]);

        $result = $apiInstance->smsSendPost($sms_messages);

        \Log::info('Booking confirmation SMS sent successfully.');
        // You might want to log $result here if needed
    } catch (\Exception $e) {
        \Log::error('Error sending booking confirmation SMS: ' . $e->getMessage());
    }
}

function getPercent($total, $percent){
    $subtotal = $total;
    $percentage = $percent; // 10% in this example
    $percentageAmount = ($subtotal * $percentage) / 100;
    return round($percentageAmount, 2);
}

function showAmount($amount, $decimal = 2, $separate = true, $exceptZeros = false)
{
    $separator = '';
    if ($separate) {
        $separator = ',';
    }
    $printAmount = number_format($amount, $decimal, '.', $separator);
    if ($exceptZeros) {
        $exp = explode('.', $printAmount);
        if ($exp[1] * 1 == 0) {
            $printAmount = $exp[0];
        } else {
            $printAmount = rtrim($printAmount, '0');
        }
    }
    return $printAmount;
}


function getStaticPage(){
    $data = [
        'about_us',
        'terms',
        'privacy',
        'refund',
    ];
    return $data;
}

function getStaticPageURL($page){
    $data = StaticPage::where('page', $page)->latest()->first();
    return $data->slug ?? '#';
}