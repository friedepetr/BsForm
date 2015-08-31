Getting Started with BsForm
---------------------------
BsForm is the extension for building forms with LaravelCollective.com
This Extension you can use very simply. Of course, that you should be installed Laravel 5.1 :-)

Register in <strong>config/app.php</strong>
---------------------------------------------- 

All what you need to do is register new <strong>BsServiceProvider</strong>

    /* Application Service Providers...*/
    App\Providers\BsServiceProvider::class,

And at the end of the file <strong>config/app.php</strong>, add alias for <strong>BsForm</strong> like this:

    'BsForm'    => App\BsForm::class
