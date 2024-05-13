<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IframeController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\SubrubController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AmenitieController;
use App\Http\Controllers\GetQouteController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\WhyChooseController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\FareController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Home\PagesController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\FleetController;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\FrontWebController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Customer\StripeController;
use App\Http\Controllers\Customer\TicketController;
use App\Http\Controllers\Customer\BookingController;
use App\Http\Controllers\Driver\DashboardController;
use App\Http\Controllers\Admin\ExaminationController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TaxiHailingController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Admin\SupportTicketController;
use App\Http\Controllers\Admin\TransportTypeController;
use App\Http\Controllers\Customer\CreditCardController;
use App\Http\Controllers\Home\DriverTrainingController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\UsermanagementController;
use App\Http\Controllers\Booking\StoreBookingController;
use App\Http\Controllers\Customer\CustomerPDFController;
use App\Http\Controllers\Admin\FrontWebSectionController;
use App\Http\Controllers\Customer\CustomerAuthController;

/******** Home Routes *********/
Route::get('/blog-post-details/{id}/{slug}', [BlogController::class, 'show'])->name('blog-post-details');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('get-qoute', GetQouteController::class);
Route::get('/pricing', [HomeController::class, 'price'])->name('price');
Route::get('/blog', [BlogController::class, 'index'])->name('home.blog');
Route::get('/google-reviews', [HomeController::class, 'googleReview'])->name('google-reviews');
Route::get('send-reminder-sms', [HomeController::class, 'sendSMS'])->name('send-reminder-sms');
Route::get('invoice-view', function(){
    return view('invoice');
})->name('invoice-view');

Route::get('/contact-us', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/about-us', [HomeController::class, 'about'])->name('home.about');
Route::get('terms-and-conditions', [HomeController::class, 'terms'])->name('terms-and-conditions');
Route::get('privacy-policy', [HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('refund-policy', [HomeController::class, 'refund'])->name('refund-policy');

Route::post('/save-contact', [ContactController::class, 'saveContact'])->name('save-contact');
Route::get('/driver-training', [DriverTrainingController::class, 'index'])->name('driver.training');
Route::get('/get-exam/{id}', [DriverTrainingController::class, 'getExam'])->name('get-exam');
Route::get('/get-exam-questions/{course_id}/{exam_id}', [DriverTrainingController::class, 'getExamQuestions'])->name('get-exam-questions');
Route::post('/store-exam-result', [DriverTrainingController::class, 'storeExamResult'])->name('store-exam-result');

Route::get('our-fleets', [HomeController::class, 'ourFleets'])->name('our-fleets');
Route::get('get-our-fleets-data', [HomeController::class, 'getOurFleets'])->name('get-our-fleets-data');
Route::get('wedding-car-hire-prices-melbourne', [HomeController::class, 'weddingPackage'])->name('wedding-car-hire-prices-melbourne');
Route::get('private-tour-package', [HomeController::class, 'privatePackage'])->name('private-tour-package');

// iframe routes
Route::get('/iframe-form', [IframeController::class, 'iframeForm'])->name('iframe.form');

// Google Login
Route::get('/login/google', [SocialLoginController::class, 'redirectToGoogle'])->name('google-login');
Route::get('/login/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);


// front booking routes
Route::get('get-booking-form/{id}', [BookingController::class, 'getBookingForm'])->name('get-booking-form');
Route::get('get-fare-by-service/{id}', [BookingController::class, 'getFareByService'])->name('get-fare-by-service');
Route::post('front-booking-save', [BookingController::class, 'frontBookingSave'])->name('front-booking-save');

/******** Admin Routes *********/
Route::get('/admin-login', [AuthController::class, 'index'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post');

// Search Route Shamim code
Route::get('search', [FrontWebController::class, 'search'])->name('search');
// customer login routes
Route::get('user-login', [CustomerAuthController::class, 'login'])->name('user-login');
Route::post('user-post-login', [CustomerAuthController::class, 'postLogin'])->name('user-post-login');

Route::get('logout-user', [CustomerAuthController::class, 'logout'])->name('logout-user');
Route::get('user-register', [CustomerAuthController::class, 'register'])->name('user-register');
Route::post('user-register-post', [CustomerAuthController::class, 'registerPost'])->name('user-register-post');
Route::post('newsletter', [NewsletterController::class, 'store'])->name('newsletter');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('book-now', [BookingController::class, 'index'])->name('book-now');
Route::get('get-qoute-booking-form', [BookingController::class, 'getBookingFromByQouteService'])->name('get-qoute-booking-form');

Route::get('get-fleets-data', [BookingController::class, 'getFleetsData'])->name('find-vehicle');


Route::get('add-return-trip', [BookingController::class, 'addReturnTrip'])->name('add-return-trip');
Route::get('remove-return-trip', [BookingController::class, 'removeReturnTrip'])->name('remove-return-trip');
Route::post('get-fleets-for-booking', [BookingController::class, 'getFleetBooking'])->name('get-fleets-for-booking');
Route::post('fare-estimator', [StoreBookingController::class, 'fareEstimate'])->name('fare-estimator');

Route::get('payment-page', [StoreBookingController::class, 'paymentPage'])->name('payment-page');
Route::get('get-payment-page', [StoreBookingController::class, 'paymentPageData'])->name('get-payment-page');

Route::post('find-coupon-code', [StoreBookingController::class, 'findCouponCode'])->name('find-coupon-code');
Route::get('get-subrub-list', [StoreBookingController::class, 'getSubrubList']);


// store booking form data
Route::get('select-fleet/{id}', [StoreBookingController::class, 'selectFleet'])->name('select-fleet');
Route::post('store-ride-info', [StoreBookingController::class, 'rideInfoStore'])->name('store-ride-info');
Route::post('final-step-store-booking', [StoreBookingController::class, 'storeAllBookingData'])->name('final-step-store-booking');

Route::get('store-return-ride-info', [StoreBookingController::class, 'rideReturnInfoStore'])->name('store-return-ride-info');
Route::get('remove-return-ride-info', [StoreBookingController::class, 'rideReturnInfoRemove'])->name('remove-return-ride-info');

Route::group(['middleware' => 'auth', 'is_admin'], function () {

    Route::resource('vehicles', VehicleController::class);
    Route::get('get-vehicles', [VehicleController::class, 'getVehicles']);
    Route::resource('whychoose', WhyChooseController::class);
    Route::resource('faq', FaqController::class);

    Route::get('/chart-data', [AuthController::class, 'getChartData']);
    Route::get('/pie-chart-data', [AuthController::class, 'getPieChartData']);
    Route::get('create-invoice', [InvoiceController::class, 'invoiceCreate'])->name('create-invoice');
    Route::get('manual-invoices', [InvoiceController::class, 'manualInvoices'])->name('manual-invoices');
    Route::get('edit-invoice/{id}', [InvoiceController::class, 'edit'])->name('edit-invoice');
    Route::get('print-invoice/{id}', [InvoiceController::class, 'print'])->name('print-invoice');
    Route::get('show-invoice/{id}', [InvoiceController::class, 'show'])->name('show-invoice');
    Route::post('store-manual-imvoice', [InvoiceController::class, 'invoiceStore'])->name('store-manual-imvoice');
    Route::put('update-manual-imvoice/{id}', [InvoiceController::class, 'invoiceUpdate'])->name('update-manual-imvoice');

    // User needs to be authenticated to enter here.
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // users routes
    Route::get('user-list', [UsermanagementController::class, 'index'])->name('user-list');
    Route::get('user-create', [UsermanagementController::class, 'create'])->name('user-create');
    Route::get('user-edit/{id}', [UsermanagementController::class, 'edit'])->name('user-edit');
    Route::get('user-details/{id}', [UsermanagementController::class, 'show'])->name('user-details');

    // category routes
    Route::get('category-list', [CategoryController::class, 'index'])->name('category-list');
    Route::get('category-create', [CategoryController::class, 'create'])->name('category-create');
    Route::get('category-edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    Route::get('category-details/{id}', [CategoryController::class, 'show'])->name('category-details');

    // tag routes
    Route::get('tag-list', [TagController::class, 'index'])->name('tag-list');
    Route::get('tag-create', [TagController::class, 'create'])->name('tag-create');
    Route::get('tag-edit/{id}', [TagController::class, 'edit'])->name('tag-edit');
    Route::get('tag-details/{id}', [TagController::class, 'show'])->name('tag-details');

    // sub category routes
    Route::get('subcategory-list', [SubCategoryController::class, 'index'])->name('subcategory-list');
    Route::get('subcategory-create', [SubCategoryController::class, 'create'])->name('subcategory-create');
    Route::get('subcategory-edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategory-edit');
    Route::get('subcategory-details/{id}', [SubCategoryController::class, 'show'])->name('subcategory-details');
    Route::post('get-subcategories', [SubCategoryController::class, 'fetchSubcategory']);

    // post routes
    Route::get('post-list', [PostController::class, 'index'])->name('post-list');
    Route::get('post-create', [PostController::class, 'create'])->name('post-create');
    Route::get('post-edit/{id}', [PostController::class, 'edit'])->name('post-edit');
    Route::get('post-details/{id}', [PostController::class, 'show'])->name('post-details');

    // profiles routes
    Route::get('user-profile', [UserProfileController::class, 'userProfile'])->name('user-profile');

    // roles routes
    Route::get('role-list', [RoleController::class, 'index'])->name('role-list');
    Route::get('role-create', [RoleController::class, 'create'])->name('role-create');
    Route::get('role-edit/{id}', [RoleController::class, 'edit'])->name('role-edit');
    Route::get('role-details/{id}', [RoleController::class, 'show'])->name('role-details');


    // service routes \
    Route::get('service-list', [ServiceController::class, 'index'])->name('service-list');
    Route::get('service-create', [ServiceController::class, 'create'])->name('service-create');
    Route::get('service-edit/{id}', [ServiceController::class, 'edit'])->name('service-edit');

    // service routes \
    Route::get('fare-list', [FareController::class, 'index'])->name('fare-list');
    Route::get('fare-create', [FareController::class, 'create'])->name('fare-create');
    Route::get('fare-edit/{id}', [FareController::class, 'edit'])->name('fare-edit');


    // service types routes \
    Route::get('service-type-list', [ServiceTypeController::class, 'index'])->name('service-type-list');
    Route::get('service-type-create', [ServiceTypeController::class, 'create'])->name('service-type-create');
    Route::get('service-type-edit/{id}', [ServiceTypeController::class, 'edit'])->name('service-type-edit');


    // transport type routes \
    Route::get('transport-type-list', [TransportTypeController::class, 'index'])->name('transport-type-list');
    Route::get('transport-type-create', [TransportTypeController::class, 'create'])->name('transport-type-create');
    Route::get('transport-type-edit/{id}', [TransportTypeController::class, 'edit'])->name('transport-type-edit');


    // driver registration routes \
    Route::get('driver-list', [DriverController::class, 'index'])->name('driver-list');
    Route::get('driver-create', [DriverController::class, 'create'])->name('driver-create');
    Route::get('driver-edit/{id}', [DriverController::class, 'edit'])->name('driver-edit');

    // driver registration routes \
    Route::get('coupon-list', [CouponController::class, 'index'])->name('coupon-list');
    Route::get('coupon-create', [CouponController::class, 'create'])->name('coupon-create');
    Route::get('coupon-edit/{id}', [CouponController::class, 'edit'])->name('coupon-edit');


    // driver transport assign roues
    Route::get('transport-assign', [DriverController::class, 'driverAssign'])->name('transport-assign');
    Route::get('driver-approve/{id}', [DriverController::class, 'driverStatus'])->name('driver-approve');
    Route::get('driver-details/{id}', [DriverController::class, 'driverDetails'])->name('driver-details');

    // amenities routes \
    Route::get('amenitie-list', [AmenitieController::class, 'index'])->name('amenitie-list');
    Route::get('amenitie-create', [AmenitieController::class, 'create'])->name('amenitie-create');
    Route::get('amenitie-edit/{id}', [AmenitieController::class, 'edit'])->name('amenitie-edit');
    Route::post('text-editor-file-upload', [FileManagerController::class, 'uploadEditorFile'])->name('text-editor-file-upload');

    Route::get('pages', [FrontWebController::class, 'index'])->name('pages.index');
    Route::get('page-create', [FrontWebController::class, 'create'])->name('pages.create');
    Route::get('page-show/{id}', [FrontWebController::class, 'show'])->name('pages.show');
    Route::get('page-edit/{id}', [FrontWebController::class, 'edit'])->name('pages.edit');
    Route::delete('page-delete/{id}', [FrontWebController::class, 'destroy'])->name('pages.destroy');
    Route::put('page-update/{id}', [FrontWebController::class, 'update'])->name('pages.update');
    Route::post('page-store', [FrontWebController::class, 'store'])->name('pages.store');

    Route::get('menus', [MenuController::class, 'index'])->name('menus.index');
    Route::get('menus-create', [MenuController::class, 'create'])->name('menus.create');
    Route::get('menus-edit/{id}', [MenuController::class, 'edit'])->name('menus.edit');
    Route::delete('menus-delete/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');
    Route::put('menus-update/{id}', [MenuController::class, 'update'])->name('menus.update');
    Route::post('menus-store', [MenuController::class, 'store'])->name('menus.store');


    Route::get('front-section', [FrontWebSectionController::class, 'index'])->name('front-section');
    Route::get('frontend-sections/{key}', [FrontWebSectionController::class, 'frontendSections'])->name('frontend-sections');
    Route::post('frontend-content/{key}', [FrontWebSectionController::class, 'frontendContent'])->name('frontend-content');

    Route::post('editor-upload-image', [FrontWebSectionController::class, 'editorFileUpload'])->name('editor-upload-image');
});

Route::group(['middleware' => ['auth']], function () {
    Route::post('update-user-password', [UserProfileController::class, 'updatePassword'])->name('update-user-password');
    Route::post('user-profile-update', [UserProfileController::class, "updateUserInformation"])->name('user-profile-update');
    Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
    Route::get('customer-dashboard', [CustomerAuthController::class, 'dashboard'])->name('customer-dashboard');

    // routes/web.php or routes/api.php
    Route::resource('credit-cards', CreditCardController::class);
    Route::resource('subrubs', SubrubController::class);


    Route::prefix('customer')->group(function () {
        Route::get('booking-list', [BookingController::class, 'bookingList'])->name('booking-list');
        Route::get('payment-list', [BookingController::class, 'paymentList'])->name('payment-list');

        Route::get('customer-booking-create', [BookingController::class, 'bookingCreate'])->name('customer-booking-create');
        Route::get('fetch-transport/{id}', [BookingController::class, 'searchDrivers'])->name('fetch-transport');
        Route::post('booking-store', [BookingController::class, 'bookingStore'])->name('booking-store');
        Route::get('give-driver-review/{id}', [BookingController::class, 'driverReview'])->name('give-driver-review');
        Route::get('view-booking-details/{id}', [BookingController::class, 'bookingDetails'])->name('view-booking-details');
        Route::get('make-booking-payment/{id}', [BookingController::class, 'makeBookingPayment'])->name('make-booking-payment');
        Route::get('get-booking-edit-data/{booking_id}/{service_id}', [BookingController::class, 'getBookingEditData'])->name('get-booking-edit-data');

        Route::post('customer-review-store', [BookingController::class, 'storeReview'])->name('customer-review-store');
        Route::post('init-payment-process', [BookingController::class, 'initPaymentProcess'])->name('init-payment-process');
        Route::get('get-fare-by-service/{id}', [BookingController::class, 'getFareByService'])->name('get-fare-by-service');

        Route::get('customer-booking-cancell/{id}', [BookingController::class, 'customerBookingCancell'])->name('customer-booking-cancell');

        Route::get('customer-completed-trip', [BookingController::class, 'completedTrip'])->name('customer-completed-trip');
        Route::get('customer-pending-trip', [BookingController::class, 'pendingTrip'])->name('customer-pending-trip');
        Route::get('customer-cancelled-trip', [BookingController::class, 'cancelTrip'])->name('customer-cancelled-trip');

        Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
        Route::get('cancel', [PayPalController::class, 'cancel'])->name('payment.cancel');
        Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');

        // support ticket system customer
        Route::prefix('ticket')->name('ticket.')->group(function () {
            Route::get('/', [TicketController::class, 'supportTicket'])->name('index');
            Route::get('new', [TicketController::class, 'openSupportTicket'])->name('open');
            Route::post('create', [TicketController::class, 'storeSupportTicket'])->name('store');
            Route::get('view/{ticket}', [TicketController::class, 'viewTicket'])->name('view');
            Route::post('reply/{ticket}', [TicketController::class, 'replyTicket'])->name('reply');
            Route::post('close/{ticket}', [TicketController::class, 'closeTicket'])->name('close');
            Route::get('download/{ticket}', [TicketController::class, 'ticketDownload'])->name('download');
        });

        // download pdf
        Route::get('generate-pdf/{id}', [CustomerPDFController::class, 'generatePDF'])->name('generate-pdf');
    });
});

Route::group(['middleware' => ['auth', 'log_activity', 'is_admin']], function () {

    Route::resource('features', FeatureController::class);

    Route::resource('packages', PackageController::class);

    Route::put('category-update/{id}', [CategoryController::class, 'update'])->name('category-update');
    Route::post('category-store', [CategoryController::class, 'store'])->name('category-store');
    Route::delete('category-delete/{id}', [CategoryController::class, 'destroy'])->name('category-delete');
    Route::put('tag-update/{id}', [TagController::class, 'update'])->name('tag-update');
    Route::post('tag-store', [TagController::class, 'store'])->name('tag-store');
    Route::delete('tag-delete/{id}', [TagController::class, 'destroy'])->name('tag-delete');

    Route::put('subcategory-update/{id}', [SubCategoryController::class, 'update'])->name('subcategory-update');
    Route::post('subcategory-store', [SubCategoryController::class, 'store'])->name('subcategory-store');
    Route::delete('subcategory-delete/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory-delete');

    Route::put('fare-update/{id}', [FareController::class, 'update'])->name('fare-update');
    Route::post('fare-store', [FareController::class, 'store'])->name('fare-store');
    Route::delete('fare-delete/{id}', [FareController::class, 'destroy'])->name('fare-delete');

    Route::put('coupon-update/{id}', [CouponController::class, 'update'])->name('coupon-update');
    Route::post('coupon-store', [CouponController::class, 'store'])->name('coupon-store');
    Route::delete('coupon-delete/{id}', [CouponController::class, 'destroy'])->name('coupon-delete');

    Route::put('post-update/{id}', [PostController::class, 'update'])->name('post-update');
    Route::post('post-store', [PostController::class, 'store'])->name('post-store');
    Route::delete('post-delete/{id}', [PostController::class, 'destroy'])->name('post-delete');

    Route::post('role-store', [RoleController::class, 'store'])->name('role-store');
    Route::post('role-update', [RoleController::class, 'updatePermission'])->name('role-update');
    Route::delete('role-delete/{id}', [RoleController::class, 'destroy'])->name('role-delete');

    Route::post('service-store', [ServiceController::class, 'store'])->name('service-store');
    Route::post('service-update', [ServiceController::class, 'update'])->name('service-update');
    Route::delete('service-delete/{id}', [ServiceController::class, 'destroy'])->name('service-delete');

    Route::post('service-type-store', [ServiceTypeController::class, 'store'])->name('service-type-store');
    Route::post('service-type-update', [ServiceTypeController::class, 'update'])->name('service-type-update');

    Route::post('transport-type-store', [TransportTypeController::class, 'store'])->name('transport-type-store');
    Route::post('transport-type-update', [TransportTypeController::class, 'update'])->name('transport-type-update');
    Route::delete('transport-type-delete/{id}', [TransportTypeController::class, 'destroy'])->name('transport-type-delete');

    Route::post('driver-store', [DriverController::class, 'store'])->name('driver-store');
    Route::post('driver-update', [DriverController::class, 'update'])->name('driver-update');
    Route::delete('driver-delete/{id}', [DriverController::class, 'destroy'])->name('driver-delete');

    Route::put('user-update/{id}', [UsermanagementController::class, 'update'])->name('user-update');
    Route::post('user-store', [UsermanagementController::class, 'store'])->name('user-store');
    Route::delete('user-delete/{id}', [UsermanagementController::class, 'destroy'])->name('user-delete');

    Route::post('assign-transport-to-driver', [DriverController::class, 'assignDriverToTransport'])->name('assign-transport-to-driver');
    Route::post('driver-status-store', [DriverController::class, 'driverStatusStore'])->name('driver-status-store');

    Route::post('amenitie-store', [AmenitieController::class, 'store'])->name('amenitie-store');
    Route::post('amenitie-update', [AmenitieController::class, 'update'])->name('amenitie-update');
    Route::delete('amenitie-delete/{id}', [AmenitieController::class, 'destroy'])->name('amenitie-delete');

    //======= Course Routes =============
    Route::get('add-course', [CourseController::class, 'index'])->name('course.create');
    Route::get('course-list', [CourseController::class, 'courseList'])->name('course-list');
    Route::post('save-course', [CourseController::class, 'saveCourse'])->name('course.save');
    Route::get('/delete-course/{id}', [CourseController::class, 'destroy'])->name('delete.course');
    Route::get('/edit-course/{id}', [CourseController::class, 'editCourse'])->name('edit.course');
    Route::post('update-course/{id}', [CourseController::class, 'updateCourse'])->name('update.course');

    //======= Question Routes =============
    Route::get('add-question', [QuestionController::class, 'index'])->name('question.create');
    Route::get('question-list', [QuestionController::class, 'questionList'])->name('question.list');
    Route::post('save-question', [QuestionController::class, 'store'])->name('question.save');
    Route::delete('/question-delete/{id}', [QuestionController::class, 'destroy'])->name('delete.question');
    Route::get('/edit-question/{id}', [QuestionController::class, 'edit'])->name('edit.question');
    Route::post('update-question/{id}', [QuestionController::class, 'update'])->name('questions.update');

    //======= Examination Routes =============
    Route::get('add-examination', [ExaminationController::class, 'index'])->name('examination.create');
    Route::get('examination-list', [ExaminationController::class, 'examinationList'])->name('examination.list');
    Route::post('save-examination', [ExaminationController::class, 'store'])->name('examination.save');
    Route::delete('/delete-examination/{id}', [ExaminationController::class, 'destroy'])->name('examinations.destroy');
    Route::get('/edit-examination/{id}', [ExaminationController::class, 'editExamination'])->name('examinations.edit');
    Route::put('update-examination/{id}', [ExaminationController::class, 'update'])->name('examination.update');

    //Customer routes
    Route::resource('customer', CustomerController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('fleets', FleetController::class);

    Route::get('home-page-data', [HomePageController::class, 'homeData'])->name('home-page-data');
    Route::post('save-home-data', [HomePageController::class, 'homeDataSave'])->name('save-home-data');

    Route::get('contact-page-data', [HomePageController::class, 'contactData'])->name('contact-page-data');
    Route::post('save-contact-data', [HomePageController::class, 'contactDataSave'])->name('save-contact-data');

    Route::get('customer-delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');


    // booking confirm routes
    Route::get('taxi-booking-confirm/{id}', [\App\Http\Controllers\Admin\BookingController::class, 'confirmBooking'])->name('taxi-booking-confirm');
    Route::get('taxi-booking-cancell/{id}', [\App\Http\Controllers\Admin\BookingController::class, 'cancellBooking'])->name('taxi-booking-cancell');

    // Taxi hailing management routes
    Route::get('registered-taxi-hailing', [TaxiHailingController::class, 'registeredTaxiHailing'])->name('registered-taxi-hailing');

    Route::prefix('application-setting')->group(function () {
        Route::get('/setting', [SettingController::class, 'index'])->name('setting');
        Route::get('/cache-clear', [SettingController::class, 'cachClear'])->name('cache-clear');
        Route::get('/email-setting', [SettingController::class, 'emailSetting'])->name('email-setting');
        Route::get('/send-test-email', [SettingController::class, 'emailTesting'])->name('send-test-email');
        Route::get('/database-backup', [SettingController::class, 'databaseBackup'])->name('database-backup');
        Route::get('/user-logs', [SettingController::class, 'userLog'])->name('user-logs');
        Route::get('/get-log-data', [SettingController::class, 'getLogData'])->name('get-log-data');
        Route::post('/log-search', [SettingController::class, 'logSearch'])->name('log-search');

        Route::post('/setting-update', [SettingController::class, 'update'])->name('setting-update');
        Route::post('/email-setting-update', [SettingController::class, 'emailSettingUpdate'])->name('email-setting-update');
        Route::get('application-cache-clear', [SettingController::class, 'cachClear'])->name('application-cache-clear');
    });

    // Admin Support
    Route::prefix('ticket')->name('admin.ticket.')->group(function () {
        Route::get('/', [SupportTicketController::class, 'tickets'])->name('index');
        Route::get('pending', [SupportTicketController::class, 'pendingTicket'])->name('pending');
        Route::get('closed', [SupportTicketController::class, 'closedTicket'])->name('closed');
        Route::get('answered', [SupportTicketController::class, 'answeredTicket'])->name('answered');
        Route::get('view/{id}', [SupportTicketController::class, 'ticketReply'])->name('view');
        Route::post('reply/{id}', [SupportTicketController::class, 'replyTicket'])->name('reply');
        Route::post('close/{id}', [SupportTicketController::class, 'closeTicket'])->name('close');
        Route::get('download/{ticket}', [SupportTicketController::class, 'ticketDownload'])->name('download');
        Route::post('delete/{id}', [SupportTicketController::class, 'ticketDelete'])->name('delete');
    });
});

Route::group(['middleware' => ['auth', 'log_activity']], function () {
    Route::prefix('application-setting')->group(function () {
        Route::post('/setting-update', [SettingController::class, 'update'])->name('setting-update');
        Route::post('/email-setting-update', [SettingController::class, 'emailSettingUpdate'])->name('email-setting-update');
        Route::get('application-cache-clear', [SettingController::class, 'cachClear'])->name('application-cache-clear');
    });

    //======= Course Routes =============
    Route::get('add-course', [CourseController::class, 'index'])->name('course.create');
    Route::get('course-list', [CourseController::class, 'courseList'])->name('course.list');
    Route::post('save-course', [CourseController::class, 'saveCourse'])->name('course.save');
    Route::get('/delete-course/{id}', [CourseController::class, 'destroy'])->name('delete.course');
    Route::get('/edit-course/{id}', [CourseController::class, 'editCourse'])->name('edit.course');
    Route::post('update-course/{id}', [CourseController::class, 'updateCourse'])->name('update.course');

    //======= Question Routes =============
    Route::get('add-question', [QuestionController::class, 'index'])->name('question.create');
    Route::get('question-list', [QuestionController::class, 'questionList'])->name('question.list');
    Route::post('save-question', [QuestionController::class, 'store'])->name('question.save');
    Route::delete('/question-delete/{id}', [QuestionController::class, 'destroy'])->name('delete.question');
    Route::get('/edit-question/{id}', [QuestionController::class, 'edit'])->name('edit.question');
    Route::post('update-question/{id}', [QuestionController::class, 'update'])->name('questions.update');

    //======= Examination Routes =============
    Route::get('add-examination', [ExaminationController::class, 'index'])->name('examination.create');
    Route::get('examination-list', [ExaminationController::class, 'examinationList'])->name('examination.list');
    Route::post('save-examination', [ExaminationController::class, 'store'])->name('examination.save');
    Route::delete('/delete-examination/{id}', [ExaminationController::class, 'destroy'])->name('examinations.destroy');
    Route::get('/edit-examination/{id}', [ExaminationController::class, 'editExamination'])->name('examinations.edit');
    Route::put('update-examination/{id}', [ExaminationController::class, 'update'])->name('examination.update');

    //Customer routes
    Route::resource('customer', CustomerController::class);
    Route::get('customer-delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete');


    // Taxi hailing management routes
    Route::resource('taxi-booking', TaxiHailingController::class);

    Route::get('taxi-booking-delete/{id}', [TaxiHailingController::class, 'destroy'])->name('taxi-booking.delete');
    Route::get('registered-taxi-hailing', [TaxiHailingController::class, 'registeredTaxiHailing'])->name('registered-taxi-hailing');

    // Review routes for admin
    Route::get('admin/customer-review', [ReviewController::class, 'customerReview'])->name('customer-review.index');
    Route::get('customer-review-delete/{id}', [ReviewController::class, 'deleteCustomerReview'])->name('customer-review.delete');
    Route::get('admin/driver-review', [ReviewController::class, 'driverReview'])->name('driver-review.index');
    Route::get('driver-review-delete/{id}', [ReviewController::class, 'deleteDriverReview'])->name('driver-review.delete');
});

Route::get('/{slug}', [PageController::class, 'show']);
