Getting Started with BsForm
---------------------------
BsForm is the extension for building forms with LaravelCollective.com
BsForm uses form very simply and simplifies and extendings some function of FormBuilder in Collective\Html\HtmlServiceProvider::class
This Extension use the form very simply. Of course, that you should be installed Laravel 5.1 :-)

Register in <strong>config/app.php</strong>
---------------------------------------------- 

All what you need to do is register new <strong>BsServiceProvider</strong>

    /* Application Service Providers...*/
    App\Providers\BsServiceProvider::class,

And at the end of the file <strong>config/app.php</strong>, add alias for <strong>BsForm</strong> like this:

    'BsForm'    => App\BsForm::class
